<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthScore extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'dob', 'age', 'weight', 'height', 'mentor', 'wellness', 'symptoms'];

    protected $casts = [
        'wellness' => 'array', // ✅ Automatically casts JSON to an array
        'symptoms' => 'array',
    ];
}
