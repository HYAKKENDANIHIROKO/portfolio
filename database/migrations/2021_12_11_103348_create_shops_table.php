<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('shop_name');
            $table->string('price');
            $table->string('image');
            $table->string('seat');
            $table->string('menu');
            $table->string('address');
            $table->string('user_id');
            $table->string('tel');
            $table->string('opening_hours');
            $table->string('transportation');
            $table->string('pay');
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
        Schema::dropIfExists('shops');
    }
}
