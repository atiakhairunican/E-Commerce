<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageUploaded extends Model
{
    use HasFactory;

    protected $table = 'image_uploadeds';

    protected $fillable = [
        'product_id', 'name', 'dimensions', 'path', 'extension'
    ];
}
