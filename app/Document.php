<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable=[
        'titre',''
    ];
    public function users(){
    return $this->belongsToMany('App\User');
}

public function auteurs(){
return $this->hasMany('App\Auteur');
}



}
