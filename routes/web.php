<?php
use Illuminate\Support\Facades\Route;

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

Route::view('/', 'welcome');
Auth::routes();

Route::get('/login/restau', 'Auth\LoginController@showRestauLoginForm');
Route::get('/login/client', 'Auth\LoginController@showClientLoginForm');
Route::get('/register/restau', 'Auth\RegisterController@showRestauRegisterForm');
Route::get('/register/client', 'Auth\RegisterController@showClientRegisterForm');

Route::post('/login/restau', 'Auth\LoginController@restauLogin');
Route::post('/login/client', 'Auth\LoginController@clientLogin');
Route::post('/register/restau', 'Auth\RegisterController@createRestau');
Route::post('/register/client', 'Auth\RegisterController@createClient');

Route::view('/home', 'home')->middleware('auth');
Route::view('/restau', 'restau');
Route::view('/client', 'client');
Auth::routes();
Route::get('add_plat',function () {
    return view('plats/ajouterplat');
});
Route::post('save_plat','PlatController@createplat');

Route::get('mes_plats',function () {
    return view('plats/mesplats');
});
Route::get('mes_plats','PlatController@show')->name('mesplats');


Route::get('add_pub',function () {
    return view('pubs/ajouterpub');
});
Route::post('save_pub','PublicationController@createtpub');


Route::get('/client','PlatController@searchplat')->name('client');

Route::get('commmander/{idd}','PannierController@commmander')->name('commmander');

Route::get('mes_commmandes',function () {
    return view('plats/mescommmandes');
});
Route::get('mes_commmandes','PannierController@show')->name('mescommmandes');
Route::get('valider','PannierController@valider')->name('valider');

Route::get('plats/validecmd','PannierController@showcmd')->name('showcmd');
Route::get('traiter/{idd}','PannierController@traiter')->name('traiter');

Route::get('add_res',function () {
    return view('pubs/ajouterreservation');
});

Route::post('save_res','ReservationController@createtres');
Route::get('pubs/valideres','ReservationController@showres')->name('showres');

Route::get('valide/{idd}','ReservationController@valide')->name('valide');
Route::get('Supprimer/{idd}','PlatController@Supprimer')->name('Supprimer');
