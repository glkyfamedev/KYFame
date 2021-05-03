<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssesmentApp extends Model
{
    use HasFactory;

       protected $fillable = [
      'ACT',
      'ACTenglishScore',
      'ACTreadingScore',
      'ACTmathScore',
      'ACTscienceScore',
      'ACTcompositeScore',
      'SAT',
      'SATmath',
      'SATCriticalThinking',
      'SATwriting',
      'SATcomposite',
      'KYOTE',
      'KYOTEarea1',
      'KYOTEscore1',
      'KYOTEarea2',
      'KYOTEscore2',
      'KYOTEarea3',
      'otherAssesments',
      'skillsUSA',
      'projectLeadTheWay',
      'manufacturingAcedemics',
      'awardsAndHonors',
      'highSchoolActivities',
      'technicalProgrrams',
      'additionalComments',
      'studentApplication_id',   
              
    ];
     public $timestamps = false;
     protected $guarded = [];

         public function Student_application()
    {
        return $this->belongsTo(Student_application::class);
    }




}