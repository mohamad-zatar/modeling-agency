<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'customer_name',
        'models',
        'booking_date',
    ];

    protected $casts = [
        'models' => 'array',
    ];
}
