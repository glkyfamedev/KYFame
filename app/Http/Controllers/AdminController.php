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
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');     
              
    }
    
    public function index(Request $request){
        //Make sure user is an Admin if not redirect.
        if(Auth::user()->role !== 'Admin'){
            return redirect('/'); 
        }
          return view('admin/dashboard'); 
    }

    //Pull all completed student applications and join them with the related user 
    public function viewApplications(Request $request){  
        
        $user = Auth::user();
        if(Auth::user()->role !== 'Admin'){
            return redirect('/'); 
         }
         
         $isQualified = false;
                
         if (isset($_GET["qu
         alified"])){
            $isQualified = ($_GET["qualified"] == 'true') ? true : false;
         }           
         $applications = DB::table('users')
             ->join('student_applications', 'users.id', '=', 'student_applications.user_id')
             ->select('*')
             ->where('student_applications.qualified', $isQualified)
             ->whereNotNull('completed_date')
             ->orderBy('completed_date', 'DESC')
             ->get();          
                
            return view('admin\manageApplications', compact('applications'));      
    }


    //Find the selected Application to view and include all application sections and the applicant
    // $id is Application Id.
    public function selectApplication(Request $request, $id){      
        
        $user = Auth::user();
        if(Auth::user()->role !== 'Admin'){
            return redirect('/'); 
         }
        
        $application = StudentApplication::where('id', $id)->with(
            'contactApp',
            'statusApp',
            'employmentApp',
            'assesmentApp',
            'user'
        )
        ->firstOrFail();
                     
        return view('admin\viewApplication', ['application' => $application]);
    }    
    //Call the php page to process the transcript download
    public function downloadTranscript(Request $request, $id){  
         
        
        $application = StudentApplication::where('id', $id)->with(
            'user'
        )
        ->firstOrFail();
                     
        return view('admin\download', ['application' => $application]);
    }    
    //update Application to mark as qualified for the program
    public function updateApplication($id)
    {
        $user = Auth::user();
         if(Auth::user()->role !== 'Admin'){
            return redirect('/'); 
        }
        
         $application = StudentApplication::find($id);
         $application->qualified = true;
         $application->status = 'Reviewed';
         $application->save();

         return back();
    }

    //Pull all sponsors 
    public function viewSponsors(Request $request){ 
        
        $user = Auth::user();
        if(Auth::user()->role !== 'Admin'){
            return redirect('/'); 
        }   

        $sponsors = Sponsor::all();
        return view('admin\viewSponsors', compact('sponsors'));
    }

    //Select a sponsor based on selected sponsor id 
    public function manageSponsors(Request $request, $id){
        
        $user = Auth::user();
        if(Auth::user()->role !== 'Admin'){
            return redirect('dashboard'); 
         }
         
        $sponsor = Sponsor::findOrFail($id);
        return view('admin\manageSponsors', $sponsor);
         
    }
    public function addSponsor(Request $request){
        $user = Auth::user();
        if(Auth::user()->role !== 'Admin'){
            return redirect('/'); 
         }
         else{
             return view('admin.addSponsor');
         }
        
    }
    
    //Add a new Sponsor
    public function createSponsor(Request $request){
        
        $user = Auth::user();
        if(Auth::user()->role !== 'Admin'){
            return redirect('/'); 
         }       
 
             $sponsorModel = New Sponsor();

             $sponsorModel-> sponsor_name = $request->sponsor_name;
             $sponsorModel-> webSiteUrl = $request-> webSiteUrl;
             $sponsorModel-> SocialMediaUrl = $request->SocialMediaUrl;
             $sponsorModel-> bodyText = $request->bodyText;
             $sponsorModel-> headerText = $request->headerText;
             $sponsorModel-> missionText = $request->missionText;
             $sponsorModel-> SpecialContent = $request->SpecialContent;
             $sponsorModel-> pic_path = $request->pic_path;
             $sponsorModel-> contact_name = $request->contact_name;
             $sponsorModel-> contact_email = $request->contact_email;
             $sponsorModel-> contact_street_addr1 = $request->contact_street_addr1;
             $sponsorModel-> contact_street_addr2 = $request->contact_street_addr2;
             $sponsorModel-> contact_city = $request->contact_city;
             $sponsorModel-> contact_state = $request->contact_state;
             $sponsorModel-> contact_zip = $request->contact_zip;
             $sponsorModel-> contact_phone_num = $request->contact_phone_num;      
                                                  
          $sponsorModel->save();
         
          return redirect('admin\viewSponsors');     
   
    }
    
    //update Sponsor in database
    public function updateSponsor(Request $request, $id){   
        
        $user = Auth::user();
        if(Auth::user()->role !== 'Admin'){
            return redirect('/'); 
         }    
         
         $sponsorModel = Sponsor::where('sponsors.id', $id)->first();

         $input = $request->all();
         $sponsorModel->fill($input)->save();

        
         return redirect('admin\viewSponsors');  
         
    }

    // public function deleteSponsor(Request $request, $id){   
        
    //     $user = Auth::user();
    //     if(Auth::user()->role !== 'Admin'){
    //         return redirect('/'); 
    //      }    
         
    //      $sponsorModel = Sponsor::where('sponsors.id', $id)->first();

    //      $sponsorModel::destroy();

        
    //      return redirect('admin\viewSponsors');  
         
    // }
}
    