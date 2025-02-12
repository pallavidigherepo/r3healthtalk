<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthParameter extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'subcategory_id', 'is_active'];

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }
}
