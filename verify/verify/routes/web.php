<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VerifyController;
use App\Http\Controllers\CovidTestMasterController;

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
    return redirect('/Verify');
});

Route::get('/Verify',   [VerifyController::class, 'verificationForm'])->name('verificationForm');

Route::get('/VerifyResults/{passportNumber}', [VerifyController::class, 'verify'])->name('verify');

Route::post('/VerifyResults', [VerifyController::class, 'verifyWP'])->name('verifyWP');

Route::get('/CovidTestMaster', [CovidTestMasterController::class, 'index'])->name('covid_test_master');

Route::post('/registerPatient', [CovidTestMasterController::class, 'register'])->name('register');