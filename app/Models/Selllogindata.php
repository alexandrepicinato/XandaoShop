<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Selllogindata extends Model
{
    protected $fillable = [
        'iduser',
        'sellerid',
        'token',
        'hash',
        'netandress',
        'created_at',
        'updated_at'
    ];
}
