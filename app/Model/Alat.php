<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Alat extends Model
{
    protected $table = 'alat';
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
