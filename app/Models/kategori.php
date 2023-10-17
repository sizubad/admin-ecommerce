<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;
    protected $keyType = 'string';
    protected $primaryKey = 'id_kategori';

    protected $fillable = ['id_kategori', 'nama_kategori'];

    public function getRouteKeyName()
    {
        return 'id_kategori';
    }
   
}
