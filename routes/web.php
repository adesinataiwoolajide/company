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

Route::get("/", "WebsiteController@index")->name("website.index");
Route::get("/aboutus", "WebsiteController@aboutus")->name("website.aboutus");
Route::get("/ourteam", "WebsiteController@team")->name("website.team");
Route::get("/services", "WebsiteController@services")->name("website.service");
Route::get("/products", "WebsiteController@products")->name("website.product");
Route::get("/contactus", "WebsiteController@contact")->name("website.contact");



// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['verify' => true]);

Route::group(["prefix" => "administrator", "middleware" => "verified"], function(){

    Route::get("/dashboard", "AdministratorController@index")->name("administrator.dashboard");

    Route::group(["prefix" => "users"], function(){
        Route::get("/index", "UserController@index")->name("user.create");
        Route::post("/save", "UserController@store")->name("user.save");
        Route::get("/edit/{user_id}", "UserController@edit")->name("user.edit");
        Route::get("/delete/{user_id}", "UserController@destroy")->name("user.delete");
        Route::post("/update/{user_id}", "UserController@update")->name("user.update");
        Route::get("/recyclebin", "UserController@bin")->name("user.restore");
        Route::get("/restore/{user_id}", "UserController@restore")->name("user.undelete");
        Route::get("/change_password", "UserController@resetpassword")->name("change.pasword");
        Route::post("/update_password/{user_id}", "UserController@updatepassword")->name("update.password");
        Route::get("/profile", "UserController@profile")->name("user.profile");
        Route::post("/update_profile/{user_id}", "UserController@updateprofile")->name("profile.update");
    });




});
