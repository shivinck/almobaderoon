<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Calendar extends Model
{
    use HasFactory, SoftDeletes;

    const STATUS_DRAFT = 'draft';
    const STATUS_PUBLISHED = 'published';
    const STATUS_UNPUBLISHED = 'unpublished';
    const STATUS_ARCHIVED = 'archived';

    protected $fillable = [
        'admin_user_id',
        'label',
        'title',
        'slug',
        'image',
        'description',
        'from_date',
        'end_date',
        'location',
        'sort_order',
        'seo_tags',
        'status',
    ];

    protected $attributes = [
        'sort_order' => 100,
    ];

    public function author()
    {
        return $this->belongsTo(AdminUser::class, 'admin_user_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($calendar) {
            $calendar->slug = static::generateUniqueSlug($calendar->title);
        });

        static::updating(function ($calendar) {
            if ($calendar->isDirty('title')) {
                $calendar->slug = static::generateUniqueSlug($calendar->title, $calendar->id);
            }
        });
    }

    protected static function generateUniqueSlug($title, $excludeId = null)
    {
        $slug = Str::slug($title);
        $originalSlug = $slug;
        $count = 1;

        while (static::where('slug', $slug)->when($excludeId, function ($query, $excludeId) {
            return $query->where('id', '!=', $excludeId);
        })->exists()) {
            $slug = $originalSlug . '-' . str_pad($count, 2, '0', STR_PAD_LEFT);
            $count++;
        }

        return $slug;
    }

    public function scopePublishedOrdered($query)
    {
        return $query->where('status', Calendar::STATUS_PUBLISHED)->orderBy('sort_order', 'asc')->orderBy('from_date', 'desc');
    }

    public function getDateRangeAttribute()
    {
        $start = Carbon::parse($this->from_date);
        $dateRange = [];

        if ($this->end_date) {
            $end = Carbon::parse($this->end_date);

            $dateRange = [
                'day' => $start->format('l') . ' - ' . $end->format('l'),
                'date' => $start->format('M d') . ' - ' . $end->format('M d'),
                'year' => $start->format('Y'),
            ];
        } else {
            $dateRange = [
                'day' => $start->format('l'),
                'date' => $start->format('M d'),
                'year' => $start->format('Y'),
            ];
        }

        return $dateRange;
    }

    public function getGoogleCalendarLinkAttribute()
    {
        $start = Carbon::parse($this->from_date);
        $end = $this->end_date ? Carbon::parse($this->end_date) : null;

        $googleCalendarUrl = 'https://calendar.google.com/calendar/render?action=TEMPLATE';
        $googleCalendarUrl .= '&text=' . urlencode($this->title);
        $googleCalendarUrl .= '&dates=' . $start->format('Ymd\THis');

        if ($end) {
            $googleCalendarUrl .= '/' . $end->format('Ymd\THis');
        }

        $googleCalendarUrl .= '&details=' . urlencode($this->description);
        $googleCalendarUrl .= '&location=' . urlencode($this->location);

        return $googleCalendarUrl;
    }
}
