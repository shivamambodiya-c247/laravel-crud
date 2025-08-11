<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contributor extends Model
{
    protected $fillable = [
        'full_name',
        'email',
        'module_name',
        'user_type',
        'options',
        'lesson_name',
        'lesson_content',
        'upload_file',
        'additional_url'
    ];
}
