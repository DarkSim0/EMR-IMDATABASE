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
        catch(\Exception $e)
        {
            dd($e);
        } 
         

        $service = UserRights::where('Uname','=',$uname)->Where('Clinic','=','IM')->get();
        foreach($service as $se)
        {
            if($se->Clinic == 'IM')
            {
                $patient = Admission::find($id);
                return view('intermed.index',compact('patient'));
            }
            else{
                return view('errors.504');
            }
        }     
    }
}
