<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Journal extends Model
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
        'author',
        'published_on',
        'image',
        'document',
        'description',
        'sort_order',
        'tags',
        'seo_tags',
        'status',
    ];

    protected $attributes = [
        'sort_order' => 100,
    ];

    public function user()
    {
        return $this->belongsTo(AdminUser::class, 'admin_user_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($news) {
            $news->slug = static::generateUniqueSlug($news->title);
        });

        static::updating(function ($news) {
            if ($news->isDirty('title')) {
                $news->slug = static::generateUniqueSlug($news->title, $news->id);
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
        return $query->where('status', Faculty::STATUS_PUBLISHED)->orderBy('sort_order', 'desc')->orderBy('created_at', 'asc');
    }

    public function getFormattedCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->format('d F, Y');
    }

    public function getFormattedPublishedOnAttribute()
    {
        return Carbon::parse($this->attributes['published_on'])->format('d F, Y');
    }

    public function getPublishedYearAttribute()
    {
        return $this->published_on ? Carbon::parse($this->published_on)->year : null;
    }
}
