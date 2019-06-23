<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Etudiant;
use App\Intervention;
use App\Filiere;

class Classe extends Model
{
    //
     public function etudiant(){

    	return $this->hasMany('Etudiant');
    }

    public function intervention(){

    	return $this->hasMany('Intervention');
    }

    public function filiere(){

    	return $this->hasMany('Filiere');
    }

}
