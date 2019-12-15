<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')
    ->name('home')
    ->middleware('verified');

Route::get('/home/courses/join/{id}', 'CourseController@join_student')
    ->name('course_join')
    ->middleware('verified');

Route::get('/home/courses/information/{id}', 'CourseController@course_information')
    ->name('course_information')
    ->middleware('verified');

Route::resource('/home/courses', 'CourseController')
    ->middleware('verified');
