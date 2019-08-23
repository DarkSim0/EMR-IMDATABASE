<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdmittingHistory extends Model
{
   
    protected $table = 'admittinghistory';

    protected $fillable = [
        'admittingHistoryNo',
        'attendingPhysician',
        'dateAdmit',
        'chiefComplaint',
        'historyPresentIllness',
        'pastMedicalHistory',
        'pastMedicalHistoryOther',
        'pastSurgicalHistory',
        'pastSurgicalHistoryOther',
        'personalAndSocialHistory',
        'personalAndSocialHistoryOther',
        'familyHistory',
        'familyHistoryOther',
        'systemsReview',
        'bp',
        'rr',
        'hr',
        'te',
        'peGenSurvey',
        'peDetails',
        'peFindings',
        'pertinentFind1',
        'pertinentFind2',
        'pertinentFind3',
        'pertinentFind4',
        'pertinentFind5',
        'pertinentFind6',
        'pertinentFind7',
        'pertinentFind8',
        'pertinentFind9',
        'pertinentFind10',
        'pertinentFindCVS',
        'pertinentFindGU',
        'admittingImpression',
        'plans',
        'createdBy',
        //left
        'motorshoulderflex',
        'motorshoulderexte',
        'motorshoulderabdu',
        'motorelbowflex',
        'motorelbowexte',
        'motorhandgrip',
        'motorhipflex',
        'motorhipexte',
        'motorkneeflex',
        'motorkneeexte',
        'sensoryshoulderarm',
        'sensoryshoulderfore',
        'sensoryshoulderhand',
        'sensoryhipthigh',
        'sensoryhipleg',
        'sensoryhipfoot',
        'sensoryshoulderhigh',
        //right
        'motorshoulderflex1',
        'motorshoulderexte1',
        'motorshoulderabdu1',
        'motorelbowflex1',
        'motorelbowexte1',
        'motorhandgrip1',
        'motorhipflex1',
        'motorhipexte1',
        'motorkneeflex1',
        'motorkneeexte1',
        'sensoryshoulderarm1',
        'sensoryshoulderfore1',
        'sensoryshoulderhand1',
        'sensoryhipthigh1',
        'sensoryhipleg1',
        'sensoryhipfoot1',
        'sensoryshoulderhigh1',
        //remarks
        'remarksfamily',
        'remarksmedical',
        'remarkssurgical',
        'remarksneuro',
        'remarkscns',
        'bmi',
        //gyne
        'gynelmp',
        'gynegen',
        'gynepen',
        'gynefour',
        'gyneremark',
    ];

    public function Admission()
    {
    	return $this->belongsTo('App\Admission');
    }

    public function consult()
    {
    	return $this->belongsTo('App\Consultant');
    }
}
