<?php

namespace App\Models;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminMember extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guarded = [];

    protected $fillable = [
        'email',
        'password',
        'name',
        'phone'
    ];

    protected $hididen = [
        'password'
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    public function scopeIsActive($query)
    {
        return $query->where('isUse', 'Y');
    }
}
