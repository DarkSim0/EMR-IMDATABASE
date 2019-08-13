<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class TransType extends Model
{
    protected $primaryKey = 'Clinic';
    
    protected $table = 'trans_types';

    public function userr()
    {   
       
        return $this->belongsTo('App\UserRights','Clinic');
    }

}
