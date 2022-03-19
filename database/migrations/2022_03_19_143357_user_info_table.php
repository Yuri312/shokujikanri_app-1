<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_info',function(Blueprint $table) {
            $table->increment('user_id');
            $table->string('user_name');
            $table->string('email');
            $table->string('password');
            $table->boolean('sex_type');
            $table->integer('height');
            $table->integer('weight');
            $table->integer('fat_percentage');
            $table->string('sport_name');
            $table->string('sport_position');
            $table->integer('auth_type'); // 1:回答者,2:研究者,3:管理者
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
        Schema::dropIfExists('user_info');
    }
}
