<?php

use Illuminate\Support\Facades\Route;

/* -------------------------------------------------------------------------- */
/*                               Frontend Routes                              */
/* -------------------------------------------------------------------------- */

/* ------------------------------ Landing Page ------------------------------ */

Route::get('/', function () {
    return view('pages.frontend.index');
});

/* ------------------------------- About Page ------------------------------- */
Route::get('/tentang', function () {
    return view('pages.frontend.about');
});

/* ------------------------------ Contact Page ------------------------------ */
Route::get('/kontak', function () {
    return view('pages.frontend.contact');
});

/* ------------------------------ FAQ Page ------------------------------ */
Route::get('/faq', function () {
    return view('pages.frontend.faq');
});

/* -------------------------------------------------------------------------- */
/*                               Backend Routes                               */
/* -------------------------------------------------------------------------- */

Route::prefix('dashboard')

->middleware(['auth','verified'])
->group(function () {
        /* -------------------------- Dashboard Index Pages ------------------------- */
        Route::get('/', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
        
        /* ------------------------- Data Alumni ------------------------- */
        Route::get('/dataalumni', 'App\Http\Controllers\DataAlumniController@index');
        Route::get('/dataalumni/tambah-data-alumni', 'App\Http\Controllers\DataAlumniController@create')->middleware('can:create data alumni');
        Route::resource('dataalumni', 'App\Http\Controllers\DataAlumniController');
        
        /* ------------------------- Publikasi pages ------------------------- */
        /* ------------------------- Berita ------------------------- */
        Route::get('/berita', 'App\Http\Controllers\BeritaController@index');
        Route::get('/berita/tambah-berita', 'App\Http\Controllers\BeritaController@create')->middleware('can:create berita');
        Route::resource('berita', 'App\Http\Controllers\BeritaController');
        
        Route::patch('/berita/{id}/edit', 'App\Http\Controllers\BeritaController@update');

        /* ------------------------- Artikel ------------------------- */
        Route::get('/artikel', 'App\Http\Controllers\ArtikelController@index');
        Route::get('/artikel/tambah-artikel', 'App\Http\Controllers\ArtikelController@create')->middleware('can:create artikel');
        Route::resource('artikel', 'App\Http\Controllers\ArtikelController');
        
        /* ------------------------- Lowongan Kerja Pages ------------------------ */
        Route::get('/lowonganKerja', 'App\Http\Controllers\LowonganKerjaController@index');
        Route::get('/lowonganKerja/tambah-lowongan-kerja', 'App\Http\Controllers\LowonganKerjaController@create')->middleware('can:create lowongan kerja');
        Route::resource('lowonganKerja', 'App\Http\Controllers\LowonganKerjaController');

        /* ------------------------- Kegiatan Pages ------------------------ */
        Route::get('/kegiatan', 'App\Http\Controllers\KegiatanController@index');
        Route::get('/kegiatan/tambah-kegiatan', 'App\Http\Controllers\KegiatanController@create')->middleware('can:create kegiatan');
        Route::resource('kegiatan', 'App\Http\Controllers\KegiatanController');

        
        /* ------------------------- Virtual Meeting Section ------------------------ */
        Route::get('/virtual-meeting/skyoffice', function () {
            return view('pages.backend.virtual_meeting.skyoffice');
        });
        
        /* ------------------------- Kuisioner Pages ------------------------ */
        Route::get('/kuisioner', 'App\Http\Controllers\KuisionerController@index');
        Route::get('/kuisioner/tambah-kuisioner', 'App\Http\Controllers\KuisionerController@create')->middleware('can:create kuisioner');
        Route::resource('kuisioner', 'App\Http\Controllers\KuisionerController');
        
        /* ------------------------- profil Pages ------------------------ */
        Route::get('/profil', 'App\Http\Controllers\ProfilController@index');
        Route::get('/profil/edit-profil', 'App\Http\Controllers\ProfilController@create');
        Route::resource('profil', 'App\Http\Controllers\ProfilController');
    });

/* -------------------------------------------------------------------------- */
/*                         Laravel File Manager Routes                        */
/* -------------------------------------------------------------------------- */

/* -------------------- Laravel File Manager Main Routes -------------------- */
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});


require __DIR__ . '/auth.php';
