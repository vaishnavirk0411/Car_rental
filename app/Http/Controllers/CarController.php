<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function list()
    {
    	
    	$carList = Car::select('*')->get();
    	 return view('admin.car',["carList"=> $carList]);
    
    }
}
