<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\StudentApplication;
use App\Models\ContactApp;

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
                ]
            );

        session(['application' => $application]);

        return view('dashboard', ['application' => $application]);
    }

    public function updateProfile(Request $request): \Illuminate\Http\JsonResponse
    {
        $application = session('application');

        if ($request->ajax()) {
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
                $application->currentSection = $request->currentSection;

                if ($application->start_date === null) {
                    $application->start_date = new DateTime('NOW');
                }


                $application->save();
                $application->refresh();

                $session['application'] = $application;

                return response()->json(['success' => true]);
            } catch (Exception $e) {
                return response()->json(['success' => false]);
            }
        }
    }

    public function updateTranscript(Request $request)
    {
        $user = Auth::user();
        $application = session('application');
        try {
            if ($request->file()) {
                $fileName = $user->last_name . '' . $user->id . '.' . $request->file->extension();
                $request->file->move(public_path('transcripts'), $fileName);
            }
            $application = StudentApplication::where('id', $application->id)->first();
            $application->transcript_method = 'Uploaded';
            $application->transcriptPath = $fileName;

            $application->save();

            return response()->json(['success' => true]);
        } catch (Exception $e) {
            return response()->json(['success' => false]);
        }
    }
}
