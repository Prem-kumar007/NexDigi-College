<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollegeInstituteSingleController;

Route::get('/', [CollegeInstituteSingleController::class, 'index'])->name('krce');

Route::post('contact_us',[CollegeInstituteSingleController::class, 'contact_us'])->name('contact_us');