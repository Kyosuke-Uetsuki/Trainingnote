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

Route::get('/', "TrainingsController@index");

Route::get("signup", "Auth\RegisterController@showRegistrationForm")->name("signup.get");
Route::post("signup", "Auth\RegisterController@register")->name("signup.post");

Route::get("login", "Auth\LoginController@showloginForm")->name("login");
Route::post("login", "Auth\LoginController@login")->name("login.post");
Route::get("logout", "Auth\LoginController@logout")->name("logout.get");

Route::group(["middleware" => ["auth"]], function(){
    Route::resource("users", "UsersController");
    Route::resource("trainings", "TrainingsController");
});

Route::group(["middleware" => ["auth"]], function(){
        Route::get("backgraph", "GraphsController@back")->name("back.graph");
        Route::get("shouldergraph", "GraphsController@shoulder")->name("shoulder.graph");
        Route::get("armgraph", "GraphsController@arm")->name("arm.graph");
        Route::get("leggraph", "GraphsController@leg")->name("leg.graph");
        Route::get("chestgraph", "GraphsController@chest")->name("chest.graph");
});

Route::get("ajax/traininggraphs", "Ajax\TrainingGraphController@index");