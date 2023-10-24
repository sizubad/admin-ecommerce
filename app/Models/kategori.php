<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class kategori extends Model
{
    use HasFactory;
    protected $keyType = 'string';
    protected $primaryKey = 'kategori_id';

    protected $fillable = ['kategori_id', 'nama_kategori'];

    public function getRouteKeyName()
    {
        return 'kategori_id';
    }
    
    public function produk(){
        return $this->hasMany(produk::class);
    }
   
}
