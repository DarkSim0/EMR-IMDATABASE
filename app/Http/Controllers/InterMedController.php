<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Redirect;

use Session;

use DB;

use Validator;

use App\Admission;

use App\AdmittingHistory;

use App\Consultant;

use App\Tbmaster;

use Carbon\Carbon;

use App\UserRights;

use App\TransType;

use App\Transaction;

use App\ProgressNotes;


use Auth;



use Illuminate\Support\Facades\Response;
use Mockery\Exception;

class InterMedController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {   
        try
        {
            $uname = Auth::user()->uname;
        }
        catch(Exception $e)
        {
            dd($e);
        } 
         

        $service = UserRights::where('Uname','=',$uname)->Where('Clinic','=','IM')->get();
        foreach($service as $se)
        {
            if($se->Clinic == 'IM')
            {
                $notes = DB::table('progress_notes')->where('Healthnum', '=' , $id )->get();
                $patient = Admission::find($id);
                return view('intermed.index',compact('patient','notes'));
            }
            else{
                return view('errors.504');
            }
        }     
    }

    public function admittingHistory($id)
    {

        $patient = Admission::find($id);

        $consultants = Consultant::orderBy('lname','asc')->get();
        
        return view('intermed.admittinghistory.create',compact('patient','consultants'));
    }

    public function storeAdmit(Request $req)
    {
        


        $admit = new AdmittingHistory;
        $admit->attendingPhysician = $req->attendingPhysician;
        $admit->attendingPhysicianOther=$req->attendingPhysicianOther;
        $admit->admittingHistoryNo = $req->admittingHistoryNo;
        $admit->dateAdmit = $req->dateAdmit;
        $admit->chiefComplaint = $req->chiefComplaint;
        $admit->historyPresentIllness = $req->historyPresentIllness ;
        $admit->pastMedicalHistory = implode("/",(array)$req->pastMedicalHistory);
        $admit->pastMedicalHistoryOther = $req->pastMedicalHistoryOther;
        $admit->personalAndSocialHistory = implode("/",(array)$req->personalAndSocialHistory);
        $admit->personalAndSocialHistoryOther = $req->personalAndSocialHistoryOther;
        $admit->familyHistory = implode("/", (array)$req->familyHistory);
        $admit->familyHistoryOther = $req->familyHistoryOther;
        $admit->pastSurgicalHistory = implode("/", (array)$req->pastSurgicalHistory);
        $admit->pastSurgicalHistoryOther = $req->pastSurgicalHistoryOther;
        $admit->systemsReview = implode("/", (array)$req->systemsReview);
        $admit->bp = $req->bp;
        $admit->rr = $req->rr;
        $admit->hr = $req->hr;
        $admit->te = $req->te;
        $admit->bmi = $req->bmi;
        $admit->peGenSurvey = implode("/",(array)$req->peGenSurvey);
        $admit->peFindings = implode("/",(array)$req->peFindings);
        $admit->pertinentFind1 = $req->pertinentFind1;
        $admit->pertinentFind2 = $req->pertinentFind2;
        $admit->pertinentFind3 = $req->pertinentFind3;
        $admit->pertinentFind4 = $req->pertinentFind4;
        $admit->pertinentFind5 = $req->pertinentFind5;
        $admit->pertinentFind6 = $req->pertinentFind6;
        $admit->pertinentFind7 = $req->pertinentFind7;
        $admit->pertinentFind8 = $req->pertinentFind8;
        $admit->pertinentFind9 = $req->pertinentFind9;
        $admit->pertinentFindCVS = $req->pertinentFindCVS;
        $admit->pertinentFindGU = $req->pertinentFindGU; 
        //motor R
        $admit->motorshoulderflex = $req->motorshoulderflex;
        $admit->motorshoulderexte = $req->motorshoulderexte;
        $admit->motorshoulderabdu = $req->motorshoulderabdu;
        $admit->motorelbowflex = $req->motorelbowflex;
        $admit->motorelbowexte = $req->motorelbowexte;
        $admit->motorhandgrip = $req->motorhandgrip;
        $admit->motorhipflex = $req->motorhipflex;
        $admit->motorhipexte = $req->motorhipexte;
        $admit->motorkneeflex = $req->motorkneeflex;
        $admit->motorkneeexte = $req->motorkneeexte;
        //sensory R
        $admit->sensoryshoulderarm = $req->sensoryshoulderarm;
        $admit->sensoryshoulderfore = $req->sensoryshoulderfore;
        $admit->sensoryshoulderhand = $req->sensoryshoulderhand;
        $admit->sensoryshoulderhigh = $req->sensoryshoulderhigh;
        $admit->sensoryhipthigh = $req->sensoryhipthigh;
        $admit->sensoryhipleg = $req->sensoryhipleg;
        $admit->sensoryhipfoot = $req->sensoryhipfoot;
        //motor L
        $admit->motorshoulderflex1 = $req->motorshoulderflex1;
        $admit->motorshoulderexte1 = $req->motorshoulderexte1;
        $admit->motorshoulderabdu1 = $req->motorshoulderabdu1;
        $admit->motorelbowflex1 = $req->motorelbowflex1;
        $admit->motorelbowexte1 = $req->motorelbowexte1;
        $admit->motorhandgrip1 = $req->motorhandgrip1;
        $admit->motorhipflex1 = $req->motorhipflex1;
        $admit->motorhipexte1 = $req->motorhipexte1;
        $admit->motorkneeflex1 = $req->motorkneeflex1;
        $admit->motorkneeexte1 = $req->motorkneeexte1;
        //sensory L
        $admit->sensoryshoulderarm1 = $req->sensoryshoulderarm1;
        $admit->sensoryshoulderfore1 = $req->sensoryshoulderfore1;
        $admit->sensoryshoulderhand1 = $req->sensoryshoulderhand1;
        $admit->sensoryshoulderhigh1 = $req->sensoryshoulderhigh1;
        $admit->sensoryhipthigh1 = $req->sensoryhipthigh1;
        $admit->sensoryhipleg1 = $req->sensoryhipleg1;
        $admit->sensoryhipfoot1 = $req->sensoryhipfoot1;

        $admit->remarksfamily = implode("/", (array)$req->remarksfamily);
        $admit->remarkssurgical = implode("/",(array)$req->remarkssurgical);
        $admit->remakcns = implode("/", (array)$req->remakcns);
        $admit->remarksmedical = implode("/", (array)$req->remarksmedical);
        //gyne
        $admit->gyneremark = implode("/", (array)$req->gyneremark);
        $admit->gynelmp = $req->gynelmp;
        $admit->gynegen = $req->gynegen;
        $admit->gynepen = $req->gynepen;
        $admit->gynefour = $req->gynefour;
       
        $admit->admittingImpression = $req->admittingImpression;
        $admit->plans = $req->plans;
        $admit->createdBy = $req->createdBy;

        $admit->save();

        $transac = array(
            'TransType' => "1",
            'TransTypeName' => "ADMITTING HISTORY",
            'EncodedBy' => $req->EncodedBy,
            'Healthno' => $req->Healthno,
            'Status' => $req->Status
        );
        Transaction::create($transac);

        Session::flash('success','Admitting History Successfully Saved');

        return Redirect::back();

    }
}
