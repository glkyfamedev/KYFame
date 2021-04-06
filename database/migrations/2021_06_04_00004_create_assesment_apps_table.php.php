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
            $table->integer('ACTenglishScore')->default('0');
            $table->integer('ACTreadingScore')->default('0');
            $table->integer('ACTmathScore')->default('0');
            $table->integer('ACTscienceScore')->default('0');
            $table->integer('ACTcompositeScore')->default('0');
            $table->boolean('SAT');
            $table->integer('SATmath')->default('0');
            $table->integer('SATCriticalThinking')->efault('0');
            $table->integer('SATwriting')->default('0');
            $table->integer('SATcomposite')->default('0');
            $table->boolean('KYOTE');
            $table->string('KYOTEarea')->default('0');
            $table->integer('KYOTEscore')->default('0');
            $table->string('otherAssesments')->default('0');
            $table->boolean('skillsUSA');
            $table->boolean('projectLeadTheWay');
            $table->string('manufacturingAcedemics')->default('0');
            $table->string('awardsAndHonors')->default('0');
            $table->string('highSchoolAttended');
            $table->integer('GPA');

            $table->string('highSchoolActivities')->default('0');
            $table->string('technicalPrograms')->default('0');
            $table->string('additionalComments')->default('0');
            
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