<?php

use Illuminate\Support\Facades\Route;
use APP\HttP\Controllers\StudentController;
use App\Http\Controllers\StudyProgramController;
use App\Http\Controllers\SubjectController;

Route::get('/', function () {
    return view('pages.home');
});

// TODO: Tambahkan resource routes untuk CRUD di sini
Route::resource('study-programs', StudyProgramController::class);
Route::resource('students', StudentController::class);
Route::resource('subjects', SubjectController::class);
