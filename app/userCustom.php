<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class userCustom extends Model implements Authenticatable
{
    //
    use \Illuminate\Auth\Authenticatable;
    protected $table = 'user';
    protected $fillable = array('id_user','nama_user','username','password');
}
