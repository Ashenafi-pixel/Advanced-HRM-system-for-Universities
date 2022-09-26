<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    // Route::get('/', function () {
    //     return view('master');
    // });
    
    Route::get('/home', [HomeController::class,'index'])->name('home.index');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', [RegisterController::class,'show'])->name('register.show');
        Route::post('/register', [RegisterController::class,'register'])->name('register');

        /**
         * Login Routes
         */
        Route::get('/login', [LoginController::class,'show'])->name('login.show');
        Route::post('/login', [LoginController::class,'login'])->name('login');

    });

    Route::group(['middleware' => ['auth']], function() {

    //      Route::get('/dashboard', function () {
    //     return view('master');
    // });
    Route::get('/', [DashboardController::class,'index'])->name('dashboard');

        /**
         * Logout Routes
         */
        Route::get('/logout', [LogoutController::class,'perform'])->name('logout');

        /**
         * User Routes
         */
        Route::group(['prefix' => 'users'], function() {
            Route::get('/', [UserController::class,'index'])->name('users.index');
            Route::get('/create', [UserController::class,'create'])->name('users.create');
            Route::post('/create', [UserController::class,'store'])->name('users.store');
            Route::get('/{user}/show', [UserController::class,'show'])->name('users.show');
            Route::get('/my_profile', [UserController::class,'my_profile'])->name('users.my_profile');
            Route::get('/{user}/edit', [UserController::class,'edit'])->name('users.edit');
            Route::get('/{user}/assign_role', [UserController::class,'assign_role'])->name('users.assign_role');
            Route::patch('/{user}/update', [UserController::class,'update'])->name('users.update');
            Route::post('/{user}/update_role', [UserController::class,'update_role'])->name('users.update_role');
            Route::delete('/{user}/delete', [UserController::class,'destroy'])->name('users.destroy');
        });

        /**
         * setting Routes
         */
        Route::group(['prefix' => 'setting'], function() {
            route::resource('/department',DepartmentController::class);
            route::resource('/designation',DesignationController::class);
        });

        Route::resource('roles', RoleController::class);
        Route::resource('permissions', PermissionController::class);
    });
});