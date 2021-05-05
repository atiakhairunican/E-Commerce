<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'title', 'slug', 'description', 'price', 'rating'
    ];

    public function imageUploaded()
    {
        return $this->hasMany(ImageUploaded::class, 'product_id', 'id');
    }
}
