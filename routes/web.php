<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SlotController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DoctorportalController;
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

/*Route::get('/', function () {
    return view('welcome');
})->name('index');
*/
/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/
Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/doctor_details/{id}', [FrontendController::class, 'doctor_details'])->name('doctor_details');
Route::get('/appointment_page/{id}', [FrontendController::class, 'appointment_page'])->name('appointment_page');
Route::post('/appointment_info_store', [FrontendController::class, 'appointment_info_store'])->name('appointment_info_store');
Route::get('/patient_payment', [FrontendController::class, 'patient_payment'])->name('patient_payment');
Route::post('/payment_info_store', [FrontendController::class, 'payment_info_store'])->name('payment_info_store');

Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::resources([
        'doctor' => DoctorportalController::class,
        'category' => CategoryController::class,
        'slot' => SlotController::class,
        'package' => PackageController::class,
        'payment' => PaymentController::class,
        'appointment' => AppointmentController::class
    ]);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/payment_status/{id}', [AppointmentController::class, 'payment_status'])->name('payment_status');
});

require __DIR__.'/auth.php';
