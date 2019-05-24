<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class irigasi extends Model
{
    protected $table = 'irigasi';
    protected $primaryKey = 'id';
    protected $dates = ['tanggal'];
    protected $fillable = ['tanggal', 'suhu', 'kadar_oksigen', 'kadar_ph', 'residu_terlarut', 'created_at', 'updated_at'];
}
