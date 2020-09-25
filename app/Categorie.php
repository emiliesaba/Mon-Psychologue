<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $guarded=[];
    public function users(){
    return $this->belongsToMany('App\User');
}

}
