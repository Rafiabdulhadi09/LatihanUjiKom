<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiDetail extends Model
{
    use HasFactory;
    protected $table = "transaksi_details";
    protected $fillable = [
        'transaksi_id',
        'produk_id',
        'produk_name',
        'qty',
        'subtotal'
    ];
    public function transaksi()
    {
        return $this->belongsTo(User::class, 'transaksi_id');
    }
}
