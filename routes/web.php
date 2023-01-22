<?php

use App\Http\Controllers\myInvocableController;
use App\Http\Controllers\myResourceController;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
//sending parameters-> compulsary,optional
// Route::get('users/{id}/{name?}', function ($id, $name=null) {
//     return "Your id is: {$id}, and your Name is: {$name}";
// });

//using regular expression on single field
// Route::get('users/{id}/{name?}', function ($id, $name=null) {
//     return "Your id is: {$id}, and your Name is: {$name}";
// })->where('id','[0-9]+');

//using regular expression on multiple fields
// Route::get('users/{id}/{name?}', function ($id, $name=null) {
//     return "Your id is: {$id}, and your Name is: {$name}";
// })->where(['id'=>'[0-9]+', 'name'=>'[A-Za-z\s]+']); // here \s stands for white space

//using to methods to validate/constrain data
// Route::get('users/{id}/{name?}', function ($id, $name=null) {
//     return "Your id is: {$id}, and your Name is: {$name}";
// })->whereNumber('id')->whereAlpha('name'); //there are some predifined methods like these two to validate info

//using global constraints for id in the RouteServiceProvider class
// Route::get('users/{id}/{name?}', function ($id, $name=null) {
//     return "Your id is: {$id}, and your Name is: {$name}";
// })->whereAlphaNumeric('name');

//search data
// Route::get('search/{search}', function ($search) {
//     return "Your search result: {$search}"; //shoes and socks
// })->where('search','.*');

//using functions from a controller
Route::get('/myHome', [myResourceController::class, 'myHome'])->name('myHome');

//redirecting route
Route::get('/terms',function(){
    return redirect()->route('welcome');
});

//using invocable controller- myInvocableController
// Route::get('/{pages}', myInvocableController::class)->name('pg')->where('pg','about|contact|home|terms'); //these are different pages to navigate

//Route group
// Route::group([],function(){
//     Route::get('/insert',function(){
//         echo "This is to insert new record";
//     });
//     Route::get('/view-all',function(){
//         echo "This is a list of info";
//     });
//     Route::get('/view-individual/{id}',function($id){
//         echo "This is detailed info of {$id}";
//     });
//     Route::get('/update/{id}',function($id){
//         echo "This is to update info of {$id}";
//     });
//     Route::get('/delete/{id}',function($id){
//         echo "This is to delete info of {$id}";
//     });
// });

//Route group using controller
Route::group(['prefix'=>'user'],function(){     //adding prefix
    Route::get('/insert', [myResourceController::class, 'create']);
    Route::get('/view-all', [myResourceController::class, 'index']);
    Route::get('/show/{id}', [myResourceController::class, 'show']);
    Route::get('/edit/{id}', [myResourceController::class, 'edit']);
    Route::get('/update/{id}', [myResourceController::class, 'update']);
    Route::get('/delete/{id}', [myResourceController::class, 'destroy']);
});
