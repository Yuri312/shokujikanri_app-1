<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MealPhotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meal_photo',function(Blueprint $table) {
            $table->integer('meal_id')->unique();
            $table->integer('photo_num')->unique();
            $table->string('photo_path');
            $table->string('order_num');
            $table->dateTime('register_date');
            $table->integer('register_user_id');
            $table->dateTime('update_date');
            $table->integer('update_user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meal_photo');
    }
}