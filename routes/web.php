<?php

use Illuminate\Support\Facades\Route;
use App\Models\About;
use App\Http\Controllers\SocialController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\JobController;
use App\Http\Controllers\TalentController;

Auth::routes();

Route::get('/', [App\Http\Controllers\RootController::class, 'index'])->name('welcome');

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// route for about page //
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about.index');
Route::get('/about/show/{id}', [App\Http\Controllers\AboutController::class, 'show'])->name('about.edit');
Route::put('/about/{id}', [App\Http\Controllers\AboutController::class, 'update'])->name('about.update');
Route::get('/download/resume/{id}', function ($id) {
    $about = About::findOrFail($id);

    $resumePath = storage_path('app/public/uploads/resume/' . $about->resume);

    return response()->download($resumePath);
})->name('download.resume');
// route for social //
Route::resource('/social', SocialController::class);

// route for skill experience //
Route::resource('/talent',TalentController::class);
//Route for Job
Route::resource('/jobs', JobController::class);
