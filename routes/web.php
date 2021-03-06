<?php

use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

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

// Route::get('/reception', function () {
//     return view('patient.dashboard');
// })->name('reception');

// Route::get('/register_patient', function () {
//     return view('patient.register_patient');
// })->name('register_patient');

// Route::post('register_patient', 'PatientController@store');

// Route::get('/view_patient', 'PatientController@viewPatient');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/update_patient', function () {
//     return view('patient.update_patient');
// });

// Route::get('update_view_with_data', function () {
//     return view('patient.update_view_with_data');
// })->name('update_view_with_data');

Route::get('/patient_restore/{id}', 'PatientController@restoreDeletedPatient');

Route::get('/patient/deleted_patients', 'PatientController@viewDeletedPatients');

Route::get('/search/{SearchKey}', 'TokenController@search')->name('PatientSearch');

Route::get('/token/{id}/issue_token', 'TokenController@issueToken');

Route::get('/get-all-tokens', 'TokenController@getAllTokens');

Route::get('/pdf/{id}', 'TokenController@createPDF');

Route::resource('patient','PatientController');

Route::resource('token','TokenController');

Route::resource('/admin/users', 'Admin\UsersController')->middleware('can:manage-users');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
