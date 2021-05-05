<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\SponsorController;
use App\Models\StudentApplication;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TranscriptController;

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


//Guest routtes
Route::view('/students', 'students');
Route::view('/sponsors', 'sponsors');
Route::view('/employers', 'employers');

//home 
Route::get('/', function () {
    return view('home');
});

//Footer Contact Form
Route::post('/email', [EmailController::class, 'contactEmail'])->name('email.contact');

//Guest Sponsors 
Route::get('/sponsors', [SponsorController::class, 'index'])->name('sponsors');

Route::get('/sponsorSelected/{id}', [SponsorController::class, 'show'])->name('sponsors.show');


//Student/Guest dashboard 
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('verified')->name('dashboard');

//Student Application routes
Route::get('/form', [ApplicationController::class, 'index'])->name('form');

Route::get("/contact", [ContactController::class, 'index'])->name('contact');
Route::post("/savecontact", [ContactController::class, 'saveContact'])->name('saveContact');

Route::post('/formStatus', [ApplicationController::class, 'formStatus'])->name('form.formStatus');
Route::post('/formEmployment', [ApplicationController::class, 'formEmployment'])->name('form.formEmployment');
Route::post('/formAssesments', [ApplicationController::class, 'formAssesments'])->name('form.formAssesments');
Route::post('/formEssay', [ApplicationController::class, 'formEssay'])->name('form.formEssay');

Route::get('/transcript', [TranscriptController::class, 'index'])->name('transcript');
Route::post('/saveTranscript', [TranscriptController::class, 'saveTranscript'])->name('saveTranscript');

Route::post('/formComplete', [ApplicationController::class, 'CompleteApplication'])->name('form.complete');

Route::post('/updateProfile', [DashboardController::class, 'updateProfile'])->middleware('verified')->name('dashboard.updateProfile');
Route::post('/updateTranscript', [DashboardController::class, 'updateTranscript'])->middleware('verified')->name('dashboard.updateTranscript');

//log in and check Role
Route::get('/signIn', function () {
    $user = Auth::user();

    if ($user->role === "Admin") {
        return redirect()->route('adminDashboard');
    } else {
        return redirect()->route('dashboard');
    }
})->middleware(['auth'])->name('signIn');

//Admin routes

//Admin Dashboard 
Route::get('/adminDashboard', [AdminController::class, 'index'])->name('adminDashboard');

//Admin sponsor Routes
Route::get('admin/viewSponsors', [AdminController::class, 'viewSponsors'])->name('viewSponsors');
Route::get('admin/manageSponsors/{id}', [AdminController::class, 'manageSponsors'])->name('manageSponsors');
Route::get('admin/updateSponor/{id}', [AdminController::class, 'updateSponsor'])->name('updateSponsor');

Route::get('admin/addSponsor', [AdminController::class, 'addSponsor'])->name('addSponsor');
Route::post('admin/createSponsor', [AdminController::class, 'createSponsor'])->name('createSponsor');

// Route::post('admin/deleteSponsor/{$id}', [AdminController::class, 'deleteSponsor'])->name('deleteSponsor');


Route::get('admin/download', [AdminController::class, 'viewSponsors'])->name('viewSponsors');

//Admin Application routes
Route::get('admin/manageApplications', [AdminController::class, 'viewApplications'])->name('applications');
Route::get('admin/applicationSelected/{id}', [AdminController::class, 'selectApplication'])->name('application.show');    
Route::get('admin/download/{id}', [AdminController::class, 'downloadTranscript'])->name('application.downloadTranscript');    
Route::post('admin/updateAppplication/{id}', [AdminController::class, 'updateApplication'])->name('updateApplication');



require __DIR__ . '/auth.php';