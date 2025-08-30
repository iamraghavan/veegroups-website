<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class, 'index'])->name('index');
Route::prefix('about-us')->group(function () {
    Route::get('/company-history', [PageController::class, 'aboutUsCompanyHistory'])->name('about-us.company-history');
    Route::get('/mission-and-vision', [PageController::class, 'aboutUsMissionAndVision'])->name('about-us.mission-and-vision');
    Route::get('/leadership', [PageController::class, 'aboutUsLeadership'])->name('about-us.leadership');
});


Route::prefix('companies')->group(function () {
    Route::get('/jay-vee-engineering', [PageController::class, 'jayVeeEngineering'])->name('companies.jay-vee-engineering');
    Route::get('/jay-vee-structural-engineering', [PageController::class, 'jayVeeStructuralEngineering'])->name('companies.jay-vee-structural-engineering');
});
