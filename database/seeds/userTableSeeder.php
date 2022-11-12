<?php


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\userCustom;

class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        userCustom::create([
            'id_user' => 'U01',
            'nama_user'    => 'Salsa',
            'username'    => 'salsa',
            'password'   =>  Crypt::encryptString('salsa1234!'),
        ]);
    }
}
