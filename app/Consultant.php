<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
    //
    protected $table = 'consultants';

    public function Admission()
    {
    	$this->hasOne('App\AdmittingHistory');
    }

}
