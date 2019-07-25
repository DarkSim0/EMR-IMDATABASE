<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class TransType extends Model
{
    protected $primaryKey = 'Clinic';
    public function userr()
    {   
       
        return $this->belongsTo('App\UserRights','Clinic');
    }

}
