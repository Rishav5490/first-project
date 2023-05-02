<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\abc;
use App\Http\controllers\datapass;
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

Route::get('/datapass/{fname}/{lname}',[datapass::class,'datapassing']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('home',function()
{
     echo"hellow";
});

Route::get('/home/{abc}',function($abc)
{
    echo $abc;
       
});
Route::get('io', function () {
    return view('jump');
});


Route:: redirect('rishav','io');


Route::get('/home/{abc}/{xyz}',function ($abc,$xyz)
{
    echo $abc+$xyz;

});


Route::get('/Contactus',[abc::class,'firstmethod']);

Route::get('/Contactus add/{id}/{di}',[abc::class,'addmethod']);

Route::get('/Contactus sub/{id}/{di}',[abc::class,'submethod']);

Route::get('/Contactus mul/{id}/{di}',[abc::class,'mulmethod']);

Route::get('/Contactus div/{id}/{di}',[abc::class,'divmethod']);

