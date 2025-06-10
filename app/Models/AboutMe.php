<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutMe extends Model
{
    use HasFactory;

    protected $table = 'about_me';
    
    protected $fillable = [
        'full_name',
        'job_title',
        'bio',
        'profile_image',
        'email',
        'phone',
        'address',
        'social_media',
        'skills'
    ];

    protected $casts = [
        'social_media' => 'array',
        'skills' => 'array',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
}