<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Survey;

class SurveyController extends Controller
{
    function index(){
    #Surveyに入っているデータを全部取得
    $surveys = Survey::all();
    return view("surveys.index", compact("surveys"));
    }
}
