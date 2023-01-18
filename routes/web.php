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
    ->middleware(['auth'])
    ->group(function () {
        /* -------------------------- Dashboard Index Pages ------------------------- */
        Route::get('/', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
        /* ------------------------- Data Alumni ------------------------- */
        Route::get('/data-alumni', 'App\Http\Controllers\DataAlumniController@index');
        Route::get('/data-alumni/tambah-data-alumni', 'App\Http\Controllers\DataAlumniController@create');
        Route::resource('dataAlumni', 'App\Http\Controllers\DataAlumniController');
        /* ------------------------- Publikasi pages ------------------------- */
        /* ------------------------- Berita ------------------------- */
        Route::get('/berita', 'App\Http\Controllers\BeritaController@index');
        Route::get('/berita/tambah-berita', 'App\Http\Controllers\BeritaController@create');
        Route::resource('berita', 'App\Http\Controllers\BeritaController');
        /* ------------------------- Artikel ------------------------- */
        Route::get('/artikel', 'App\Http\Controllers\ArtikelController@index');
        Route::get('/artikel/tambah-artikel', 'App\Http\Controllers\ArtikelController@create');
        Route::resource('artikel', 'App\Http\Controllers\ArtikelController');
        /* ------------------------- Lowongan Kerja Pages ------------------------ */
        Route::get('/lowongan-kerja', 'App\Http\Controllers\LowonganKerjaController@index');
        Route::get('/lowongan-kerja/tambah-lowongan-kerja', 'App\Http\Controllers\LowonganKerjaController@create');
        Route::resource('lowonganKerja', 'App\Http\Controllers\LowonganKerjaController');
        /* ---------------------------- Whiteboard Pages ---------------------------- */
        Route::get('/whiteboard', function () {
            return view('pages.backend.whiteboard.index');
        });
        /* ------------------------- Virtual Meeting Section ------------------------ */
        Route::get('/virtual-meeting/skyoffice', function () {
            return view('pages.backend.virtual_meeting.skyoffice');
        });
        
    });

/* -------------------------------------------------------------------------- */
/*                         Laravel File Manager Routes                        */
/* -------------------------------------------------------------------------- */

/* -------------------- Laravel File Manager Main Routes -------------------- */
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});


require __DIR__ . '/auth.php';
