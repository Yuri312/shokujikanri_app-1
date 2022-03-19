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
            $table->integer('u_p_map_id')->unique();
            $table->integer('user_id')->unique();
            $table->integer('survey_id')->unique();
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
        Schema::dropIfExists('user_survey_mapping');
    }
}
