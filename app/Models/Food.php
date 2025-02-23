<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    // Tambahkan properti $fillable untuk memungkinkan mass assignment
    // app/Models/Food.php
    protected $fillable = [
    'name', 'description', 'price', 'category_id', 'image',
    ];


    // Relasi belongsTo, bukan hasOne
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}

