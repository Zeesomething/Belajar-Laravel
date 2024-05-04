<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Siswa;
use App\Models\Barang;
use App\Models\Pengguna;
use App\Models\Telepon;
use App\Models\Merek;
use App\Models\Produk;
use App\Models\Barangg2;
use App\Models\Pembeli;
use App\Models\Transaksi;


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
    $post = Post::all();
    return view('tampil_post', compact('post'));
});

Route::get('/barangdb', function () {
    $barang = Barang::all();
    return view('tampil_barang', compact('barang'));
});

Route::get('/siswadb', function () {
    // Menampilkan Semua data
    $siswa = Siswa::all();

    // Menampilkan data berdasarkan id
    // $data = Siswa::find(3)

    // Menampilkan data berdasarkan title
    // $data = Siswa::where('telepon', 'like', '%12346%')-> get();

    // Menambahkan data
    // $data = new Siswa;
    // $data -> nama_siswa = 'Niken';
    // $data -> jenis_kelamin = 'Perempuan';
    // $data -> alamat = 'Kopo Permai';
    // $data -> agama = 'Katolik';
    // $data -> telepon = 123466;
    // $data -> email = 'niken@gmail.com';
    // $data ->save();

    return view('tampil_siswa', compact('siswa'));
});

Route::get('/pengguna', function(){
    $pengguna = Pengguna::all();

    return view('/tampil_pengguna', compact('pengguna'));
});

Route::get('/telepon', function () {
    $telepon = Telepon::all();

    return view('/tampil_telepon', compact('telepon'));
});

Route::get('/merek', function() {
    $merek = Merek::all();

    return view('/tampil_merek', compact('merek'));
});
Route::get('/produk', function() {
    $produk = Produk::all();

    return view('/tampil_produk', compact('produk'));
});

Route::get('/barang2', function() {
    $barang2 = Barangg2::all();

    return view ('/tampil_barang2', compact('barang2'));
});

Route::get('/pembeli', function() {
    $pembeli = Pembeli::all();

    return view ('/tampil_pembeli', compact('pembeli'));
});

Route::get('/transaksi', function() {
    $transaksi = Transaksi::all();

    return view ('/tampil_transaksi', compact('transaksi'));
});
