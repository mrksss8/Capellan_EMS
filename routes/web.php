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




Auth::routes();


Route::get('/', function () {
    return view('pages.dashboard');
})->middleware('auth');


// Route::get('/system-maintenance', function () {
//     return view('pages.SystemMaintenance.index');
// })->name('system_maintenance.index')->middleware('auth');


//System Maintenance
Route::group([ 'prefix' => 'system-maintenance', 'middleware' => 'auth'], function() {
    Route::get('/',[App\Http\Controllers\SystemMaintenanceController::class, 'index'])->name('sys_main.index');
});

//Track
Route::group([ 'prefix' => 'track', 'middleware' => 'auth'], function() {
    Route::post('/store',[App\Http\Controllers\TrackController::class, 'store'])->name('track.store');
});

//Strand
Route::group([ 'prefix' => 'strand', 'middleware' => 'auth'], function() {
    Route::post('/store',[App\Http\Controllers\StrandController::class, 'store'])->name('strand.store');
});

//Specialization
Route::group([ 'prefix' => 'specialization', 'middleware' => 'auth'], function() {
    Route::post('/store',[App\Http\Controllers\SpecializationController::class, 'store'])->name('specialization.store');
});

//Specialization
Route::group([ 'prefix' => 'school-year', 'middleware' => 'auth'], function() {
    Route::post('/store',[App\Http\Controllers\SchoolYearController::class, 'store'])->name('school_year.store');
});


//Student
Route::group([ 'prefix' => 'enroll_new_student', 'middleware' => 'auth'], function() {
    Route::get('/create',[App\Http\Controllers\EnrollNewStudentController::class, 'create'])->name('enroll_new_student.create');
    Route::post('/store',[App\Http\Controllers\EnrollNewStudentController::class, 'store'])->name('enroll_new_student.store');
    Route::get('/get_strand', [App\Http\Controllers\EnrollNewStudentController::class,'get_strand'])->name('get_strand');
    Route::get('/get_specialization', [App\Http\Controllers\EnrollNewStudentController::class,'get_specialization'])->name('get_specialization');
});
//Student
Route::group([ 'prefix' => 'enroll_existing_student', 'middleware' => 'auth'], function() {
    Route::get('/create',[App\Http\Controllers\EnrollExistingStudentController::class, 'create'])->name('enroll_existing_student.create');
    Route::post('/store',[App\Http\Controllers\EnrollExistingStudentController::class, 'store'])->name('enroll_existing_student.store');
});

//Student Record - Enrolled student
Route::group([ 'prefix' => 'student-records', 'middleware' => 'auth'], function() {
    Route::get('/enrolled_student',[App\Http\Controllers\EnrolledStudentController::class, 'index'])->name('enrolled_student.index');
});

//Active Sy Sem
Route::group([ 'prefix' => 'act_sy_sem', 'middleware' => 'auth'], function() {
    Route::put('update/{id}',[App\Http\Controllers\ActSYSemController::class, 'update'])->name('act_sy_sem.update');
    
});

//Accounting - Billing
Route::group([ 'prefix' => 'billing', 'middleware' => 'auth'], function() {
    Route::get('/index', [App\Http\Controllers\BillingController::class, 'index'])->name('billing.index');
    Route::get('/show/{student_id}',[App\Http\Controllers\BillingController::class, 'show'])->name('billing.show');
    Route::post('/store',[App\Http\Controllers\BillingController::class, 'store'])->name('billing.store');
});

//Accounting - Payment
Route::group([ 'prefix' => 'payment', 'middleware' => 'auth'], function() {
    Route::get('/index', [App\Http\Controllers\PaymentController::class, 'index'])->name('payment.index');
    Route::get('/show/{id}',[App\Http\Controllers\PaymentController::class, 'show'])->name('payment.show');
    Route::post('/store',[App\Http\Controllers\PaymentController::class, 'store'])->name('payment.store');
});

//Accounting - Report
Route::group([ 'prefix' => 'report', 'middleware' => 'auth'], function() {
    Route::get('/index', [App\Http\Controllers\Bill_Pay_Report_Controller::class, 'index'])->name('acc_report.index');
    Route::get('/show/{id}',[App\Http\Controllers\Bill_Pay_Report_Controller::class, 'show'])->name('acc_report.show');
});





// //Enrollment
//  Route::get('/enrollment', function () {
//      return view('pages.Enrollment.index');
//  })->name('enrollment.index')->middleware('auth');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('user-logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
