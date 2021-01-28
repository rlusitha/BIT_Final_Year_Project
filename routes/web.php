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

Auth::routes();

Route::get('/patient_restore/{id}', 'PatientController@restoreDeletedPatient');

Route::get('/patient/deleted_patients', 'PatientController@viewDeletedPatients');

Route::get('/search/{SearchKey}', 'TokenController@search')->name('PatientSearch');

Route::get('/token/{id}/issue_token', 'TokenController@issueToken');

Route::get('/get-all-tokens', 'TokenController@getAllTokens');

Route::get('/pdf/{id}', 'TokenController@createPDF');

Route::get('/all_employees/pdf', 'EmployeeController@createEmployeePDF');

Route::get('/all_patients/pdf', 'PatientController@createPatientPDF');

Route::get('/registered_patients_report', 'PatientController@registeredPatientsReport');

Route::get('/registered_patients_report_district', 'PatientController@registeredPatientsDistrictWise');

Route::resources([
    'patient' => 'PatientController',
    'token' => 'TokenController',
    'employee' => 'EmployeeController',
]);

Route::resource('/admin/users', 'Admin\UsersController')->middleware('can:manage-users');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/admin', 'admin.users.home');

// Route::view('/add_employee', 'employee.add_employee');
