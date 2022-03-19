<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserSurveyMappingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_survey_mapping',function(Blueprint $table) {
            $table->increments('u_p_map_id')->comment('ユーザー調査マッピングID');
            $table->integer('user_id')->unique()->comment('ユーザーID');
            $table->integer('survey_id')->unique()->comment('調査ID');
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
        Schema::dropIfExists('user_survey_mapping');
    }
}
