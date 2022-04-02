<?php

use Illuminate\Database\Seeder;
use App\Survey;

class SurveyTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Survey::create(['SURVEY_NAME' => "テスト調査", 'TERM' => "2022年4月～6月", 'ERA' => "10代～20代", 'SEX' => "男性", 'SPORT' => "陸上競技", 'REGISTER_DATE' => date("Y-m-d H:i:s"), 'REGISTER_USER_ID' => 111111, 'UPDATE_DATE' => date("Y-m-d H:i:s"), 'UPDATE_USER_ID' => 111111]);
    }
}
