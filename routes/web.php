<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonorController;
use \App\Models\User;
use App\Models\Donor;
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




Route::prefix('donors')->group(function (){
    Route::get("/",[DonorController::class,'index'])->name('donor.index');
    Route::get("/create",[DonorController::class,'create'])->name('donor.create');
    Route::post("/store",[DonorController::class,'store'])->name('donor.store');
    Route::get("/show/{id}",[DonorController::class,'show'])->name('donor.show');



});

