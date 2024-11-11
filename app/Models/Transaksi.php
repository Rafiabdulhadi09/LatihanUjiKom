<?php

namespace App\Models;

use App\Models\User;
use App\Models\Transaksi;
use App\Models\TransaksiDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = "transaksi";
    protected $fillable = [
        'petugas_id',
        'total',
        'status'
    ];
    public function detailTransaksi()
    {
        return $this->hasMany(TransaksiDetail::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'petugas_id');  
    }
}
