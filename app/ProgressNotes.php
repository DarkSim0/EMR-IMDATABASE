<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgressNotes extends Model
{
    protected $primaryKey = 'TransNo';
    protected $table = 'progress_notes';
    protected $fillable = [
        'Healthnum',
        'Idnum',
        'Subjective',
        'Objectives',
        'Assessment',
        'Plans',
        'Orders',
        'PxOutcome',
    ];
    public function transaction(){
        return $this->hasMany('App\Transaction');
    }
}
