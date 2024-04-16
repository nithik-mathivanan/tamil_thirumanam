<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    use HasFactory;
    protected $table = 'cities';
    protected $primaryKey = 'id';

    public function getCountry()
    {
        return $this->hasOne('App\Models\Countries','id','country_id');
    }
    public function getState()
    {
        return $this->hasOne('App\Models\States','id','state_id');
    }
}
    