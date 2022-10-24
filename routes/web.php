<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;

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
Route::controller(MatakuliahController::class)->group(function () {
    Route::get('/insert_mk', 'insert');
    Route::get('/select_mk', 'select');
    Route::get('/update_mk', 'update');
    Route::get('/delete_mk', 'delete');
});

Route::controller(MahasiswaController::class)->group(function () {
    Route::get('/insert_mhs', 'insert');
    Route::get('/select_mhs', 'select');
    Route::get('/update_mhs', 'update');
    Route::get('/delete_mhs', 'delete');
});

Route::controller(DosenController::class)->group(function () {
    Route::get('/insert_dsn', 'insert');
    Route::get('/select_dsn', 'select');
    Route::get('/update_dsn', 'update');
    Route::get('/delete_dsn', 'delete');
});


Route::get('/', function () {
    $dsn = [
    'Fathan Pebrilliestyo M.Kom',
    'Uun Jubaedah M.Pd',
    'Sarkosih Aljabari M.Pd',
    'Rizki Sarkosi M.Kom',
    'Aan Nasrudin M.Ag',
    'H. Kisut Alexandra M.Kom',
    'Stipen Wiliyam M.Kom',
    'Hj Bianca Rosalina M.Pd',
    'Rizki Darmawan M.Kom',
    'Faiha Syahla M.Pd',
    ];
    return view('dosen')->with('dosen',$dsn);
});

Route::get('/matkul', function () {
    $mk = [
        'Pemrograman Mobile',
        'Pancasila',
        'Budaya Bangsa',
        'Embedded System',
        'Pendidikan Agama Islam',
        'Framework',
        'Cloud Computing',
        'Bahasa Inggris',
        'Jaringan Komputer',
        'Kalkulus',
        ];
    return view('matakuliah')->with('matkul',$mk);
});

Route::get('/mahasiswa', function () {
    $mhs = [
        'Patan Pebri',
        'Een Zubaedah',
        'Surkosa Indomar',
        'Riskay Ingdir',
        'Ungdur MaKola',
        'Walatangdur Makola',
        'Budi Setiawan',
        'Ilhan Piraldy',
        'Darmawan Muha',
        'Yuli Widianty',
        ];
    return view('mahasiswa')->with('mahasiswa',$mhs);
});

