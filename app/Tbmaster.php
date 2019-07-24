<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tbmaster extends Model
{
    //
    protected $connection = 'sqlsrv';

    protected $table = 'tbmaster';

    protected $primaryKey = 'HospNum';

     public function scopePatient($query, $search)
    {
        return $query->where('FirstName','LIKE', $search.'%')
                    ->orWhere('LastName', 'LIKE', $search.'%')
                    ->orWhere('HospNum','LIKE', $search.'%');              
    }
}
