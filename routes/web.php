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
route::get('/', function() {
    return view('welcome');
});

route::get('about', function () {
    return '<h1>Hello</h1>'
    . '<br>Selamat datang di webapp saya</br>'
    . '<br>Laravel, emang keren';

});

Route::get('profile', function (){

    $nama = "Abdul ";

    return "Nama Saya adalah <b>$nama</b>";

});

Route::get('post/{id}', function($a) {
   return "Halaman Post Ke - $a";
});
// buatlah route bernama bio dengan parameter

Route::get('bio/{nama}/{umur}/{alamat}', function($a,$b,$c) {
    return "Nama saya : $a
    <br>umur saya : $b
    <br>alamat saya : $c";
 });

 Route::get('page/{page?}', function ($hal = 1 ) {
     return"Halaman <br>$hal</br>";
 });
 
 route::get('pesan/{makan?}/{minum?}/{cemilan?}',
 function ($a = null, $b = null, $c = null){
 if ($a == null && $b == null && $c == null){
     $pesan = "Anda Tidak Pesan, Silahkan Pulang!";
 }
 if ($a != null) {
     $pesan = "Anda Memesan"
         . "<br>Makanan : <b>$a</b>"; 
 }
 if ($a != null && $b != null){
     $pesan = "Anda Memesan"
     . "<br>Makanan : <b>$a</b>"
     . "<br>Minuman : <b>$b</b>";
 }
 if ($a != null && $b != null && $c != null){
     $pesan = "Anda Memesan"
     . "<br>Makanan : <b>$a</b>"
     . "<br>Minuman : <b>$b</b>"
     . "<br>Cemilan : <b>$c</b>";
 }
 return $pesan;
 });
 













