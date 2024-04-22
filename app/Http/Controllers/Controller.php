<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Users\Profile;
use App\Models\Users\MatchMaking;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function getProfileByUser($id){
        $profile = Profile::where('user_id',$id)->first();
        return $profile;
    }

    public function getPrefferenceByCustomeId($id){
        $profile = MatchMaking::where('mcustomer_id',$id)->first();
        return $profile;
    }
}
