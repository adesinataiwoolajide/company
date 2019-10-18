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

Route::get('/empire_login', function () {
    return view('auth.login')->with('error', 'Please Login with Your Details');
});

Route::post("/user_login", "AdministratorController@userlogin")->name("admin.login");
Route::get("/logout", "AdministratorController@logout")->name("admin.logout");
Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetFor');


Route::get("/", "WebsiteController@index")->name("website.index");
Route::get("/aboutus", "WebsiteController@aboutus")->name("website.aboutus");
Route::get("/ourteam", "WebsiteController@team")->name("website.team");
Route::get("/services", "WebsiteController@services")->name("website.service");
Route::get("/products", "WebsiteController@products")->name("website.product");
Route::get("/contactus", "WebsiteController@contact")->name("website.contact");

Auth::routes(['verify' => true]);

Route::group(["prefix" => "administrator", "middleware" => "verified"], function(){

    Route::group(['middleware' => ['role:Administrator|Admin|Secretary']], function () {

        Route::get("/dashboard", "AdministratorController@index")->name("administrator.dashboard");

        Route::group(["prefix" => "users"], function(){
            Route::get("/", "UserController@index")->name("user.create");
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

        Route::group(["prefix" => "project_types"], function(){
            Route::get("/", "ProjectTypesController@index")->name("project.type.create");
            Route::post("/save", "ProjectTypesController@store")->name("project.type.save");
            Route::get("/edit/{type_id}", "ProjectTypesController@edit")->name("project.type.edit");
            Route::get("/delete/{type_id}", "ProjectTypesController@destroy")->name("project.type.delete");
            Route::post("/update/{type_id}", "ProjectTypesController@update")->name("project.type.update");
            Route::get("/recyclebin", "ProjectTypesController@bin")->name("project.type.restore");
            Route::get("/restore/{type_id}", "ProjectTypesController@restore")->name("project.type.undelete");

        });

        Route::group(["prefix" => "project_categories"], function(){
            Route::get("/", "ProjectCategoryController@index")->name("project.category.create");
            Route::post("/save", "ProjectCategoryController@store")->name("project.category.save");
            Route::get("/edit/{type_id}", "ProjectCategoryController@edit")->name("project.category.edit");
            Route::get("/delete/{type_id}", "ProjectCategoryController@destroy")->name("project.category.delete");
            Route::post("/update/{type_id}", "ProjectCategoryController@update")->name("project.category.update");
            Route::get("/recyclebin", "ProjectCategoryController@bin")->name("project.category.restore");
            Route::get("/restore/{type_id}", "ProjectCategoryController@restore")->name("project.category.undelete");

        });


    });

});
