<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sellers_list extends Model
{
    protected $fillable = [
        'name',
        'document',
        'bannerimg',
        'password',
        'number',
        'url_to_sell',
        'namefantasy',
        'created_at',
        'updated_at'
    ];
}
