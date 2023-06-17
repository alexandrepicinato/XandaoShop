<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cartdata extends Model
{
    protected $fillable = [
        'iduser',
        'idproduct',
        'idseller',
        'visitid',
        'active',
        'created_at',
        'updated_at'
    ];

}
