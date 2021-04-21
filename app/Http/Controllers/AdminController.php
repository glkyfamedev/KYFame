<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Sponsor;
use App\Models\User;
use App\Models\ContactApp;
use App\Models\EmploymentApp;
use App\Models\StatusApp;
use App\Models\AssesmentApp;
use App\Http\Controllers\ApplicationController;
use Illuminate\Support\Facades\Auth;
use App\Models\StudentApplication;
use DB;

class AdminController extends Controller{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
    }
    

    public function viewApplications(){    
        
         $applications = DB::table('users')
             ->join('student_applications', 'users.id', '=', 'student_applications.user_id')
             ->select('*')
             ->where('users.role','Student')
             ->get();          
        
            // $query = "SELECT * FROM users
            // INNER JOIN student_applications ON users.id             
            // WHERE student_applications.user_id = users.id &&
            //     users.role = \"Student\"";           
                       
        $test = $applications;
         return view('admin\manageApplications', compact('applications'));      
        
    }
    public function selectApplication($id){  
          $applications = DB::table('student_applications')
             ->join ('users', 'users.id', '=', 'student_applications.user_id')
              ->join('contact_apps', function ($join) {
                   if (DB::table('contact_apps')->where('student_application_id', '=', 'student_applications.id')->exists()) {
                     $join->on('student_applications.id', '=', 'student_application_id');         
                   };
               })
              ->join('status_apps', function ($join) {
                   if (DB::table('status_apps')->where('student_application_id', '=', 'student_applications.id')->exists()){
                       $join->on('student_applications.id', '=', 'student_application_id');
                    };
               })
              ->join('employment_apps', function ($join) {
                    if (DB::table('employment_apps')->where('student_application_id', '=', 'student_applications.id')->exists()){
                       $join->on('student_applications.id', '=', 'student_application_id');
                    };
                })
               ->join('assesment_apps', function ($join) {
                    if (DB::table('assesment_apps')->where('student_application_id', '=', 'student_applications.id')->exists()){
                      $join->on('student_applications.id', '=', 'student_application_id');
                    };
                })

              ->where ('student_applications.id', '=', $id)
          ->first();
          
            // $test2 = $applications;        
        return view('admin\viewApplication', ['applications' => $applications]);
    }

    public function viewSponsors(){ 
           
        $sponsors = Sponsor::all();
        return view('admin\viewSponsors', compact('sponsors'));
    }
    
    public function manageSponsors($id){
      
        $sponsor = Sponsor::findOrFail($id);
        return view('admin\manageSponsors', $sponsor);
         
    }
    
    public function updateSponsor(Request $request, $id){       
         $updateData = $request->validate([
         'sponsor_name' => 'nullable|max:255',
         'comments' => 'nullable|max:255',
         'pic_path' => 'nullable|max:255',
         'contact_name' => 'nullable|max:255',
         'contact_email' => 'nullable|max:255',
         'contact_street_addr1' => 'nullable|max:255',
         'contact_street_addr2' => 'nullable|max:255',
         'contact_city' => 'nullable|max:255',
         'contact_state' => 'nullable|max:255',
         'contact_zip' => 'nullable|max:255',
         'contact_phone_num' => 'nullable|max:255',
         ]);
        Sponsor::whereId($id)->update($updateData);
         
        $view = AdminController::viewSponsors();
        return $view;

    }
}
    