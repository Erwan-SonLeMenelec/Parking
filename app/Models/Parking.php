<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parking extends Model
{
    use HasFactory;

    protected $fillable = [

        'nom du parking',
        'adresse',
        'capacité pour voiture',
        'capacité pour moto',
    ];

    protected $primaryKey = 'id';
}
