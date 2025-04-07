<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Define fillable attributes
    protected $fillable = ['title', 'description', 'price', 'quantity', 'category', 'image'];
}
