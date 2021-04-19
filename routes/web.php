<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\SponsorController;
use App\Models\StudentApplication;
use App\Http\Controllers\DashboardController;


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
// Route::view('/application','application');


Route::get('/', function () {
    return view('home');
});

Route::get('/sponsors', [SponsorController::class, 'index'])
    ->name('sponsors');

Route::get('/sponsorSelected/{id}', [SponsorController::class, 'show'])
    ->name('sponsors.show');




Route::get('/form', [ApplicationController::class, 'index'])->name('form');

Route::post('/form', [ApplicationController::class, 'formSubmit'])->name('form.formSubmit');
Route::post('/formStatus', [ApplicationController::class, 'formStatus'])->name('form.formStatus');
Route::post('/formEmployment', [ApplicationController::class, 'formEmployment'])->name('form.formEmployment');
Route::post('/formAssesments', [ApplicationController::class, 'formAssesments'])->name('form.formAssesments');
Route::post('/formEssay', [ApplicationController::class, 'formEssay'])->name('form.formEssay');
Route::post('/formTranscript', [ApplicationController::class, 'formTranscript'])->name('form.formTranscript');
Route::post('/formComplete', [ApplicationController::class, 'CompleteApplication'])->name('form.complete');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Route::get('/application', [ApplicationController::class, 'getApplication'])->name('application');

// Route::get('/dashboard', function (Request $request) {

// return view('dashboard');
// })->middleware(['auth'])->middleware('verified')->name('dashboard');



// Route::get('/application', function (Request $request) {   
//         $application = new ApplicationController();
//         $user = Auth::user();
//         $app = $application->index($request);
//     return view('application', $application);
// })->middleware(['auth'])->name('application');


require __DIR__.'/auth.php';