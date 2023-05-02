<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class datapass extends Controller
{
    function datapassing($fname,$lname){
        $array=['first_name'=>$fname,'last_name'=>$lname];


        $data=compact('array');
        return view('new')->with($data);
    }


}

