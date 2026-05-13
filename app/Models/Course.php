<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Course extends Model
{
    use HasFactory, SoftDeletes;

    const STATUS_DRAFT = 'draft';
    const STATUS_PUBLISHED = 'published';
    const STATUS_UNPUBLISHED = 'unpublished';
    const STATUS_ARCHIVED = 'archived';

    protected $fillable = [
        'admin_user_id',
        'name',
        'slug',
        'type',
        'duration',
        'seats',
        'languages',
        'image',
        'description',
        'document',
        'notes',
        'sort_order',
        'tags',
        'seo_tags',
        'status',
    ];

    public function author()
    {
        return $this->belongsTo(AdminUser::class, 'admin_user_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($faculty) {
            $faculty->slug = static::generateUniqueSlug($faculty->name);
        });

        static::updating(function ($faculty) {
            if ($faculty->isDirty('name')) {
                $faculty->slug = static::generateUniqueSlug($faculty->name, $faculty->id);
            }
        });
    }

    protected static function generateUniqueSlug($name, $excludeId = null)
    {
        $slug = Str::slug($name);
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
        return $query->where('status', Faculty::STATUS_PUBLISHED)->orderBy('sort_order', 'asc');
    }

    public function scopeFindBySlug($query, $slug)
    {
        return $query->where(['status' => Faculty::STATUS_PUBLISHED, "slug" => $slug])->first();
    }

    public function getFullUrlAttribute()
    {
        return route('get.about.courseView', ['slug' => $this->slug]);
    }

    public function getDocumentNameAttribute()
    {
        $filePath = $this->attributes['document'];
        $documentName = basename($filePath);
        return $documentName;
    }

}
