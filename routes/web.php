<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route; // not included in the application
// found in laravel/framework --> on github
// Most packages found on github.
//


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

// callback function
// higher order function--> function accepts function or return a function
Route::get('/hello', function () {
    return "Hello Page";
});

//Route::get('/posts', function () {
//    $post="First post";
//    $posts=[
//        ['id'=>1,"title"=>"Laravel","posted_by"=>"Noha","created_at"=>"2021-03-27"],
//        ['id'=>2,"title"=>"Ruby","posted_by"=>"Noha","created_at"=>"2021-03-27"],
//        ['id'=>3,"title"=>"Scala","posted_by"=>"Noha","created_at"=>"2021-03-27"],
//        ['id'=>4,"title"=>"Python","posted_by"=>"Noha","created_at"=>"2021-03-27"],
//    ];
//    return view("posts",compact("posts"));
//});
// ::class magic constant --> return with class and its namespace (string)
Route::get("/posts",[PostController::class,"index"])->name("posts"); // from laravel 8
Route::get("/posts/create",[PostController::class,"create"])->name("posts.create"); //
// where to put the routes ...
Route::post("/posts",[PostController::class,"store"])->name("posts.store");
Route::get("/posts/{post}",[PostController::class,"show"])->name("posts.show");
Route::get("/posts/{post}/edit",[PostController::class,"edit"])->name("posts.edit");
Route::put("/posts/{post}/",[PostController::class,"edit"])->name("posts.update");
Route::delete("/posts/{post}",[PostController::class,"edit"])->name("posts.destroy");

