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

 //Route::get('users', function () {
   // $users = App\User::all()->take(10);
   // foreach($users as $user){
    //  $user->age = date_diff(date_create($user->birthdate), date_create(now()))->format('%y'); //es la edad
    //  $weekDiff = strftime("%W", now()->getTimestamp()) - strftime("%W", $user->created_at->getTimestamp()); //numero de semanas
    //  $user->created = $weekDiff;
   //}
   // 
// });

use \Carbon\Carbon;
Route::get('challenge', function () {
   foreach (App\User::all()->take(10) as $user) {
      $years = Carbon::createFromDate($user->birthdate)->diff()->format('%y years old');
      $since = Carbon::parse($user->created_at);
      $rs[] = $user->fullname." - ".$years." - created ".$since->diffForHumans();
   }

   return view('challenge', ['rs' => $rs]); 
});




 Route::get('user/{id}', function () {
    dd(App\User::findOrFail($id));
 });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/examples', function () {
$users = App\User::all()->take(10); //modificar take (XX) con los usuarios a mostrar
$categories = App\Category::all()->take(1);// creacion de la condicional-- mod take (XX)
$games = App\Game::all();
    return view('examples',['users'=>$users,'categories'=>$categories,'games'=>$games]);
});