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
    $users = \App\User::get();
    return view('welcome', ['users'=>$users]);
});

Route::get('/profile/{id}', function($id){
    $user = App\User::find($id);
    
  return view('profile',[
    'user' => $user
  ]);
})->name('profile');
