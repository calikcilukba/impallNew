<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dataservice extends Model
{
    protected $table = 'dataservices';
    protected $fillable = [
        'handphone', 'model', 'kerusakan','detail', 'harga',
    ];
    public function users(){
        return $this->belongsToMany(User::class);
    }
}
