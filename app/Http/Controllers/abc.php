<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class abc extends Controller
{
    function firstmethod()
    {
        echo "hello good night !!!";
    }
    
    function addmethod($a,$b)
    {
        echo $a+$b;
    }
    function submethod($a,$b)
    {
        echo $a-$b;
    }
    function mulmethod($a,$b)
    {
        echo $a*$b;
    }
    function divmethod($a,$b)
    {
        echo $a/$b;
    }
}


