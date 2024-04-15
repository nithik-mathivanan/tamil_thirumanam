<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class Community extends Model
{
    use HasFactory;

      protected $table = 'community';
      protected $primaryKey = 'id';

        public function GetReligion(){
        return $this->hasOne('App\Models\Religion','id','religion');
        }  
}
