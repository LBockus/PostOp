<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\OperationController;
use App\Http\Controllers\Admin\PatientController;
use App\Http\Controllers\Admin\StatusController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\SetLocale;
use App\Models\Operation;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => SetLocale::class], function() {
    Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'verified']], function () {
        Route::get('/', DashboardController::class);
    Route::resources([
        'operations' => OperationController::class,
        'statuses' => StatusController::class,
        'doctors' => DoctorController::class,
        'patients' => PatientController::class,
        'categories' => \App\Http\Controllers\Admin\CategoryController::class,
        'conditions' => \App\Http\Controllers\Admin\ConditionController::class,
        'hospitals' => \App\Http\Controllers\Admin\HospitalController::class,
    ]);
    });
});

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
