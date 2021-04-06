<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssesmentAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assesment_apps', function (Blueprint $table) {
            $table->id();
        
            $table->boolean('ACT');
            $table->string('ACTenglishScore')->nullable();
            $table->string('ACTreadingScore')->nullable();
            $table->string('ACTmathScore')->nullable();
            $table->string('ACTscienceScore'->nullable());
            $table->string('ACTcompositeScore')->nullable();
            $table->boolean('SAT');
            $table->string('SATmath')->nullable();
            $table->string('SATCriticalThinking')->nullable();
            $table->string('SATwriting')->nullable();
            $table->string('SATcomposite')->nullable();
            $table->boolean('KYOTE');
            $table->string('KYOTEarea')->nullable();
            $table->string('KYOTEscore')->nullable();
            $table->string('otherAssesments')->nullable();
            $table->boolean('skillsUSA');
            $table->boolean('projectLeadTheWay');
            $table->string('manufacturingAcedemics')->nullable();
            $table->string('awardsAndHonors')->nullable();
            $table->string('highSchoolAttended');
            $table->string('GPA');

            $table->string('highSchoolActivities')->nullable();
            $table->string('technicalPrograms')->nullable();
            $table->string('additionalComments')->nullable();
            
            $table->foreignId('student_application_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assesment_apps');
    }
}