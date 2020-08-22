<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function calculatefunc(Request $request){

    	$operator= $request->input('operator');
    	$first_num=$request->input('first');
    	$second_num=$request->input('second');
    	

    	/*$result=0;

    	if ($operator=="plus") {
    		$result =$first_num + $second_num;
    	} else if($operator=="minus"){
    		$result =$first_num - $second_num;
    	}

    	else if($operator=="multiply"){
    		$result =$first_num * $second_num;
    	}

    	else if($operator=="divide"){
    		$result =$first_num / $second_num;
    	}
    	else {
    		$result =0;
    	}

    	echo $result;*/


    	$result=($first_num + $second_num)/2;

    	echo "<h1>your $result</h1>";

    }
}
