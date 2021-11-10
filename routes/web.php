<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usersController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\EmploController;
use App\Http\Controllers\Positiontroller;
use App\Http\Controllers\DepertmentController;
use App\Http\Controllers\ManuController;
use App\Http\Controllers\TablesController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\loginController;


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

Route::get("logout",[loginController::class,"logout"]);
Route::post("login",[loginController::class,"login"]);



Route::get('/dashboard', function () {
    return view('pages.dashbord');
})->middleware('secured');

Route::get('/', function () {
    return view('layout.login');
});



Route::resource("users",usersController::class);
Route::resource("employee",EmploController::class);
Route::resource("roles",RoleController::class);
Route::resource("position",Positiontroller::class);
Route::resource("depertment",DepertmentController::class);
Route::resource("manus",ManuController::class);
Route::resource("tables",TablesController::class);
Route::resource("customer",CustomerController::class);




Route::get('order/', [OrderController::class,"display"]); 

Route::get('invoice/', [OrderController::class,"index"]); 
Route::post('invoice/store', [OrderController::class,"store"]); 
Route::post('invoice/addItem', [OrderController::class,"addItem"]); 
Route::post('invoice/updateItem', [OrderController::class,"updateItem"]); 
Route::delete('invoice/removeItem', [OrderController::class,"removeItem"]); 
