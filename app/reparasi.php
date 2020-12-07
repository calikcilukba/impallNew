<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reparasi extends Model
{
    protected $table = 'reparasi';
    public function user(){
        return $this->belongsTo('App\User');
    }
}
