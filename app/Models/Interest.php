<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    use HasFactory;
    protected $table = 'interest';
    protected $primaryKey = 'id';

    public function getUser(){
        return $this->hasOne('App\Models\User','id','user_id');
    } 

    public function getProfile(){
        return $this->hasOne('App\Models\Users\Profile','user_id','user_id');
    } 

    public function getUserImg(){
        return $this->hasOne('App\Models\ProfileImage','user_id','user_id');
    }  

    public function interestOn(){
        return $this->hasOne('App\Models\Users\Profile','user_id','interest_on');
    }

     public function TogetUserImg(){
        return $this->hasOne('App\Models\ProfileImage','user_id','interest_on');
    }  
}
