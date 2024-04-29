<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return '<h1>Halo</h1>'
        . 'Selamat datang di webapp saya <br>'
        . 'Laravel, emang keren';
});

Route::get('/biodata', function () {
    return '<h1>Biodata</h1>'
        . 'Nama : Zidni Ngilmanavia<br>'
        . 'Kelas : XI RPL 1<br>'
        . 'Umur : 17 tahun<br>'
        . 'Cita-cita : Masuk surga';
});

// buat route basic passing data to view

Route::get('animals', function () {
    $king = "Lion";
    $hewan = ["Monkey", "Dragonfly", "Tiger", "Butterfly", "Crocodile"];
    return view('animals_page', compact('king', 'hewan'));
});

Route::get('vegetables', function () {
    $fruit = ["apple", "grape", "starfruit", "melon"];
    return view('vegetables_page', ['buah' => $fruit]);
});

// route parameter
Route::get('product/{name}', function ($name) {
    return "produk : $name";
});

// buat sebuah route dengan 3 buah parameter,
// nama, tinggi badan, berat badan

Route::get('data/{nama}/{tinggi}/{berat}', function ($nama, $tinggi, $berat) {
    $tb = $tinggi / 100;
    $bmi = $berat / ($tb ^ 2);
    if ($bmi > 30) {
        $ket = "Obesitas";
    } else if ($bmi > 25) {
        $ket = "Kelebihan";
    } else if ($bmi > 18.5) {
        $ket = "Ideal";
    } else if ($bmi < 18.5) {
        $ket = "Kekurangan Berat Badan";
    }

    return "Nama : $nama <br>"
        . "Tinggi Badan : $tinggi cm <br>"
        . "Berat Badan : $berat kg  <br>"
        . "Nilai BMI : $bmi <br>"
        . "Keterangan : $ket ";
});


// Route Optional Parameter -> ditandai dengan ?
Route::get('myname/{nama?}', function ($a = "Abdu") {
    return "my name is $a";
});

// menampilkan data dari database
Route::get('/testmodel', function () {
    $data = Post::all();
    return $data;
});