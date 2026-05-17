<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ScheduleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Routes (Halaman Umum / Belum Login)
|--------------------------------------------------------------------------
*/

// Halaman Awal / Welcome
Route::get('/', function () {
    return view('home'); // Mengarah ke views/welcome.blade.php
})->name('welcome');

// Form Login
Route::get('/student/login', [LoginController::class, 'showStudentLoginForm'])->name('student.login');
Route::get('/instructor/login', [LoginController::class, 'showInstructorLoginForm'])->name('instructor.login');

// Proses Kirim Data Login (POST)
Route::post('/student/login', [LoginController::class, 'StudentLogin'])->name('student.login.submit');
Route::post('/instructor/login', [LoginController::class, 'InstructorLogin'])->name('instructor.login.submit');

// Form Registrasi / Daftar Akun
Route::get('/student/regist', [UserController::class, 'showStudentRegisterForm'])->name('student.register');
Route::get('/instructor/regist', [UserController::class, 'showInstructorRegisterForm'])->name('instructor.register');
Route::post('/instructor/regist', [UserController::class, 'registerInstructor'])->name('instructor.register.submit');

Route::get('/dashboard_pelajar', function () {
    return view('dashboard_pelajar');
});

Route::get('/dashboard-pengajar', function () {
    return view('dashboard_pengajar'); 
})->name('pengajar.dashboard');

Route::get('/cari_tutor_pelajar', function () {
    return view('cari_tutor_pelajar');
});

Route::get('/request_matching_pelajar', function () {
    return view('request_matching_pelajar');
});

Route::get('/booking_pelajar', function () {
    return view('booking_pelajar');
});

// Proses Kirim Data Registrasi (POST)
Route::post('/student/regist', [UserController::class, 'registerStudent'])->name('student.register.submit');
Route::post('/instructor/regist', [UserController::class, 'registerInstructor'])->name('instructor.register.submit');

// Proses Logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout.post');

// API Endpoint untuk Booking Modal
Route::post('/api/booking/store', [TransactionController::class, 'store'])->name('booking.store');


/*
|--------------------------------------------------------------------------
| Student Routes (Halaman khusus Pelajar - Autentikasi & Role Student)
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => ['auth', 'role:student']], function () {
// Route Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth','role:instructor']], function () {
    Route::get('/instructor/dashboard', [DashboardController::class, 'schedule'])->name('instructor.dashboard');
    Route::get('/instructor/dashboard', [ScheduleController::class, 'initial_Instructor'])->name('instructor.getData');
    
    // Dashboard Utama Pelajar (views/student/dashboard.blade.php)
    Route::get('/student/dashboard', function () {
        return view('student.dashboard');
    })->name('student.dashboard');

    // Pencarian Kursus / Cari Tutor (views/student/search.blade.php)
    Route::get('/student/search', [UserController::class, 'pencarianKursus'])->name('student.search');
    
    // Redirect / Inisialisasi setelah login sukses
    Route::get('/student/loggedin', [TransactionController::class, 'initial_user'])->name('student.loggedin');
    
    // Rute pendukung Pelajar (sementara masih mengarah ke file luar sesuai strukturmu)
    Route::get('/student/monitoring', function () { 
        return view('monitoring_pelajar'); 
    })->name('student.monitoring');
    
    Route::get('/student/request-matching', function () { 
        return view('request_matching_pelajar'); 
    })->name('student.matching');
});


/*
|--------------------------------------------------------------------------
| Instructor Routes (Halaman khusus Pengajar - Autentikasi & Role Instructor)
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => ['auth', 'role:instructor']], function () {
    
    // Dashboard Utama Pengajar (views/instructor/dashboard.blade.php)
    Route::get('/instructor/dashboard', function () {
        return view('instructor.dashboard');
    })->name('instructor.dashboard');
    
    // Sub-menu Dashboard Pengajar (Kalender, Jadwal, Progress di dalam folder instructor)
    Route::get('/instructor/dashboard/calendar', function () {
        return view('instructor.dashboard_calendar');
    })->name('instructor.dashboard.calendar');

    Route::get('/instructor/dashboard/schedule', function () {
        return view('instructor.dashboard_jadwal');
    })->name('instructor.dashboard.schedule');

    Route::get('/instructor/dashboard/progress', function () {
        return view('instructor.dashboard_progress');
    })->name('instructor.dashboard.progress');
    
    // Profile Pengajar (views/profile_pengajar.blade.php)
    Route::get('/instructor/profile', function () { 
        return view('profile_pengajar'); 
    })->name('instructor.profile');
    
    // API Internal untuk Pengaturan Jadwal (Tetap menggunakan ScheduleController)
    Route::get('/api/schedules', [ScheduleController::class, 'getSchedules'])->name('api.schedules.get');
    Route::post('/api/schedules', [ScheduleController::class, 'storeSchedules'])->name('api.schedules.store');
});
Route::group(['middleware' => ['auth','role:instructor']], function () {
    // Menampilkan halaman dashboard (asumsi Anda sudah punya routenya)
    Route::get('instructor/dashboard/calendar', [DashboardController::class, 'calendar'])->name('instructor.dashboard.calendar');
    Route::get('instructor/dashboard/progress', [DashboardController::class, 'progress'])->name('instructor.dashboard.progress');
    Route::get('instructor/dashboard/schedule', [DashboardController::class, 'schedule'])->name('instructor.dashboard.schedule');
    Route::get('instructor/profile', [UserController::class, 'instructorProfile'])->name('instructor.profile');
    Route::get('/api/schedules', [ScheduleController::class, 'getSchedules']);
    Route::post('/api/schedules', [ScheduleController::class, 'storeSchedules']);
});
