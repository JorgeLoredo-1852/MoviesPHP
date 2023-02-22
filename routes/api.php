<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/movie', function(Request $request){
    $movie = $request->term;
    $client = new GuzzleHttp\Client();
    $req = "https://imdb-api.com/API/AdvancedSearch/k_p5k5tg9t/?title=" . $movie;
    $res = $client->get($req , ['auth' =>  ['user', 'pass']]);
    $n =  $res->getBody(); // { "type": "User", ....
    $c = json_decode($n, true);
    return $c;


    //return ["name"=>"JorgeLoredo","rating"=>"3","term" => $movie];
});