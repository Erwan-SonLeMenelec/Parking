<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicle_types extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
    ];

    protected $primaryKey = 'id';
}


