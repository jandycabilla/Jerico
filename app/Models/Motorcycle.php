<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motorcycle extends Model
{
    use HasFactory;

    protected $fillable = [
        'make', 'model', 'year', 'type', 'engine_capacity', 'horsepower', 'price', 'description'
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}

