<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventGallery extends Model
{
    use HasFactory;

    use HasFactory, SoftDeletes;

    const STATUS_DRAFT = 'draft';
    const STATUS_PUBLISHED = 'published';
    const STATUS_UNPUBLISHED = 'unpublished';
    const STATUS_ARCHIVED = 'archived';

    protected $fillable = [
        'admin_user_id',
        'event_id',
        'title',
        'media',
        'sort_order',
        'status',
    ];

    public function author()
    {
        return $this->belongsTo(AdminUser::class, 'admin_user_id');
    }

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }

    public function getFullUrlAttribute()
    {
        return route('get.galleryView', ['slug' => $this->event->slug]);
    }

    public function scopePublishedOrdered($query)
    {
        return $query->where('status', Faculty::STATUS_PUBLISHED)->orderBy('sort_order', 'asc');
    }

    protected $appends = ['full_url'];
}
