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
        try{
            $application = StudentApplication::firstOrCreate(
            [
                'user_id' => $user->id,
            ],
            [
                'start_date' => $current_date,
            ]);           
            
            session(['application' => $application]);
    
            return json_encode($application);;
        } 
        catch (Exception $e) {
            return null;
        }
    }

    public function formSubmit(Request $request)
    {
        $application = session('application');
        // $contactModel = ContactApp->
        $student_application_id = $application->id;

        // $studentAddress = $contact[0];
        if ($request->ajax()) {
            try {
                $contactModel = ContactApp::updateOrCreate(
                    [
                        'streetAddress'=> $request->get('streetAddress'),
                        'address2'=> $request->get('address2'),
                        'city' => $request->get('city'),
                        'state' => $request->get('state'),
                        'zip' => $request->get('zip'),
                        'primaryPhone'=> $request->get('primaryPhone'),
                        'altPhone' => $request->get('altPhone'),
                        'student_application_id' => $student_application_id
                    ],                    
                ); 
                
                // $contactModel = new ContactApp();
                // $contactModel->streetAddress = $request->streetAddress;
                // $contactModel->address2 = $request->address2;
                // $contactModel->city = $request->city;
                // $contactModel->state = $request->state;
                // $contactModel->zip = $request->zip;
                // $contactModel->primaryPhone = $request->primaryPhone;
                // $contactModel->altPhone = $request->altPhone;
                // $contactModel->student_application_id = $application->id;

               
               
              return response()->json(['success' => true]);
            //   dd($contactModel);
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
                    'relative_sponsor_names' => 'max:100',
                    'employed_sponsor_names'=> 'max:100',

                ]);
                $status = new StatusApp();
                $status->under_18 = $request->under_18;
                $status->authorizedInUS = $request->authorizedInUS;
                $status->levelOfEducation = $request->levelOfEducation;
                $status->relativeSponsors = $request->relativeSponsors;
                $status->workForSponsor = $request->workForSponsor;
                $status->relative_sponsor_names = $request->employed_sponsor_names;
                $status->employed_sponsor_names = $request->relative_sponsor_names;
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

    public function formTranscript(Request $request)
    {
        $application = session('application');
            

        if ($request->ajax()) {
            try {
                $transcript = StudentApplication::where('id', $application->id)->first();
                 
                 $transcript->transcript_method = $request->transcript_method;
                 $transcript->transcriptPath = $request->transcriptPath;
                 
                $transcript->save();
                
                return response()->json(['success' => true]);

            } catch (Exception $e) {
                return response()->json(['success' => false]);
            }
        }
    }

    public function CompleteApplication(Request $request)
    {
        $application = session('application');
          
        if ($request->ajax()) {
            try{                                        
                $complete = StudentApplication::where('id', $application->id)->first();
                
                  $complete->completed_date = $request->completed_date;                 
                               
                // $complete->save();
                        
            return response()->json(['success' => true]);

            } 
            catch (Exception $e) {
                    return response()->json(['success' => false]);
            }
        }
    }


}