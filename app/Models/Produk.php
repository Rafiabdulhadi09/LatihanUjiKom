<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;   
    
    protected $table = 'produk';
    protected $fillable = [
        'name_produk',
        'kategori_id',
        'kd_produk',
        'harga',
        'stok',
    ];

    
} 
