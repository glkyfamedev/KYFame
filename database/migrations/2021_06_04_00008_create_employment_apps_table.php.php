<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmploymentAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employment_apps', function (Blueprint $table) {
            $table->id();
            $table->string('employerName');
            $table->string('employerPhone');
            $table->string('workDuties');
            $table->date('employmentStart');
            $table->date('employmentEnd');
            $table->string('reasonForLeaving');
          
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
        Schema::dropIfExists('employment_apps');
    }
}