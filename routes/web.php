<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoktersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/login','UserCustomsController@index');
Route::post('/login/checklogin','UserCustomsController@checklogin');
Route::get('login/successlogin','UserCustomsController@successlogin');
Route::get('/logout', 'UserCustomsController@logout');

Route::get('/home','UserCustomsController@home');
// Route::get('/dashboard', function() {
//     return view('home');
// });
Route::get('/home2','HomeController@index');

Route::resource('dokter', 'DoktersController');

Route::get('/users', 'UserCustomsController@index');
Route::get('/obats', 'ObatsController@index');
Route::get('/pasiens', 'PasiensController@index');
Route::get('/polis', 'PolisController@index');
Route::post('/inputpasiens', 'PasiensController@index');
Route::get('/reseps', 'ResepsController@index');
Route::get('/penjualans', 'PenjualansController@index');
?>