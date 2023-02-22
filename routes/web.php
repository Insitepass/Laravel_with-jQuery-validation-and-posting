<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

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

/*  post requests for form to add new user*/
Route::get('/', [userController::class,'index']);
Route::post('store-form',[userController::class,'store']);

/*
Returns all users as view using controller
*/
Route::get("users-table",[userController::class,'tableview']);
    
/*  returns users as json response */
Route::get("users" , function() {
  return response()->json([
    'name' => 'Wendell Bode','Miss Adrienne Rogahn','Mr. Burley Morissette V','Vickie Labadie Jr.','Markus Lesch',
    'email' => 'jaskolski.malvina@example.org','arely.pfannerstill@example.net','cwilkinson@example.com','kbreitenberg@example.com','dare.bryon@example.org',
  ]);
  
});




