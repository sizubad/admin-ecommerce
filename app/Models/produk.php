<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class produk extends Model
{
    use HasFactory;

    protected $keyType = 'string';
    protected $primaryKey = 'produk_id';

    protected $fillable =[
        'produk_id',
        'nama_produk',
        'harga',
        'stok',
        'deskripsi',
        'ukuran',
        'gambar',
        'kategori_id'
    ];

        public function kategori(): BelongsTo
        {
            return $this->belongsTo(kategori::class);
        }

}
