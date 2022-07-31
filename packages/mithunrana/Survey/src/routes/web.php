<?php

$namespace = 'Survey\Http\Controllers';

Route::group(

    [
        'namespace' => $namespace,
        'prefix' => 'audit',
        'middleware' => 'web',
    ],

    function (){
            Route::get('/','SurveyController@index');
            Route::get('add','SurveyController@surveyAdd')->name('survey-add');
            Route::post('add','SurveyController@surveyStore')->name('save-survey');
            Route::get('view/{audit}','SurveyController@view')->name('view-survey');
        }
    );