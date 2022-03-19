<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SurveyInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_info',function(Blueprint $table) {
            $table->integer('survey_id')->unique();
            $table->string('survey_name');
            //メモ：調査対象期間と年代ってテキストであってる？
            $table->string('term');
            $table->string('era');
            $table->string('sex');
            $table->string('sport');
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
        Schema::dropIfExists('survey_info');
    }
}
