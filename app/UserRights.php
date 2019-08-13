<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRights extends Model
{
    protected $primaryKey = 'department';

    protected $table = 'user_rights';

    public function trans()
    {
        return $this->hasMany('App\TransType'.'department');
    }

}
