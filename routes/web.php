<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\CandidateController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PrintController;
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
})->name('welcome');
Route::get('/home', function () {
    return view('welcome');
})->name('home');
Route::get('/service', function () {
    return view('service');
})->name('service');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/401', function () {
    return view('auth.401');
})->name('401');


Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => 'admin'
], function () {
    Route::get('/', function () {
        return view('admin.adminto.dashboard');
    })->name('dashboard');

    Route::get('/user/export', [UserController::class, 'createPDF'])->name('export');
    Route::resource('/user', UserController::class);

    Route::resource('/candidate', CandidateController::class, ['name' => 'candidate']);
    
    Route::get('/print/candidate/{id}', [PrintController::class, 'candidatePrint'])->name('print.candidate');


});




Auth::routes();


// Route::resource('/command', CommandController::class, ['name' => 'command']);


Route::group([
    'middleware' => 'auth'
], function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile-edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile-update');
});

Route::get('/profile/{id?}', [ProfileController::class, 'index'])->where('id', '[0-9]+')->name('profile-index');

