<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Shop extends Model
{
    public $timestamps = false;

    protected $fillable=[
    'name',
    'description',
    'address',
    'city',
    'county',
    'postcode',
    'phone'
    ];
}
