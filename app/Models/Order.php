<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'uuid', 'product_id', 'user_id', 'quantity', 'size', 'total', 'is_checkout'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class)->with('imageUploaded');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
