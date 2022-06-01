<?php

use Illuminate\Support\Facades\Route;
use \App\Models\Theme;
use \App\Http\Controllers\SiteController;

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
    return view('landingpage.home');
});

Route::get('/{site:slug}', [SiteController::class, 'show']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->prefix('dashboard')->group(function () {
    Route::redirect('/', '/dashboard/explore');

    Route::get('/explore', function () {
        return view('dashboard')->with(['themes' => Theme::all()]);
    })->name('dashboard');

    Route::resource('/sites', SiteController::class)->except([
        'show'
    ]);

    Route::get('/preview/{theme:slug}', function (Theme $theme) {
        if (!$theme) {
            return abort(404);
        }
        return view('templates.' . $theme->slug);
    });
});
