<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('main.main');
// });

Route::get('program/{id}','SimpleController@showProgram');
Route::get('programs','SimpleController@showPrograms');
Route::get('college/{id}','SimpleController@showCollegeInfo');
Route::get('students','SimpleController@showStudents');
Route::get('student/{id}','SimpleController@showStudent');