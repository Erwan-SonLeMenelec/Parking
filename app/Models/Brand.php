<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    protected $primaryKey = 'id';

    public function Vehicle_types(): HasMany
    {
        return $this->hasMany(Vehicle_type::class);
    }

    public function Models(): HasMany
    {
        return $this->hasMany(Model::class);
    }
}
