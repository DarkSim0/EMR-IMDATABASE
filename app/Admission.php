<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    protected $table = 'admissions';

    protected $primaryKey = 'Healthnum';

    public function AdmitHisto()
    {
        return	$this->hasOne('App\AdmittingHistory','admittingHistoryNo');
    }

     public function scopeSearch($query, $search)
    {
        return $query->where('fname','LIKE', $search.'%')
                    ->orWhere('lname', 'LIKE', $search.'%')
                    ->orWhere('Hospnum','LIKE', $search.'%');              
    }


}
