<?php

namespace App\Http\Controllers;
use \Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function list(){
        $carList = Car::select('*')->get();
        return view('admin.car',["carList"=> $carList]);
    } 
   
    public function getCarList(Request $req){
        $carList = Car::select('car_id as Id','car_name as carname','car_unique_id')->get();
 
                return response()->json(
             array(
                "status"=>true,
                "data"=> $carList
             )
          );
     }

     public function addcar(Request $req){     
        
    	$car = new Car;
    	$car->car_name = $req->car_name;
    	$car->plate_no = $req->plateno;
       	$car->seat_no = $req->seatno;
        $car->description = $req->desc; 
        $car->price_km = $req->price;
        $car->model_name = $req->modelno;
        $car->transmission = $req->transmission;
        $car->fuel = $req->fuel;

        if($req->hasfile('myfile')){
            $file = $req->file('myfile');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('img/carimg/',$filename);
            $car->car_image=$filename;
        }
      
        $car->car_unique_id = (string) Str::uuid();
    	$car->save();
	  return redirect()->route('car');   	    
    }
    
    public function editCar(Request $req,$id){     
        
        $car =Car::find($req->id);  
       $car->car_name = $req->car_name;
       $car->plate_no = $req->plateno;
          $car->seat_no = $req->seatno;
       $car->description = $req->desc; 
       $car->price_km = $req->price;
       $car->model_name = $req->modelno;
       $car->transmission = $req->transmission;
       $car->fuel = $req->fuel;

       if($req->hasfile('myfile')){
           $file = $req->file('myfile');
           $extension = $file->getClientOriginalExtension();
           $filename = time() . '.' . $extension;
           $file->move('img/carimg/',$filename);
           $car->car_image=$filename;
       }
     
  
       $car->save();
     return redirect()->route('car');   	    
   }
}
