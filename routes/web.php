<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ScheduleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/regis_pengajar', function () {
    return view('regis_pengajar');
});

Route::get('/regis_pelajar', function () {
    return view('regis_pelajar');
});

Route::get('/home_pelajar', function () {
    return view('home_pelajar');
});

Route::get('/testing', function () {
    return view('regist');
});

Route::get('/student/regist', [UserController::class, 'showStudentRegisterForm'])->name('student.register');
Route::post('/student/regist', [UserController::class, 'registerStudent'])->name('student.register.submit');

Route::get('/instructor/regist', [UserController::class, 'showInstructorRegisterForm'])->name('instructor.register');
Route::post('/instructor/regist', [UserController::class, 'registerInstructor'])->name('instructor.register.submit');

Route::get('/dashboard_pelajar', function () {
    return view('dashboard_pelajar');
});

Route::get('/dashboard_pengajar', function () {
    return view('dashboard_pengajar');
});

Route::get('/cari_tutor_pelajar', function () {
    return view('cari_tutor_pelajar');
});

Route::get('/request_matching_pelajar', function () {
    return view('request_matching_pelajar');
});

Route::get('/booking_pelajar', function () {
    return view('booking_pelajar');
});

Route::get('/monitoring_pelajar', function () {
    return view('monitoring_pelajar');
});

// Route untuk Student
Route::get('/instructor/login', [LoginController::class, 'showInstructorLoginForm'])->name('instructor.login');
Route::get('/student/login', [LoginController::class, 'showStudentLoginForm'])->name('student.login');
Route::post('/instructor/login', [LoginController::class, 'InstructorLogin']);
Route::post('/student/login', [LoginController::class, 'StudentLogin']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');



// Route Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth','role:instructor']], function () {
    Route::get('/instructor/dashboard', [DashboardController::class, 'schedule'])->name('instructor.dashboard');
    
    
});




// Route untuk menerima POST dari fetch API modal booking
Route::post('/api/booking/store', [TransactionController::class, 'store'])->name('booking.store');

Route::group(['middleware' => ['auth','role:student']], function () {
    Route::get('/student/dashboard', function () {
        return view('student.dashboard');
    })->name('student.dashboard');
    Route::get('/student/search', [UserController::class,'pencarianKursus'])->name('student.search');
    
});


Route::group(['middleware' => ['auth','role:instructor']], function () {
    // Menampilkan halaman dashboard (asumsi Anda sudah punya routenya)
    Route::get('instructor/dashboard/calendar', [DashboardController::class, 'calendar'])->name('instructor.dashboard.calendar');
    Route::get('instructor/dashboard/progress', [DashboardController::class, 'progress'])->name('instructor.dashboard.progress');
    Route::get('instructor/dashboard/schedule', [DashboardController::class, 'schedule'])->name('instructor.dashboard.schedule');
    Route::get('/api/schedules', [ScheduleController::class, 'getSchedules']);
    Route::post('/api/schedules', [ScheduleController::class, 'storeSchedules']);
});
