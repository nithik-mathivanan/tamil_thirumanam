<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class States extends Model
{
    use HasFactory;
      protected $table = 'states';
      protected $primaryKey = 'id';

      public function getCountry(){
        return $this->hasOne('App\Models\Countries','id','country_id');
      }
}
