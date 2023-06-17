<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products_list extends Model
{
    protected $fillable = [
        'productname',
        'product_price',
        'promotion_price',
        'product_description',
        'product_image',
        'seller_id',
        'product_seller',
        'created_at',
        'updated_at'
    ];
}
