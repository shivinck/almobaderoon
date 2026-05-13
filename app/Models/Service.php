<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Service extends Model
{
    use HasFactory, SoftDeletes;

    const STATUS_DRAFT = 'draft';
    const STATUS_PUBLISHED = 'published';
    const STATUS_UNPUBLISHED = 'unpublished';
    const STATUS_ARCHIVED = 'archived';



    protected $fillable = [
        'admin_user_id',
        'name',
        'title',
        'slug',
        'image',
        'short_description',
        'content',
        'sort_order',
        'tags',
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

        static::creating(function ($event) {
            $event->slug = static::generateUniqueSlug($event->title);
        });

        static::updating(function ($event) {
            if ($event->isDirty('title')) {
                $event->slug = static::generateUniqueSlug($event->title, $event->id);
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
        return $query->where('status', Faculty::STATUS_PUBLISHED)->orderBy('sort_order', 'asc')->orderBy('created_at', 'desc');
    }

    public function scopeFindBySlug($query, $slug, $flag = false)
    {
        if ($flag) {
            return $query->where('slug', $slug)
                         ->whereIn('status', [Faculty::STATUS_PUBLISHED, Faculty::STATUS_UNPUBLISHED])
                         ->firstOrFail();
        } else {
            return $query->where(['status' => Faculty::STATUS_PUBLISHED, 'slug' => $slug])->firstOrFail();
        }
    }



    public function getFullUrlAttribute()
    {
        return route('get.serviceView', ['slug' => $this->slug]);
    }

    public function getFormattedCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->format('d F, Y');
    }

    public function getFormattedFromDateAttribute()
    {
        return Carbon::parse($this->attributes['from_date'])->format('F d, Y');
    }

    public function getFormattedEndDateAttribute()
    {
        return Carbon::parse($this->attributes['end_date'])->format('F d, Y');
    }

    public function getTagsAttribute()
    {
        return explode(",", $this->attributes['tags']);
    }
    public function scopePublished($query)
    {
        return $query->where('status', News::STATUS_PUBLISHED)->orderBy('created_at', 'desc');
    }
    public static function getLatestPublishedNews($limit = 5)
    {
        return self::published()->orderBy('created_at', 'desc')->take($limit)->get();
    }
}
