<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\About;
use App\Livewire\Admin\CategoryManager;
use App\Livewire\Admin\PostManager;
use App\Livewire\Blog\CategoryShow;
use App\Livewire\Blog\Index;
use App\Livewire\Blog\PostShow;
use App\Livewire\Contact;
use App\Livewire\Courses;
use App\Livewire\Dashboard;
use App\Livewire\EditProfile;
use App\Livewire\Product;
use App\Livewire\Tasks;
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
//
//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('',Index::class)->name('home');
Route::get('/post/{id}',PostShow::class)->name('post.show');
Route::get('/category/{id}',CategoryShow::class)->name('category.show');

Route::get('/admin/categories' , CategoryManager::class)->name('admin.categories');
Route::get('/admin/posts' , PostManager::class)->name('admin.posts');


//Route::get('/' , Dashboard::class)->name('dashboard');
//Route::get('tasks', Tasks::class)->name('tasks');
//Route::get('about' , About::class)->name('about');
//
//Route::get('courses',Courses::class)->name('courses');
//
//Route::get('edit',EditProfile::class)->name('edit');
//
//Route::get('products/{product}',Product::class)->name('products');
//

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

require __DIR__.'/auth.php';
