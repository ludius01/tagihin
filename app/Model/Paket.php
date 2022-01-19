<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $table = 'paket';
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
