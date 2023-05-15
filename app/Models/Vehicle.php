<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

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

    public function User(): HasOne
    {
        return $this->hasOne(User::class);
    }

    protected $primaryKey = 'id';

    public function vehicle_types(): HasOne
    {
        return $this->hasOne(vehicle_types::class);
    }

    public function Parking(): HasOne
    {
        return $this->hasOne(Parking::class);
    }

}
