<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Opsional: Tambahkan $fillable atau $guarded untuk keamanan mass assignment
    protected $fillable = ['name'];

    // Relasi one-to-one dengan model Food
    public function food()
    {
        return $this->hasOne(Food::class, 'category_id', 'id');
    }
}
