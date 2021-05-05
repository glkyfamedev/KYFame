<?php

namespace App\Http\Controllers;

use App\Mail\Gmail;
use App\Models\StudentApplication;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function __construct()
    {
        
    }
//Notification email to Cindy when an application is Submitted
    public function AdminEmail($user)
    {   
         $format = "A new application has been submitted by %s %s.";
        
         $email = 'glfame@outlook.com';
         $details= [
         'title' => 'New Applicant',
         'body' => sprintf($format, $user->first_name, $user->last_name)
         ];
         Mail::to($email)->send(new Gmail($details));
    }

    // confirmation email to applicant after submission, Sends this one when they are not yet qualified based on theit ACT scores
    public function studentConfirmationEmail($user)
    {
       $email = $user->email;
       $details= [
            'title' => 'Application Received!',
            'body' => 'Thank you ' .' '.' '. $user->first_name .' '.' '.'for applying to GLKYfame. We will be in touch with you soon after reviewing your application.'
        ];
        Mail::to($email)->send(new Gmail($details));
    }

    //Confirmation email for approved Applicants based on ACT scores
    public function studentApprovedEmail($user)
    {
        $email = $user->email;
        $details= [
        'title' => 'Application Received!',
        'body' => 'Conratulations ' .' '.' '. $user->first_name .'! '.' '.'Thank you for applying to GLKYfame. We will be in touch with
        you soon with details on joining our program.'
        ];
        Mail::to($email)->send(new Gmail($details));
    }

    //Footer contact email
    public function contactEmail(Request $request)
    {
        $contactEmail = $request->contactEmail;
        $contactName = $request->contactName;
        $contactMessage = $request->contactMessage;

        if ($request->ajax()) { 

            
                $email = 'glfame@outlook.com';
                $details= [
                'title' => 'Contact Request from'. ' ' . $contactName .' '. $contactEmail,
                'body' => 'Message deatils: ' .' '.' '. $contactMessage
                ];
                Mail::to($email)->send(new Gmail($details));
                return response()->json(['success' => true]);
           
   
        }
    }
}