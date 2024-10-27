<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'pilihan_laundry',
        'tanggal_masuk',
        'tanggal_keluar',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function metodePembayaran()
    {
        return $this->belongsTo(MetodePembayaran::class);
    }

    public function paket()
    {
        return $this->belongsTo(Paket::class);
    }

}
