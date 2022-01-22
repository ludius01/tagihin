<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{
    protected $table = 'tagihan';
    protected $guarded = ['id', 'created_at', 'updated_at'];

     public function users(){
        return $this->belongsTo('App\User','id_pelanggan','id');
    }
      public function alat(){
        return $this->belongsTo('App\Model\Alat','id_alat','id');
    }

      public function paket(){
        return $this->belongsTo('App\Model\Paket','id_paket','id');
    }
}
