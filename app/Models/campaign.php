<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;


class Campaign extends Model
{
    use HasFactory, SoftDeletes;

    const STATUS_SUBMITTED = 'submitted';
    const STATUS_REVIEWED = 'reviewed';
    const STATUS_ARCHIVED = 'archived';

    protected $fillable = [
        'service_for',
        'service',
        'contact_fname',
        'contact_lname',
        'contact_email',
        'contact_phone',
        'status',
    ];

}
