<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/all/users','UserController@fetchAll')->name('fetchAll');
Route::get('/all/players','PlayerController@fetchAll')->name('fetchAll');
Route::get('/all/teams','TeamController@fetchAll')->name('fetchAll');
Route::get('/all/members','MemberController@fetchAll')->name('fetchAll');
Route::get('/all/participants','ParticipantController@fetchAll')->name('fetchAll');
Route::get('/all/tournaments','TournamentController@fetchAll')->name('fetchAll');
Route::get('/all/inscriptions','InscriptionController@fetchAll')->name('fetchAll');
Route::get('/all/matches','MatchController@fetchAll')->name('fetchAll');
Route::get('/all/stats','StatController@fetchAll')->name('fetchAll');
Route::get('/all/sets','SetController@fetchAll')->name('fetchAll');
/*Route::get('tournaments/{tournament}', 'TournamenrController@show')->name('tournaments.show');
Route::post('users', 'API\RegisterController@register')->name('users.store');
Route::put('tournaments/{tournament}', 'TournamentController@update')->name('tournaments.update');
Route::delete('tournaments/{tournament}', 'TournamentController@destroy')->name('tournament.destroy');*/

Route::middleware('auth:api')->group( function () {
    Route::get('users', 'UserController@index')->name('users.index');
    Route::get('users/{user}', 'UserController@show')->name('users.show');
    Route::post('users', 'API\RegisterController@register')->name('users.store');
    Route::put('users/{user}', 'UserController@update')->name('users.update');
    Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy');
    Route::post('logout', 'API\RegisterController@logout')->name('logout');
    Route::get('authuser','API\RegisterController@authuser')->name('authuser');
});

/*Route::middleware('tournaments:api')->group(function () {
    Route::get('tournaments', 'TournamentController@index')->name('tournaments.index');
    Route::get('tournaments/{tournament}', 'TournamenrController@show')->name('tournaments.show');
    /*Route::post('users', 'API\RegisterController@register')->name('users.store');
    Route::put('tournaments/{tournament}', 'TournamentController@update')->name('tournaments.update');
    Route::delete('tournaments/{tournament}', 'TournamentController@destroy')->name('tournament.destroy');

});*/

Route::post('login', 'API\RegisterController@login')->name('login');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
