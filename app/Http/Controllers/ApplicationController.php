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

    public function index(Request $request)
    {
        $user = Auth::user();

        try {
            $application = StudentApplication::where('user_id', $user->id)->with(
                'contactApp',
                'statusApp',
                'employmentApp',
                'assesmentApp'
            )
                ->firstOrFail();

            session(['application' => $application]);

            return view('application', ['application' => $application]);
        } catch (Exception $e) {
            return null;
        }
    }

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



                //save application to session $session['application'] = $application

                return response()->json(['success' => true]);
            } catch (Exception $e) {
                return response()->json(['success' => false]);
            }
        }
    }

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
                $assesments->KYOTEarea = $request->KYOTEarea;
                $assesments->KYOTEscore = $request->KYOTEscore;

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

                $application->application_action = $request->app_action;
                $application->currentSection = $request->currentSection;
                $application->save();




                return response()->json(['success' => true]);
            } catch (Exception $e) {
                return response()->json(['success' => false]);
            }
        }
    }

    public function formEssay(Request $request): \Illuminate\Http\JsonResponse
    {
        $application = session('application');

        if ($request->ajax()) {
            try {
                $user = Auth::user();

                $storeData = $request->validate([
                    'essay' => 'required|max:255',
                ]);
                $application = StudentApplication::find(1);
                $application->essay = $request->essay;
                $application->currentSection = $request->currentSection;

                $application->save();

                return response()->json(['success' => true]);
            } catch (Exception $e) {
                return response()->json(['success' => false]);
            }
        }
    }

    public function CompleteApplication(Request $request)
    {
        $application = session('application');
        $user = Auth::user();
        if ($request->ajax()) {
            try {
                $complete = StudentApplication::find(1);
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
