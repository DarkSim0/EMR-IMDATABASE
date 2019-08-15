<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Redirect;

use Session;

use DB;

use App\Admission;

use App\AdmittingHistory;

use App\Consultant;

use App\Tbmaster;

use Carbon\Carbon;

use App\UserRights;

use App\TransType;

use App\ProgressNotes;

use App\Transaction;

use Mockery\Exception;

class ProgressnotesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
      
    }
   
    // public function getSlug($link)
    // {
    //          $res = TransType::where('TransLink','=',$link)->first();

    //          return view('prognote.single',compact('res'));
    // }

    public function index($id){
       
        return view('progressnotes.index');
    }

    public function store(Request $req)
    {
  
         $prognote   = array(
            'Healthnum' => $req->Healthnum,
            'Idnum' => $req->Idnum,
            'Subjective' => $req->Subjective,
            'Objectives' => $req->Objectives,
            'Assessment' => $req->Assessment,
            'Plans' => $req->Plans,
            'Orders' => $req->Orders,
            'PxOutcome' => $req->PxOutcome

        );
        $transac = array(
            'TransType' => $req->TransType,
            'TransTypeName' => "PROGRESS NOTES",
            'EncodedBy' => $req->EncodedBy,
            'Healthno' => $req->Healthno,
            'Status' => $req->Status
           
        );
        Transaction::create($transac);
        ProgressNotes::create($prognote);        

    }

}
