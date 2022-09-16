<?php

use App\Http\Controllers\JogosController;
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



// Route::view('/Pedro','jogos');



//Route::view('/jogos', 'jogos',['name'=> 'GTA']);

//Route::get('/jogos/{name}', function($name){
//    return view('jogos',['nomeJogo'=>$name]);
//});

Route::get('/jogos',[JogosController::class,'index'] );

Route::get('/home', function () {
    return view('welcome');
})->name('home-index');

Route::fallback(function(){
    return"Erro !";
});