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
        'user_id',
        'brand',
        'model',
        'vehicle_types',
        'parked'
    ];

    public function User(): HasOne
    {
        return $this->hasOne(User::class);
    }

    protected $primaryKey = 'id';

    public function Vehicle_types(): HasOne
    {
        return $this->hasOne(Vehicle_type::class);
    }

    public function Parkings(): HasOne
    {
        return $this->hasOne(Parking::class);
    }

}
