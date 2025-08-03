<?php

use App\Livewire\CreateCourse;
use App\Livewire\ShowCourses;
use Illuminate\Support\Facades\Route;

//Route::get('/courses' , Courses::class)->name('courses');
//Route::get('/courses/{id}', Courses::class);
Route::post('courses/create', CreateCourse::class);

Route::get('/', function(){
    return view('welcome');
});


