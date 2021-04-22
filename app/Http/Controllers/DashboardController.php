<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Sponsor;
use App\Models\User;
use App\Http\Controllers\ApplicationController;
use Illuminate\Support\Facades\Auth;
use App\Models\StudentApplication;

class DashboardController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
        // $this->middleware('verified');
    }
          
    public function index()
    {
        $user = Auth::user();    
        $application = StudentApplication::where('user_id', $user->id)
        ->with('contactApp')
        ->firstOrCreate(
        [
        'user_id' => $user->id
        ],
        [
        'start_date' => null
        ]);
        
        return view('dashboard', ['application'=>$application]);       
    }

     
}