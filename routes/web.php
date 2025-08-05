<?php

use App\Livewire\Course;
use App\Livewire\Courses;
use App\Livewire\CreateCourse;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function(){
//     return view('welcome');
// });


Route::get('/courses', Courses::class)->name('courses');
Route::get('/courses/create', CreateCourse::class)->name('courses.create');
Route::get('/courses/show/{course}', Course::class)->name('courses.show');
Route::get('test', function(){
    return 'a';
})->name('my.test');
