<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CertificationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', [PageController::class, 'index'])->name('index');
Route::prefix('about-us')->group(function () {
    Route::get('/company-history', [PageController::class, 'aboutUsCompanyHistory'])->name('about-us.company-history');
    Route::get('/mission-and-vision', [PageController::class, 'aboutUsMissionAndVision'])->name('about-us.mission-and-vision');
    Route::get('/leadership', [PageController::class, 'aboutUsLeadership'])->name('about-us.leadership');
    Route::get('/about', [PageController::class, 'aboutUsAbout'])->name('about-us.about');
});


Route::prefix('companies')->group(function () {
    Route::get('/jay-vee-engineering', [PageController::class, 'jayVeeEngineering'])->name('companies.jay-vee-engineering');
    Route::get('/jay-vee-structural-engineering', [PageController::class, 'jayVeeStructuralEngineering'])->name('companies.jay-vee-structural-engineering');
    Route::get('/jakuva-build-tech', [PageController::class, 'jakuvaBuildTech'])->name('companies.jakuva-build-tech');


    Route::get('/safety-measurements/work-safety-measurements', [PageController::class, 'workSafetyMeasurements'])->name('companies.safety-measurements.work-safety-measurements');
});

Route::prefix('projects')->group(function () {
    Route::get('/all-projects', [PageController::class, 'allProjects'])->name('projects.all-projects');
    Route::get('/structural-projects', [PageController::class, 'structuralProjects'])->name('projects.structural-projects');
    Route::get('/manufacturing', [PageController::class, 'manufacturing'])->name('projects.manufacturing');
    Route::get('/construction', [PageController::class, 'construction'])->name('projects.construction');

    // Project Details

    Route::get('/project/{id}', [PageController::class, 'projectDetails'])->name('projects.details');
});

// Peoples -> our-workforce

Route::prefix('peoples')->group(function () {
    Route::get('/our-workforce', [PageController::class, 'ourWorkforce'])->name('peoples.our-workforce');
});

Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'send'])
    ->middleware('throttle:10,1') // max 10 requests per minute per IP
    ->name('contact.send');


Route::get('/certifications', [PageController::class, 'Certifications'])->name('Certifications');

// Secure signed routes
Route::get('/certifications/view/{file}', [CertificationController::class, 'view'])
    ->name('certifications.view')->middleware('signed');

Route::get('/certifications/download/{file}', [CertificationController::class, 'download'])
    ->name('certifications.download')->middleware('signed');



Route::middleware('guest')->group(function () {
    // Only accessible to unauthenticated users
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

// Logout route (protected by auth middleware)
Route::middleware('auth')->post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    // Admin Dashboard and Project Management routes
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [ProjectController::class, 'getDashbaord'])->name('portal.dashboard');
        Route::resource('projects', ProjectController::class);
    });
});