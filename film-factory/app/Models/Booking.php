<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'movie_name', 
        'movie_date',
        'movie_time',
        'tickets',
        'region',
        'cinema',
        'user_email',
        'reference_no'
    ];
}