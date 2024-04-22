<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'pcustomer_id',
        'images'
    ];

    public function getUser(){
        return $this->hasOne('App\Models\User','id','user_id');
    } 

    public function getImages(){
        return $this->hasOne('App\Models\ProfileImage','user_id','user_id');
    } 
    public function getReligion(){
        return $this->hasOne('App\Models\Religion','id','religion');
    }  


    
}



