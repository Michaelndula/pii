<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PatientController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\MedicalRecordController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/patient', [PatientController::class, 'Patient']);
Route::post('/patient', [FacilityController::class, 'Facility']);
Route::post('/patient', [AddressController::class, 'Address']);
Route::post('/patient', [MedicalRecordController::class, 'MedicalRecord']);
Route::get('/patient', [PatientController::class, 'Patient']);
