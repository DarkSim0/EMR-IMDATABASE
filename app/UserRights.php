<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRights extends Model
{
    protected $primaryKey = 'department';
    public function trans()
    {
        return $this->hasMany('App\TransType'.'department');
    }

}
