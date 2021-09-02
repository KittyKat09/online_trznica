<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'phone',
        'address',
        'city',
        'notes',
        'status',
        'postcode',
        'total',
        'paid'
    ];
    public $timestamps = false;
    use HasFactory;
}
