<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Metode_pembayaran extends Model
{
    protected $table = 'metode_pembayaran';
     protected $guarded = ['id', 'created_at', 'updated_at'];
}
