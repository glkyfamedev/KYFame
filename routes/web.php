<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\SponsorController;


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

Route::view('/students', 'students'); 
Route::view('/sponsors', 'sponsors'); 
Route::view('/employers','employers');

// Route::resource('ssponsors', SSponsorController::class);

Route::get('/', function () {
    return view('home');
});



Route::get('/sponsors', [SponsorController::class, 'index'])
    ->name('sponors');

Route::get('/sponsorSelected/{id}', [SponsorController::class, 'show'])
    ->name('sponsors.show');




Route::get('/form', [ApplicationController::class, 'index'])
    ->name('form');

Route::post('/form', [ApplicationController::class, 'formSubmit'])->name('form.formSubmit');
Route::post('/formStatus', [ApplicationController::class, 'formStatus'])->name('form.formStatus');
Route::post('/formEmployment', [ApplicationController::class, 'formEmployment'])->name('form.formEmployment');
Route::post('/formAssesments', [ApplicationController::class, 'formAssesments'])->name('form.formAssesments');
Route::post('/formEssay', [ApplicationController::class, 'formEssay'])->name('form.formEssay');
Route::post('/formTranscript', [ApplicationController::class, 'formTranscript'])->name('form.formTranscript');
   
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';