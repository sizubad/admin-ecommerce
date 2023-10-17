<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;

    //protected $keyType = 'string';
    //protected $primaryKey = 'id_produk';

    protected $fillable =[
        'id_produk',
        'nama_produk',
        'harga',
        'stok',
        'deskripsi',
        'ukuran',
        'gambar',
        'id_kategori'
    ];
}
