<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    use HasFactory;

    protected $fillable = [
        'page',
        'content'
    ];

    public function scopePageMeta($query, $page)
    {
        $meta = $query->where('page', $page)->first();
        return $meta ? $meta->content : '';
    }

}
