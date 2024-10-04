<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'motorcycle_id', 'user_name', 'rating', 'comment'
    ];

    public function motorcycle()
    {
        return $this->belongsTo(Motorcycle::class);
    }
}

