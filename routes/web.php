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

/* -------------------------------------------------------------------------- */
/*                               Backend Routes                               */
/* -------------------------------------------------------------------------- */
Route::get('auth/google',[App\Http\Controllers\GoogleAuthController::class,'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback',[App\Http\Controllers\GoogleAuthController::class,'handleGoogleCallback'])->name('google.callback');

Route::prefix('dashboard')
    ->middleware(['auth'])
    ->group(function () {
        /* -------------------------- Dashboard Index Pages ------------------------- */
        Route::get('/', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
        /* ------------------------- Data Alumni ------------------------- */
        Route::get('/data-alumni', 'App\Http\Controllers\DataAlumniController@index');
        Route::get('/data-alumni/tambah-data-alumni', 'App\Http\Controllers\DataAlumniController@create');
        Route::resource('dataAlumni', 'App\Http\Controllers\DataAlumniController');
        /* ------------------------- Lowongan Kerja Pages ------------------------ */
        Route::get('/lowongan-kerja', 'App\Http\Controllers\LowonganKerjaController@index');
        Route::get('/lowongan-kerja/tambah-lowongan-kerja', 'App\Http\Controllers\LowonganKerjaController@create');
        Route::resource('lowonganKerja', 'App\Http\Controllers\LowonganKerjaController');
        /* ---------------------------- Galeri Foto Pages --------------------------- */
        Route::get('/galeri-foto', 'App\Http\Controllers\GalleryController@index');
        Route::get('/galeri-foto/tambah-foto', 'App\Http\Controllers\GalleryController@create');
        Route::resource('galleries', 'App\Http\Controllers\GalleryController');
        /* ----------------------------- Bookmarks Pages ---------------------------- */
        Route::get('/bookmarks', 'App\Http\Controllers\BookmarkController@index');
        Route::get('/bookmarks/tambah-bookmarks', 'App\Http\Controllers\BookmarkController@create');
        Route::resource('bookmarks', 'App\Http\Controllers\BookmarkController');
        /* ---------------------------- File Tugas Pages ---------------------------- */
        Route::get('/file-tugas', function () {
            return view('pages.backend.files.index');
        });
        /* ----------------------------- Todolist Pages ----------------------------- */
        Route::get('/todolist', 'App\Http\Controllers\TodolistController@index');
        Route::resource('todolist', 'App\Http\Controllers\TodolistController');
        Route::get('todolist/delete/{id}', 'App\Http\Controllers\TodolistController@doneviadashboard')
            ->name('todolist.done');
        /* ----------------------------- Calendar Pages ----------------------------- */
        Route::get('/calendar', function () {
            return view('pages.backend.calendar.index');
        });
        /* ---------------------------- Whiteboard Pages ---------------------------- */
        Route::get('/whiteboard', function () {
            return view('pages.backend.whiteboard.index');
        });
        /* ---------------------------- Pomodoro section ---------------------------- */
        Route::get('/pomodoro/pomofocus', function () {
            return view('pages.backend.pomodoro.pomofocus');
        });
        Route::get('/pomodoro/lifeat', function () {
            return view('pages.backend.pomodoro.lifeat');
        });
        /* ------------------------------ Audio Section ----------------------------- */
        Route::get('/audio/moodly', function () {
            return view('pages.backend.audio.moodly');
        });
        Route::get('/audio/shhhnoise', function () {
            return view('pages.backend.audio.shhhnoise');
        });
        Route::get('/audio/poolsuite', function () {
            return view('pages.backend.audio.poolsuite');
        });
        /* ------------------------- Publikasi Pages ------------------------ */
        /* ------------------------- Berita Section ------------------------ */
        Route::get('/berita', function () {
            return view('pages.backend.publikasi.berita.index');
        });
        /* ------------------------- Artikel Section ------------------------ */
        Route::get('/artikel', function () {
            return view('pages.backend.publikasi.artikel.index');
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
