<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollegeInstituteSingleController;
use App\Http\Controllers\PaymentController;

Route::get('/', [CollegeInstituteSingleController::class, 'index'])->name('krce');

Route::post('contact_us',[CollegeInstituteSingleController::class, 'contact_us'])->name('contact_us');

 Route::get('payment',[PaymentController::class,'payment_form'])->name('payment');