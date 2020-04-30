<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TampilanController;
use App\Siswa;
use App\Nilai;
use App\Kelas;
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
    return view('backend.index');
});

Route::get('/tentang', function () {
    return view('backend.tentang');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Halaman Admin dengan Role Admin

Route::get('/a', function () {
    return view('home');
});

Route::group(
    ['prefix' => 'a', 'middleware' => ['role:admin', 'auth']],
    function () {
        Route::get('/', function () {
            return view('home');
        });
        Route::resource('kelas', 'KelasController');
        Route::resource('jurusan', 'JurusanController');
        Route::resource('guru', 'GuruController');
        Route::resource('siswa', 'SiswaController');
        Route::resource('kategorinilai', 'KategoriNilaiController');
        Route::resource('nilai', 'NilaiController');
        Route::resource('matapelajaran', 'MataPelajaranController');
    }
);

// Halaman Guru dengan Role Guru

Route::get('/g', function () {
    return view('backend.index');
});

Route::group(
    ['prefix' => '/g', 'middleware' => ['role:guru', 'auth']],
    function () {
        Route::get('/', function () {
            return view('backend.index');
        });
        Route::get('/listsiswa', 'TampilanController@listsiswa')->name('list.siswa');
        Route::get('/listsiswa/{siswa}', 'TampilanController@penilaian')->name('penilaian.siswa');
    }
);

// Halaman Siswa dengan Role Siswa

Route::get('/s', function () {
    return view('backend.index');
});

Route::group(
    ['middleware' => ['role:siswa', 'auth']],
    function () {
        Route::get('/s', function () {
            return view('backend.index');
        });
    }
);
