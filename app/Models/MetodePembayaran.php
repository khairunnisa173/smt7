<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetodePembayaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'pembayaran',
        'status_pembayaran',
    ];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}
