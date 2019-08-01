<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'TransType',
        'TransTypeName',
        'EncodedBy',
        'Healthno',
        'Status',
    ];
    //Progressnotes
    public function Progressnotes(){
        return $this->belongsTo('App\ProgressNotes');
    }

}
