<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vehicle_type extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
    ];

    protected $primaryKey = 'id';

    public function Brands(): BelongsTo
    {
        return $this->BelongsTo(Brand::class);
    }

    public function Models(): BelongsTo
    {
        return $this->BelongsTo(Model::class);
    }

}


