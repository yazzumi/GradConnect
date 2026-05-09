<?php

use App\Http\Controllers\alumni\submission;
use App\Http\Controllers\alumni\survey_form;
use App\Models\graduates;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\alumni\verification;
use App\Http\Controllers\alumni\home;

Route::get('/', function () {
    return view('welcome');
});
//Alumni
Route::get('home',[home::class,'index'])->name('home');
Route::get('verification',[verification::class,'index'])->name('verification');
Route::get('SurveyForm/{id}',[survey_form::class,'index'])->name('survey_form');
Route::get('Submitted',[submission::class,'index'])->name('submission');
Route::get('Profile',[\App\Http\Controllers\alumni\profile::class,'index'])->name('profile');

//Admin
Route::get('Login',[\App\Http\Controllers\admin\login::class,'index'])->name('login');
Route::get('Dashboard',[\App\Http\Controllers\admin\dashboard::class,'index'])->name('dashboard');
Route::get('Graduates',[\App\Http\Controllers\admin\graduate_records::class,'index'])->name('graduates');
Route::get('Surveys',[\App\Http\Controllers\Admin\SurveyManagementController::class,'index'])->name('surveys');
Route::get('Employment',[\App\Http\Controllers\Admin\EmploymentDataController::class,'index'])->name('employment');
Route::get('Updates',[\App\Http\Controllers\Admin\UpdateRequestController::class,'index'])->name('updates');
Route::get('Reports',[\App\Http\Controllers\Admin\ReportsController::class,'index'])->name('reports');
Route::get('Accounts', [\App\Http\Controllers\Admin\AdminAccountsController::class,'index'])->name('accounts');
Route::get('Logs', [\App\Http\Controllers\Admin\AuditLogsController::class,'index'])->name('logs');
Route::get('test',[home::class,'test'])->name('test');



//API
Route::post('otp',[verification::class,'generateOtp'])->name('generate_otp');
Route::post('verifyOtp',[verification::class,'verifyOtp'])->name('verify_otp');
Route::get('getProgram',[verification::class,'getProgram'])->name('get_program');


