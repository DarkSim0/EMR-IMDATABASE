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

class ProgressnotesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        $patient = Admission::find($id);
        
        return view('progressnotes.index',compact('patient'));
        
    }

    public function store(Request $req)
    {
        $a = new ProgressNotes;
        
    }
}
