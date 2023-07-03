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
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/Contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact_store');
Route::get('/view-students', [StudentController::class, 'usersList']);
Route::post('/delete-student/{id}', [StudentController::class, 'removeUser']);