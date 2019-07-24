<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tbmaster;

use App\Http\Requests;

use DB;

class PatientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function search(Request $request)
    {
    	$search = $request->input('search');

    	//$result = Tbmaster::orderBy('DateCreated','desc')->patient($search)->paginate(100);

        //$result = DB::connection('sqlsrv')->select(DB::raw("select * from HealthCheckup..vwHealthCheckup_PatientSearch where Hospnum = '$search'" ) );
         $result = DB::connection('sqlsrv')->select(DB::raw("select top 100 * from HealthCheckup..vwHealthCheckup_PatientSearch where (Hospnum = '$search' or Pxname like '%$search%') " ) );
    	return view('admission.search',compact('result','search'));
    }

}
