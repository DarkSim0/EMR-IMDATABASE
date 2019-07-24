<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdmittingHistory extends Model
{
   
    protected $table = 'admittinghistory';

    protected $primaryKey = 'id';

    public function Admission()
    {
    	return $this->belongsTo('App\Admission','id');
    }

    public function consult()
    {
    	return $this->belongsTo('App\Consultant','id');
    }
}
