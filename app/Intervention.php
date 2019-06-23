<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Intervenant;
use App\Classe;
use App\Salle;

class Intervention extends Model
{
    //
    public function intervenant(){

    	return $this->hasOne('Intervenant');
    }
    public function classe(){

    	return $this->hasOne('Classe');
    }
    public function salle(){

    	return $this->hasOne('Salle');
    }
}
