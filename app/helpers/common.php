<?php
use Illuminate\Support\Facades\DB;

function prx($arr){
    echo "<pre>";
    print_r($arr);
    die();

}

function relations($gender, $profile_for)
{
    $val = "";
    if($gender === 'Male') 
    {
    if($profile_for === 'Parent') {
        $val = "son";
    } elseif ($profile_for === 'Friend') {
        $val = "friend";
    } elseif ($profile_for === 'Brother') {
        $val = 'brother';
    } elseif ($profile_for === 'Sister') {
        $val = "brother";
    } elseif ($profile_for === 'Myself') {
        $val = "myself";
    }
    } 
    else 
    {
    if($profile_for === "Parent") {
        $val = "daughter";
    } elseif ($profile_for === "Friend") {
        $val = "friend";
    } elseif ($profile_for === "Brother") {
        $val = "sister";
    } elseif ($profile_for === 'Sister') {
        $val = "sister";
    } elseif ($profile_for === "Myself") {
        $val = "myself";
    }
    }

    return $val;
    }

    function selfs($gender)
    {
    $eval = "";
    if($gender === "Male") {
    $eval = "He";
    } 
    elseif ($gender === "Female") {        
    $eval = "She";
    } 
    elseif ($gender === "Myself") {
    $eval = "Myself";
    } 
    else 
    { 
    $eval = "unknown";
    }
    return $eval;
    }



?>