<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollegeInstituteSingleController;

Route::get('/', [CollegeInstituteSingleController::class, 'index'])->name('krce');

