<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookcarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookcar', function (Blueprint $table) {
            $table->integer('car_id');
            $table->integer('cust_id');
            $table->date('pick_date');
            $table->date('drop_date');
            $table->tinyInteger('is_active')->default(1);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookcar');
    }
    public function editSlider(Request $req,$id){     
        
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
