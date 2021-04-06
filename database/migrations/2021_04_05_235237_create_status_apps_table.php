<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_apps', function (Blueprint $table) {
            $table->id();
         
            $table->boolean('under_18');
            $table->boolean('authorizedInUS');
            $table->string('levelOfEducation');
            $table->boolean('relativeSponsors');
            $table->boolean('workForSponsor');
            $table->string('sponsor_names')->nullable();            
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
        Schema::dropIfExists('status_apps');
    }
}