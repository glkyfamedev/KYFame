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
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class TranscriptController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $application = session("application");

        return view('transcript', ['application' => $application]);
    }

    public function saveTranscript(Request $request)
    {
        $user = Auth::user();
        $application = session('application');

        try {
            if ($request->file()) {                              
                $file = file_get_contents($request->file('file')); 
                $fileContents = base64_encode($file);

                $application = StudentApplication::where('id', $application->id)->first();
                $application->transcript_method = $request->transcriptMethod;
                $application->transcript_data = $fileContents;
                $application->transcript_file_ext = $request->file->getClientOriginalExtension();
                $application->save();
            } else {
                $fileName = 'N/A';
            }            

            return redirect()->route("dashboard");
        } catch (Exception $e) {
            return;
        }
    }
}