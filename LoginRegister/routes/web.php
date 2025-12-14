<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Middleware\FormMiddleware;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home',[FormController::class,'home']);
Route::get('/loginForm',[FormController::class,'loginForm']);
Route::get('/registerForm',[FormController::class,'registerForm']);

Route::post('/registerProcess',[FormController::class,'registerProcess']);
Route::post('/loginProcess',[FormController::class,'loginProcess']);

Route::middleware(FormMiddleware::class)->group(function(){
    Route::get('/logoutProcess',[FormController::class,'logoutProcess']);
});
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
