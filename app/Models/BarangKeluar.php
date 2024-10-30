<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_barang',
        'nama_customer',
        'jumlah',
        
    ];
    public function Barang()
    {
        return $this->belongsTo(Jenis::class, 'id_barang', 'id');
    }
}
