<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::prefix('usuarios')->group(function(){
   Route::get('',function(){
      return 'usuario';
   })->name('usuario');

   Route::get('/{id}',function(){
      return 'Mostrar detalhes';
   });
   Route::get('/{id}/tags',function(){

   });
});

Route::get('show/{show}',[UserController::class,'show']);


/*
Route::get('user/{user}',function(User $user){
    return $user;
});
*/

Route::get('/a-empresa/{string?}', function($string = null){
   return $string;  
});

Route::get('/', function () {
   // return view('welcome');
   return 'oi';
});

Route::get('/users/{paramA}/{paramB}',function($paramB,$paramA){
   return $paramA . ' - ' . $paramB;

});