<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    // use HasFactory;
    protected $fillable = [
        'name',
        'grade',
        'contact_number',
        // Additional fields...
    ];

    // Relationships
    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }

    // Additional methods or model logic...
}
