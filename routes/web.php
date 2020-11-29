<?php

use Illuminate\Support\Facades\Route;

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
});

Route::get('/reception', function () {
    return view('reception.dashboard');
})->name('reception');

Route::get('/register_patient', function () {
    return view('reception.register_patient');
})->name('register_patient');

Route::post('register_patient', 'PatientController@store');

Route::get('/view_patient', 'PatientController@viewPatient');