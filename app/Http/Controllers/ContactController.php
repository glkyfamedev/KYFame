<?php

namespace App\Http\Controllers;

use App\Http\Controllers\EmailController;
use App\Mail\Gmail;
use App\Models\AssesmentApp;
use App\Models\ContactApp;
use App\Models\EmploymentApp;
use App\Models\StatusApp;
use App\Models\StudentApplication;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $application = session('application');

        return view('contact', ['contactData' => $application->contactApp]);
    }

    //Process the Application contact section
    //filled out outside of the application to make it easier to get to in order to update it but it is part of the overall application 
    public function saveContact(Request $request)
    {
        $application = session('application');

        try {
            $contactModel = contactApp::where('student_application_id', $application->id)->first() ?? new ContactApp();

            $contactModel->streetAddress = $request->streetAddress;
            $contactModel->address2 = $request->address2;
            $contactModel->city = $request->city;
            $contactModel->state = $request->state;
            $contactModel->zip = $request->zip;
            $contactModel->primaryPhone = $request->primaryPhone;
            $contactModel->altPhone = $request->altPhone;
            $contactModel->preferedContactMethod = $request->preferedContactMethod;
            $contactModel->otherEmail = $request->otherEmail;
            $contactModel->student_application_id = $application->id;

            $contactModel->save();

            return redirect()->route("dashboard");
        } catch (Exception $e) {
            return;
        }
    }
}
