<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayaran';
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function tagihan(){
        return $this->belongsTo('App\Model\Tagihan','id_tagihan','id');
    }
}
