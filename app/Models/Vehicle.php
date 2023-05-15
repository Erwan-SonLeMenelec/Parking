<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'user',
        'brand',
        'model',
        'vehicle_types',
        'parked',
        'date de création',
        'date de mise à jour',
    ];

    protected $primaryKey = 'id';
}
