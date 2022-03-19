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
            $table->integer('meal_id')->unique()->comment('食事記録ID');
            $table->integer('photo_num')->unique()->comment('写真番号');
            $table->string('photo_path')->comment('写真パス');
            $table->string('order_num')->comment('表示順');
            $table->timestamp('register_date')->comment('登録日時');
            $table->integer('register_user_id')->comment('登録ユーザーID');
            $table->timestamp('update_date')->comment('更新日時');
            $table->integer('update_user_id')->comment('更新ユーザーID');
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