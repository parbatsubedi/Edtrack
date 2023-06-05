<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

// Route::get('/home',[HomeController::class,'redirect']);
Route::get('/',[HomeController::class,'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/add_teacher_view',[AdminController::class,'addview']);
Route::get('/show_teacher_view',[AdminController::class,'ShowTeacherView']);

Route::post('/upload_teacher',[AdminController::class,'upload']);
Route::post('/appointment',[HomeController::class,'appointment']);
Route::get('/myAppointments',[HomeController::class,'myAppointments']);
Route::get('/cancel_appointments/{id}',[HomeController::class,'cancel_appointments']);
Route::get('/showAppointments',[AdminController::class,'showAppointments']);

Route::get('/approved/{id}',[AdminController::class,'approved']);
Route::get('/reject/{id}',[AdminController::class,'rejected']);
Route::post('/appointment',[HomeController::class,'appointment']);
Route::get('/myAppointments',[HomeController::class,'myAppointments']);
Route::get('/cancel_appointments/{id}',[HomeController::class,'cancel_appointments']);
Route::get('/showAppointments',[AdminController::class,'showAppointments']);

Route::get('/view/{id}',[AdminController::class,'view']);
Route::get('/delete/{id}',[AdminController::class,'delete']);
Route::get('/update/{id}',[AdminController::class,'update']);
Route::post('/editTeacher/{id}',[AdminController::class,'editTeacher']);

// Route::get('/news',[HomeController::class,'news']);
