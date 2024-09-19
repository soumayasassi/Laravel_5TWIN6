<?php

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
});
Route::get('/test/{id}', function ($id) {
   echo "test" .$id  ;
});

Route::get('/page1', function () {
    return view('page1'  , ["title"=> "my first page"]) ;
});


Route::get('/page2/{name?}', function ($name=null) {
    if($name === null)
    {
        $msg = "Good Bye" ;
    }
    else
    {
        $msg = "Good Evening " . $name  ;
    }
    return view('page2'  , ["message"=> $msg]) ;
})->where('name' , '[a-zA-Z]+')
->where('id' , '[0-9]+');
Route::get('/index' , [\App\Http\Controllers\HomeController::class , 'index']) ;
Route::get('/contact2' , [\App\Http\Controllers\HomeController::class , 'contact'])
->name('mycontact');
Route::get('/contact' , [\App\Http\Controllers\HomeController::class , 'showForm'])
    ->name('contact.form');
Route::post('contact', [\App\Http\Controllers\HomeController::class , 'submitForm']) ;
Route::get('restricted', function()
{
    return " you are authorized to acess this page" ;
})->middleware('verif.age');
