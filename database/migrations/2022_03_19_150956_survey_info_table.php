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
            $table->increments('survey_id')->comment('調査ID');
            $table->string('survey_name')->comment('調査名');
            //メモ：調査対象期間と年代ってテキストであってる？
            $table->string('term')->comment('調査対象期間');
            $table->string('era')->comment('年代');
            $table->string('sex')->comment('性別');
            $table->string('sport')->comment('競技');
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
        Schema::dropIfExists('survey_info');
    }
}
