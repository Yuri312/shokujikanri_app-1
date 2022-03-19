<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MealRecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meal_record',function(Blueprint $table) {
            $table->integer('meal_id')->unique();
            $table->integer('user_id');
            $table->integer('meal_type'); // 1:朝食、2:昼食、3:間食、4:夕食、5:夜食
            $table->date('eat_date');
            $table->time('eat_time');
            $table->string('memo');
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
        Schema::dropIfExists('meal_record');
    }
}
