<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'default',
        'user_name',
        'mobile',
        'address',
        'pin_code',
        'landmark',
        'city',
        'state',
        'country',
    ];
}
