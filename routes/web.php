<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
// landing (luego la rellenamos)

// Landing pública
Route::view('/', 'public.home')->name('home');

Route::view('/about', 'public.about')->name('about');
Route::view('/services', 'public.services')->name('services');
// Cambio de idioma
Route::get('/set-locale/{locale}', function (string $locale) {
    if (! in_array($locale, ['es', 'en'])) {
        $locale = 'es';
    }

    Session::put('locale', $locale);
    App::setLocale($locale);

    return back();
})->name('set-locale');

// Rutas Breeze siguen igual...
require __DIR__.'/auth.php';

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
