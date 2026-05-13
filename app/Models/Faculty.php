<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Faculty extends Model
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
        'image',
        'designation',
        'location',
        'phone',
        'email',
        'description',
        'biography',
        'experience',
        'education',
        'facebook',
        'linkedin',
        'youtube',
        'twitter',
        'skype',
        'cv',
        'sort_order',
        'seo_tags',
        'status',
    ];

    public function author()
    {
        return $this->belongsTo(AdminUser::class, 'admin_user_id');
    }

    public function researchGuides()
    {
        return $this->hasMany(ResearchGuide::class, 'faculty_id');
    }

    public function outreachGuides()
    {
        return $this->hasMany(OutreachGuide::class, 'faculty_id');
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
}
