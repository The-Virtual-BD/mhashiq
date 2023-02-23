<?php

use App\Http\Controllers\GalleryImageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\VolunteerExperienceController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class,'about'])->name('about');
Route::get('/publications', [HomeController::class,'publications'])->name('publications');
Route::get('/projects', [HomeController::class,'projects'])->name('projects');
Route::get('/volunteerex', [HomeController::class,'volunteerex'])->name('volunteerex');
Route::get('/colaboration', [HomeController::class,'colaboration'])->name('colaboration');

Route::group(['prefix' => 'dashboard', 'middleware'=> 'auth'], function(){
    Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/{user}', [ProfileController::class, 'update'])->name('profile.update');
    Route::patch('/profilepicture/{user}', [ProfileController::class, 'profilePicture'])->name('profile.pp');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('apublications', PublicationController::class);
    Route::resource('aprojects', ProjectController::class);
    Route::resource('volunteerExperiences', VolunteerExperienceController::class);
    Route::resource('galleryImages', GalleryImageController::class);
});

require __DIR__.'/auth.php';
