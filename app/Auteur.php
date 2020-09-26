<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auteur extends Model
{
    protected $guarded=[];
    public function documents(){
    return $this->belongsTo('App\Document');
}

}
