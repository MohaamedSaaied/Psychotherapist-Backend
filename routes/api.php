<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\C;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('/user_store', [C::class,'user_store'])->name('user_store');
Route::post('/doctor_store', [C::class,'doctor_store']);
Route::post('/appointment_store', [C::class,'appointment_store'])->name('appointment_store');
Route::post('/appointment_check', [C::class,'appointment_check'])->name('appointment_check');
Route::get('/app_check', [C::class,'app_check'])->name('app_check');
Route::get('/appointment', [C::class,'appointment'])->name('appointment');
Route::get('/user_check/{id}', [C::class,'user_check'])->name('user_check');
Route::get('/u_check', [C::class,'u_check'])->name('u_check');
Route::get('/user', [C::class,'user'])->name('user');
Route::post('/doctor_check', [C::class,'doctor_check'])->name('doctor_check');
Route::get('/quiz_check/{type}', [C::class,'quiz_check'])->name('quiz_check');
Route::post('/Quiz_result_check', [C::class,'Quiz_result_check'])->name('Quiz_result_check');
Route::post('/un_doctor_store', [C::class,'un_doctor_store'])->name('un_doctor_store');
Route::post('/un_post_store', [C::class,'un_post_store'])->name('un_post_store');
Route::post('/post_store', [C::class,'post_store'])->name('post_store');
Route::post('/user_result_store', [C::class,'user_result_store'])->name('user_result_store');
Route::get('/signup', [C::class,'signup'])->name('signup');
Route::get('/Dsignup', [C::class,'Dsignup'])->name('Dsignup');
Route::get('/view', [C::class,'view'])->name('view');
Route::view('login','login');
Route::post('/login', [C::class,'login'])->name('login');
Route::view('erorr','erorr');
Route::view('Dlogin','Dlogin');
Route::post('/Dlogin', [C::class,'Dlogin'])->name('Dlogin');
Route::view('Alogin','Alogin');
Route::post('/Alogin', [C::class,'Alogin'])->name('Alogin');
Route::get('/admin_view_un_doctor', [C::class,'admin_view_un_doctor'])->name('admin_view_un_doctor');
Route::get('/admin_view_un_post', [C::class,'admin_view_un_post'])->name('admin_view_un_post');
Route::post('/delete_un_doctor/{id}', [C::class,'delete_un_doctor'])->name('delete_un_doctor');
Route::post('/delete_un_post/{id}', [C::class,'delete_un_post'])->name('delete_un_post');
Route::post('/update_user_profile/{id}', [C::class,'update_user_profile'])->name('update_user_profile');
Route::post('/update_doctor_profile/{id}', [C::class,'update_doctor_profile'])->name('update_doctor_profile');