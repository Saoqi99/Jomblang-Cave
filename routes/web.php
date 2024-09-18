<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\RadioValue;

Route::get('/', function () {    return view('home');});
Route::get('/home', function () {    return view('home');});
Route::get('/rate', function () {    return view('rate');});
Route::get('/contact', function () {    return view('contact');});
Route::get('/expert', function () {    return view('expert.expert');});
Route::get('/thanks', function () {    return view('thanks');})->name('thanks');
Route::get('/login', function () {    return view('admin.login');})->name('login');
Route::get('/registrasi', function () {    return view('admin.registrasi');});
Route::get('/safety', function () {    return view('safety');});
Route::get('/gallery', function () {    return view('gallery');});
Route::get('/sop', function () {    return view('sop');});
Route::get('/Registerdone', function () {    return view('Resgisterdone');});


Route::get('/gallery', [App\Http\Controllers\FormController::class,'gallery']);
Route::get('/dd', [App\Http\Controllers\FormController::class,'calculate']);

//simpan data turis 
Route::get('rate', [App\Http\Controllers\FormController::class,'rate']);
Route::post('/store_data', [App\Http\Controllers\FormController::class,'store_data']);



//simpan data expert/pakar

Route::get('expert', [App\Http\Controllers\FormController::class,'expert']);
Route::post('/store_expert',[App\Http\Controllers\FormController::class,'store_expert']);


// routing login
Route::get('admin/login', [App\Http\Controllers\FormController::class,'index']);
Route::post('/create_login', [App\Http\Controllers\FormController::class,'login']);

// routing registrasi
Route::get('admin/registrasi', [App\Http\Controllers\FormController::class,'register']);
Route::post('/create_register', [App\Http\Controllers\FormController::class,'create_register']);
 



Route::middleware('auth')->group(function () {

    Route::get('/show_data', [App\Http\Controllers\FormController::class,'show']);
    Route::get('/show_matrix', [App\Http\Controllers\FormController::class,'show_matrix']);
    
    //logout
    Route::get('admin/logout', [App\Http\Controllers\FormController::class,'logout']);
    Route::get('/dashboard', function () {    return view('admin.dashboard');});


});
