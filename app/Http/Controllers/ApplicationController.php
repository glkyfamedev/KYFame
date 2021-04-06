<?php

namespace App\Http\Controllers;

use App\Models\AssesmentApp;
use App\Models\ContactApp;
use App\Models\EmploymentApp;
use App\Models\StatusApp;
use App\Models\StudentApplication;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $current_date = new DateTime('NOW');
        $application = StudentApplication::firstOrCreate(
            [
                'user_id' => $user->id,
            ],
            [
                'start_date' => $current_date,
            ]);

        session(['application' => $application]);

        return view('application');
    }

    public function formSubmit(Request $request)
    {
        $application = session('application');

        // $studentAddress = $contact[0];

        if ($request->ajax()) {

            try {
                $contactModel = $request->validate([

                    'streetAddress' => 'required|max:255',
                    'address2' => 'max:255',
                    'city' => 'required|max:255',
                    'state' => 'required|max:255',
                    'zip' => 'required|max:255',
                    'primaryPhone' => 'required|max:255',
                    'altPhone' => 'max:255',

                ]);

                $contactModel = new ContactApp();
                $contactModel->streetAddress = $request->streetAddress;
                $contactModel->address2 = $request->address2;
                $contactModel->city = $request->city;
                $contactModel->state = $request->state;
                $contactModel->zip = $request->zip;
                $contactModel->primaryPhone = $request->primaryPhone;
                $contactModel->altPhone = $request->altPhone;
                $contactModel->student_application_id = $application->id;

                $contactModel->save();
                return response()->json(['success' => true]);
            } 
            catch (Exception $e) {
                return response()->json(['success' => false]);
            }
        }
    }

    public function formStatus(Request $request)
    {
        $application = session('application');

        if ($request->ajax()) {
            try {
                $status = $request->validate([
                    'under_18' => 'required|max:255',
                    'authorizedInUS' => 'required|max:255',
                    'levelOfEducation' => 'required|max:255',
                    'relativeSponsors' => 'required|max:255',
                    'workForSponsor' => 'required|max:255',
                    'sponsor_names' => 'max:255',

                ]);
                $status = new StatusApp();
                $status->under_18 = $request->under_18;
                $status->authorizedInUS = $request->authorizedInUS;
                $status->levelOfEducation = $request->levelOfEducation;
                $status->relativeSponsors = $request->relativeSponsors;
                $status->workForSponsor = $request->workForSponsor;
                $status->sponsor_names = $request->sponsor_names;
                $status->student_application_id = $application->id;

                $status->save();
                return response()->json(['success' => true]);
            } catch (Exception $e) {
                return response()->json(['success' => false]);
            }
        }
    }

    public function formEmployment(Request $request)
    {
        $application = session('application');

        if ($request->ajax()) {
            try {

                $employmentModel = $request->validate([
                    'employerName' => 'max:255',
                    'employerPhone' => 'max:255',
                    'workDuties' => 'max:255',
                    'employmentStart' => 'max:255',
                    'employmentEnd' => 'required|max:255',
                    'reasonForLeaving' => 'max:255',

                ]);
                // foreach ($request->all as $req) {
                $employmentModel = new EmploymentApp();
                $employmentModel->employerName = $request->employerName;
                $employmentModel->employerPhone = $request->employerPhone;
                $employmentModel->workDuties = $request->workDuties;
                $employmentModel->employmentStart = $request->employmentStart;
                $employmentModel->employmentEnd = $request->employmentEnd;
                $employmentModel->reasonForLeaving = $request->reasonForLeaving;
                $employmentModel->student_application_id = $application->id;

                $employmentModel->save();

                return response()->json(['success' => true]);

            } catch (Exception $e) {
                return response()->json(['success' => false]);
            }
        }

    }

    public function formAssesments(Request $request)
    {
        $application = session('application');

        if ($request->ajax()) {
            try {
                
                // $storeData = $request->validate([
                //     'ACT' => 'required|max:255',
                //     'ACTenglishScore' => 'required|max:255',
                //     'ACTreadingScore' => 'required|max:255',
                //     'ACTmathScore' => 'required|max:255',
                //     'ACTscienceScore' => 'required|max:255',
                //     'ACTcompositeScore' => 'max:255',

                //     'SAT' => 'required|max:255',
                //     'SATmath' => 'required|max:255',
                //     'SATCriticalThinking' => 'required|max:255',
                //     'SATwriting' => 'required|max:255',
                //     'SATcomposite' => 'required|max:255',

                //     'KYOTE' => 'required|max:255',
                //     'KYOTEarea' => 'required|max:255',
                //     'KYOTEscore' => 'required|max:255',

                //     'otherAssesments' => 'required|max:255',
                //     'skillsUSA' => 'required|max:255',
                //     'projectLeadTheWay' => 'required|max:255',
                //     'manufacturingAcedemics' => 'required|max:255',
                //     'awardsAndHonors' => 'required|max:255',
                //     'highSchoolAttended' => 'required|max:255',
                //     'GPA' => 'required|max:255',
                //     'highSchoolActivities' => 'max:255',
                //     'technicalPrograms' => 'max:255',
                //     'additionalComments' => 'max:255',
                // ]);

                $assesments = new AssesmentApp();
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
                return response()->json(['success' => true]);

            } catch (Exception $e) {
                return response()->json(['success' => false]);
            }
        }
    }

    public function formEssay(Request $request)
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

                $application->save();
                return response()->json(['success' => true]);
            } catch (Exception $e) {
                return response()->json(['success' => false]);
            }
        }
    }

    // public function formTranscript(Request $request)
    // {
    //     $application = session('application');

    //     if ($request->ajax()) {
    //         try {
    //             $user = Auth::user();

    //             $transcript = $request->validate([
    //                 'essay' => 'required|max:255',

    //             ]);

    //             $transcript = new StudentApplication();
    //             $transcript->transcript = $request->transcript;

    //             $transcript->save();
    //             return response()->json(['success' => true]);

    //         } catch (Exception $e) {
    //             return response()->json(['success' => false]);
    //         }
    //     }
    // }
}