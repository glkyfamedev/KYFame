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
    public function __construct($user)
    {
      $user = Auth::user();
    }

    public function AdminEmail($user)
    {   
         $format = "A new application has been submitted by %s %s.";
        
         $email = 'kyfame.dev@gmail.com';
         $details= [
         'title' => 'New Applicant',
        //  'body' => 'A new application has been submitted by'.' ' .' '. $user->first_name .' ' .' '. $user->last_name . '.'
         'body' => sprintf($format, $user->first_name, $user->last_name)
         ];
         Mail::to($email)->send(new Gmail($details));
    }

    public function studentConfirmationEmail($user)
    {
       $email = $user->email;
       $details= [
            'title' => 'Application Received!',
            'body' => 'Thank you ' .' '.' '. $user->first_name .' '.' '.'for applying to GLKYfame. We will be in touch with you soon after reviewing your application.'
        ];
        Mail::to($email)->send(new Gmail($details));
    }

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
  



}