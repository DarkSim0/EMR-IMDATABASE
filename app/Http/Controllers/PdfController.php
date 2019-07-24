<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Session;

use PDF;

use App\AdmittingHistory;

use App\Admission;

class PdfController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
	{
		$demo = Admission::find($id);

		$row = AdmittingHistory::find($id);

		$remark = explode("/",$row->remarksmedical);
		$remark1 = explode("/",$row->remarkssurgical);
		$remark2 = explode("/",$row->gyneremark);
		$remark3 = explode("/",$row->remakcns);
		$remark4 = explode("/",$row->remarksfamily);
		$check1 = explode("/",$row->pastMedicalHistory);
		$check2 = explode("/",$row->pastSurgicalHistory);
		$check3 = explode("/",$row->personalAndSocialHistory);
		$check4 = explode("/",$row->familyHistory);
		$check5 = explode("/",$row->systemsReview);
        $check6 = explode("/",$row->peGenSurvey);
        $check7 = explode("/",$row->peFindings);

    	$pdf = PDF::loadView('pdf.print',compact(
    		'row',
    		'demo',
    		'remark',
    		'remark1',
    		'remark2',
    		'remark3',
    		'remark4',
    		'check1',
    		'check2',
    		'check3',
    		'check4',
    		'check5',
            'check6',
            'check7'
    	));

    	return $pdf->stream('admittinghistory.pdf');
    
	}
	    	
}
