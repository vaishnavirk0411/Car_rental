<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_master', function (Blueprint $table) {
            $table->bigIncrements('user_id')->autoIncrement();
            $table->string('user_unique_id',255);
            $table->string('user_name',255);
            $table->string('dl_number');
            $table->string('email');
            $table->string('password');

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
        Schema::dropIfExists('users_master');
    }
}
