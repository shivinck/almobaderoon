<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Str;

class AdminUser extends Authenticatable
{
    use HasFactory, SoftDeletes;

    const STATUS_ACTIVE = 'active';
    const STATUS_BLOCKED = 'blocked';
    const STATUS_PENDING = 'pending';
    const STATUS_ARCHIVED = 'archived';

    protected $fillable = [
        'name',
        'slug',
        'designation',
        'avatar',
        'about',
        'email',
        'password',
        'google2fa_secret',
        'role_id',
        'status',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function authoredFaculties()
    {
        return $this->hasMany(Faculty::class, 'admin_user_id');
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

    public function getAvatarAttribute($value)
    {
        if (is_null($value)) {
            $name = urlencode($this->name); // Reference the name column
            return "https://ui-avatars.com/api/?name={$name}&background=3ca586&color=fff";
        }

        return $value;
    }
}
