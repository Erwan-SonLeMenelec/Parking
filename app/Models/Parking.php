<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Parking extends Model
{
    use HasFactory;

    protected $fillable = [

        'nom_du_parking',
        'adresse',
        'capacite_pour_voiture',
        'capacite_pour_moto',
    ];

    protected $primaryKey = 'id';

    public function Vehicle(): BelongsTo
    {
        return $this->BelongsTo(Vehicle::class);
    }
}

