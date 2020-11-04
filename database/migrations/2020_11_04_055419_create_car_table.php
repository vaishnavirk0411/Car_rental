<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car', function (Blueprint $table) {
             $table->bigIncrements('car_id')->autoIncrement();
             $table->string('car_unique_id',255);
             $table->string('car_name',255);
             $table->string('plate_no');
             $table->int('seat_no');
             $table->int('price_km');
             $table->string('model_name');
             $table->string('transmission');
             $table->string('fuel');
             $table->mediumText('car_image')->nullable();
             $table->string('description');
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
        Schema::dropIfExists('car');
    }
}
