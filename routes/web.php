<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/**
 * Student resource
 */
# Index page to show all student
Route::get('/student', 'StudentController@index')->name('student.index');

# Show form to create a new Student
Route::get('/student/create', 'StudentController@create')->name('student.create');

# Process the form to create a new Student
Route::post('/student', 'StudentController@store')->name('student.store');

# Show an individual Student
Route::get('/student/{title}', 'StudentController@show')->name('student.show');

# Show form to edit a Student
Route::get('/student/{id}/edit', 'StudentController@edit')->name('student.edit');

# Process form to edit a Student
Route::put('/student/{id}', 'StudentController@update')->name('student.update');

# Get route to confirm deletion of Student
Route::get('/student/{id}/delete', 'StudentController@delete')->name('student.destroy');

# Delete route to actually destroy the Student
Route::delete('/student/{id}', 'StudentController@destroy')->name('student.destroy');

/**
 * School resource
 */
# Index page to show all school
Route::get('/school', 'SchoolController@index')->name('school.index');

# Show form to create a new School
Route::get('/school/create', 'SchoolController@create')->name('school.create');

# Process the form to create a new School
Route::post('/school', 'SchoolController@store')->name('school.store');

# Show an individual School
Route::get('/school/{title}', 'SchoolController@show')->name('school.show');

# Show form to edit a School
Route::get('/school/{id}/edit', 'SchoolController@edit')->name('school.edit');

# Process form to edit a School
Route::put('/school/{id}', 'SchoolController@update')->name('school.update');

# Get route to confirm deletion of School
Route::get('/school/{id}/delete', 'SchoolController@delete')->name('school.destroy');

# Delete route to actually destroy the School
Route::delete('/school/{id}', 'SchoolController@destroy')->name('school.destroy');
