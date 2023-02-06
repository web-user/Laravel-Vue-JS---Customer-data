<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $casts = [
        'phone_numbers' => 'array'
    ];

    protected $fillable = ['name', 'email', 'address', 'phone_numbers', 'city', 'state', 'postal_code'];



}
