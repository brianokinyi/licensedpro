<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [\App\Http\Controllers\Web\HomeController::class, 'home'])->name('home');

Route::prefix('courses')->group(function () {
    Route::get('/', [\App\Http\Controllers\Web\CourseController::class, 'index'])->name('courses.index');
    Route::get('/{course}', [\App\Http\Controllers\Web\CourseController::class, 'show'])->name('courses.show');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return Inertia::render('Dashboard');
//     })->name('dashboard');
// });
