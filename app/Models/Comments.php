<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comments extends Model
{
    use HasFactory;

    // ✅ This is the key part:
    protected $fillable = [
        'contributor_id',
        'comment',
    ];
}
