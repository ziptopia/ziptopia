<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'pw'
    ];

    protected $hidden = [
        'pw'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime'
    ]
}
