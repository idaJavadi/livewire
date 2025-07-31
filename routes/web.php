<?php

use App\Livewire\ShowCourses;
use Illuminate\Support\Facades\Route;

Route::get('/courses' , ShowCourses::class);
Route::get('/courses/{id}', ShowCourses::class);
