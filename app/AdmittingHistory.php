<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdmittingHistory extends Model
{
   
    protected $table = 'admittinghistory';

    public function Admission()
    {
    	return $this->belongsTo('App\Admission');
    }

    public function consult()
    {
    	return $this->belongsTo('App\Consultant');
    }
}
