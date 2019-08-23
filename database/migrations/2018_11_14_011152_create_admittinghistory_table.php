<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmittinghistoryTable extends Migration
{
    /**Hesk Ticket M8D-5AX-WYL5
     * Run the migrations.
     *
     * @return void 36784-note ni mike 
     6213(Neostig) note din ni mike
     */
    public function up()
    {
        Schema::create('admittinghistory', function (Blueprint $table) {
            $table->increments('id');
            $table->string('admittingHistoryNo');
            $table->string('attendingPhysician')->nullable();
            $table->string('attendingPhysicianOther')->nullable();
            $table->string('dateAdmit')->nullable();
            $table->string('chiefComplaint')->nullable();
            $table->text('historyPresentIllness')->nullable();
            $table->string('pastMedicalHistory')->nullable();
            $table->text('pastMedicalHistoryOther')->nullable();
            $table->string('pastSurgicalHistory')->nullable();
            $table->text('pastSurgicalHistoryOther')->nullable();
            $table->string('personalAndSocialHistory')->nullable();
            $table->text('personalAndSocialHistoryOther')->nullable();
            $table->string('familyHistory')->nullable();
            $table->text('familyHistoryOther')->nullable();
            $table->string('systemsReview',1000)->nullable();
            $table->string('bp')->nullable();
            $table->string('rr')->nullable();
            $table->string('hr')->nullable();
            $table->string('te')->nullable();
            $table->string('peGenSurvey')->nullable();
            $table->string('peDetails')->nullable();
            $table->string('peFindings',1000)->nullable();
            $table->text('pertinentFind1')->nullable();
            $table->text('pertinentFind2')->nullable();
            $table->text('pertinentFind3')->nullable();
            $table->text('pertinentFind4')->nullable();
            $table->text('pertinentFind5')->nullable();
            $table->text('pertinentFind6')->nullable();
            $table->text('pertinentFind7')->nullable();
            $table->text('pertinentFind8')->nullable();
            $table->text('pertinentFind9')->nullable();
            $table->text('pertinentFind10')->nullable();
            $table->text('pertinentFindCVS')->nullable();
            $table->text('pertinentFindGU')->nullable();
            $table->text('admittingImpression')->nullable();
            $table->text('plans')->nullable();
            $table->string('createdBy')->nullable();
            $table->string('motorshoulderflex')->nullable();
            $table->string('motorshoulderexte')->nullable();
            $table->string('motorshoulderabdu')->nullable();
            $table->string('motorelbowflex')->nullable();
            $table->string('motorelbowexte')->nullable();
            $table->string('motorhandgrip')->nullable();
            $table->string('motorhipflex')->nullable();
            $table->string('motorhipexte')->nullable();
            $table->string('motorkneeflex')->nullable();
            $table->string('motorkneeexte')->nullable();
            $table->string('sensoryshoulderarm')->nullable();
            $table->string('sensoryshoulderfore')->nullable();
            $table->string('sensoryshoulderhand')->nullable();
            $table->string('sensoryhipthigh')->nullable();
            $table->string('sensoryhipleg')->nullable();
            $table->string('sensoryhipfoot')->nullable();
            $table->string('motorshoulderflex1')->nullable();
            $table->string('motorshoulderexte1')->nullable();
            $table->string('motorshoulderabdu1')->nullable();
            $table->string('motorelbowflex1')->nullable();
            $table->string('motorelbowexte1')->nullable();
            $table->string('motorhandgrip1')->nullable();
            $table->string('motorhipflex1')->nullable();
            $table->string('motorhipexte1')->nullable();
            $table->string('motorkneeflex1')->nullable();
            $table->string('motorkneeexte1')->nullable();
            $table->string('sensoryshoulderarm1')->nullable();
            $table->string('sensoryshoulderfore1')->nullable();
            $table->string('sensoryshoulderhand1')->nullable();
            $table->string('sensoryhipthigh1')->nullable();
            $table->string('sensoryhipleg1')->nullable();
            $table->string('sensoryhipfoot1')->nullable();
            $table->string('remarksfamily')->nullable();
            $table->string('remarksmedical')->nullable();
            $table->string('remarkssurgical')->nullable();
            $table->string('remarksneuro')->nullable();
            $table->string('remakcns')->nullable();
            $table->string('bmi')->nullable();
            $table->string('sensoryshoulderhigh')->nullable();
            $table->string('sensoryshoulderhigh1')->nullable();
            $table->string('gynelmp')->nullable();
            $table->string('gynegen')->nullable();
            $table->string('gynepen')->nullable();
            $table->string('gynefour')->nullable();
            $table->string('gyneremark')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('admittinghistory');
    }
}
