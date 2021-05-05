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

class ApplicationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Get all application data for the user 
    public function index(Request $request)
    {
        $appId = 1;
         try {
            $application = StudentApplication::where('id', $appId)->with(
         'contactApp',
         'statusApp',
         'employmentApp',
         'assesmentApp',
         'user'
         )
         ->firstOrFail();

         session(['application' => $application]);

         return view('application', ['application' => $application]);
         } catch (Exception $e) {
            return null;
         }    
    }
    //Process the application status section
    public function formStatus(Request $request): \Illuminate\Http\JsonResponse
    {
        $application = session('application');

        $student_application_id = $application->id;

        if ($request->ajax()) {
            try {
                $status = statusApp::where('student_application_id', $application->id)->first() ?? new StatusApp();
                $status->under_18 = $request->under_18;
                $status->authorizedInUS = $request->authorizedInUS;
                $status->levelOfEducation = $request->levelOfEducation;
                $status->relativeSponsors = $request->relativeSponsors;
                $status->workForSponsor = $request->workForSponsor;
                $status->relative_sponsor_names = $request->relative_sponsor_names;
                $status->employed_sponsor_names = $request->employed_sponsor_names;
                $status->student_application_id = $application->id;

                $status->save();
                $application->currentSection = $request->currentSection;
                $application->save();
                $application->refresh();

                return response()->json(['success' => true]);
            } catch (Exception $e) {
                return response()->json(['success' => false]);
            }
        }
    }
//Process the employment section of the application
//There can be up to three employers so it needs to process as an array
    public function formEmployment(Request $request): \Illuminate\Http\JsonResponse
    {
        $application = session('application');
        $employerArrays = $request->employerArray;
        if ($request->ajax()) {
            try {
                $employmentModel =
                    EmploymentApp::where('student_application_id', $application->id)->first() ?? new EmploymentApp();

                foreach ($employerArrays as $employerArray) {
                    $employmentModel = new $employmentModel;

                    $employmentModel['employerName'] = $employerArray['name'];
                    $employmentModel['employerPhone'] = $employerArray['phone'];
                    $employmentModel['workDuties'] = $employerArray['workDuties'];
                    $employmentModel['employmentStart'] = $employerArray['employmentStart'];
                    $employmentModel['employmentEnd'] = $employerArray['employmentEnd'];
                    $employmentModel['reasonForLeaving'] = $employerArray['reasonForLeaving'];
                    $employmentModel->student_application_id = $application->id;

                    $employmentModel->save();
                }

                $application->currentSection = $request->currentSection;
                $application->save();

                return response()->json(['success' => true]);
            } catch (Exception $e) {
                return response()->json(['success' => false]);
            }
        }
    }

    //process Assesment section of application
    //Sets a column in the database that determines the email sent based on the ACT scores entered
    public function formAssesments(Request $request): \Illuminate\Http\JsonResponse
    {
        $application = session('application');
        if ($request->ajax()) {
            try {
                $assesments = AssesmentApp::where('student_application_id', $application->id)->first() ?? new AssesmentApp();

                $assesments->ACT = $request->ACT;
                $assesments->ACTenglishScore = $request->ACTenglishScore;
                $assesments->ACTreadingScore = $request->ACTreadingScore;
                $assesments->ACTmathScore = $request->ACTmathScore;
                $assesments->ACTscienceScore = $request->ACTscienceScore;
                $assesments->ACTcompositeScore = $request->ACTcompositeScore;

                $assesments->SAT = $request->SAT;
                $assesments->SATmath = $request->SATmath;
                $assesments->SATCriticalThinking = $request->SATCriticalThinking;
                $assesments->SATwriting = $request->SATwriting;
                $assesments->SATcomposite = $request->SATcomposite;

                $assesments->KYOTE = $request->KYOTE;
                $assesments->KYOTEarea1 = $request->KYOTEarea1;
                $assesments->KYOTEscore1 = $request->KYOTEscore1;
                $assesments->KYOTEarea2 = $request->KYOTEarea2;
                $assesments->KYOTEscore2 = $request->KYOTEscore2;
                $assesments->KYOTEarea3 = $request->KYOTEarea3;
                $assesments->KYOTEscore3 = $request->KYOTEscore3;

                $assesments->otherAssesments = $request->otherAssesments;
                $assesments->skillsUSA = $request->skillsUSA;
                $assesments->projectLeadTheWay = $request->projectLeadTheWay;
                $assesments->manufacturingAcedemics = $request->manufacturingAcedemics;
                $assesments->awardsAndHonors = $request->awardsAndHonors;
                $assesments->highSchoolAttended = $request->highSchoolAttended;
                $assesments->GPA = $request->GPA;
                $assesments->highSchoolActivities = $request->highSchoolActivities;
                $assesments->technicalPrograms = $request->technicalPrograms;
                $assesments->additionalComments = $request->additionalComments;
                $assesments->student_application_id = $application->id;

                $assesments->save();

                $application->application_action = $request->app_action; //Determines the Confirmation email when they complete the application.
                $application->currentSection = $request->currentSection;
                $application->save();

                return response()->json(['success' => true]);
            } catch (Exception $e) {
                return response()->json(['success' => false]);
            }
        }
    }

    //Essay portion of the application 
    public function formEssay(Request $request): \Illuminate\Http\JsonResponse
    {
        $application = session('application');
        if ($request->ajax()) {
            try {
                $user = Auth::user();

                $storeData = $request->validate([
                    'essay' => 'required|max:255',
                ]);
                $application = StudentApplication::find($user->id);
                $application->essay = $request->essay;
                $application->currentSection = $request->currentSection;

                $application->save();

                return response()->json(['success' => true]);
            } catch (Exception $e) {
                return response()->json(['success' => false]);
            }
        }
    }
    
    //completes the application, sets the Completed date in the database and sends the confirmation email to Cindy and the Applicant
    //this section will be disabled after completion in the application.
    public function CompleteApplication(Request $request)
    {
        $application = session('application');
        $user = Auth::user();
        if ($request->ajax()) {
            try {
                $complete = StudentApplication::find($user->id);
                $complete->completed_date = $request->completed_date;

                $complete->save();

                $success = true;
                if ($success) {
                    $emailController = new EmailController($user);
                    $emailController->AdminEmail($user);
                    $action = $complete->application_action;

                    if ($action === 'approved') {
                        $emailController->studentApprovedEmail($user);
                    } else {
                        $emailController->StudentConfirmationEmail($user);
                    }
                }

                return response()->json(['success' => true]);
            } catch (Exception $e) {
                $success = false;
                return response()->json(['success' => false]);
            }
        }
    }
}