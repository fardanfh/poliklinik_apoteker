<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
    //
    protected $fillable = ['id_dokter', 'id_poli', 'nama_dokter', 'alamat', 'no_ponsel'];
    protected $table = 'dokter';
}
