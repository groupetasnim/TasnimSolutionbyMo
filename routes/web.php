<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsFormController\StudentController;;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layout');
});
/*Route::get('/contact', function () {
    return view('contact');
})->name('contact')*/;

Route::post('/Contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact_store');
Route::get('/view-students', [StudentController::class, 'usersList']);
Route::post('/delete-student/{id}', [StudentController::class, 'removeUser']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/{lang?}', function ($lang = null) {

    if (isset($lang) && in_array($lang, config('fallback_locale'))) {
        app()->setLocale($translatable);
    }

    return view('welcome');
});
Route::get('langue/{lang}', function ($lang) {
    app()->setLocale($lang);
    session()->put('locale', $lang);

    return redirect()->back();
});
Route::get('/', function () {
    return view('layout');
});
