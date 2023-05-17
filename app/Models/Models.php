<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Models extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'date_de_creation',
    ];

    protected $primaryKey = 'id';

    public function Vehicle_types(): HasOne
    {
        return $this->hasOne(vehicle_types::class);
    }
    public function Brands(): BelongsTo
    {
        return $this->BelongsTo(Brands::class);
    }
}
