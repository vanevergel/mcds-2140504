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

Route::get('helloword', function () {
    //dd('helloword');
    return '<h1>hello Word Vanessa <h1>';
 });

 Route::get('users', function () {
    $users = App\User::all()->take(10);
    foreach($users as $user){
      $user->age = date_diff(date_create($user->birthdate), date_create(now()))->format('%y'); //es la edad
      $weekDiff = strftime("%W", now()->getTimestamp()) - strftime("%W", $user->created_at->getTimestamp()); //numero de semanas
      $user->created = $weekDiff;
   }
    
    dd($users);
 });

 Route::get('user/{id}', function () {
    dd(App\User::findOrFail($id));
 });
