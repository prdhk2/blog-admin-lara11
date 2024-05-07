<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Atur nama tabel jika perlu
    protected $table = 'products';

    // Atau atur fillable properties
    protected $fillable = ['name', 'category', 'price', 'image'];
}

