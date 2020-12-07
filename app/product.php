<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'kodeproduk', 'namabarang', 'image','golongan', 'kategori' ,'merek','deskripsi','jumlah','harga',
    ];
    public function users(){
        return $this->belongsToMany(User::class);
    }

}
