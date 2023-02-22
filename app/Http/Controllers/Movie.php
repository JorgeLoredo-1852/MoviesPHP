<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Movie extends Controller
{
    function index(){
        return["name"=>"JorgeLoredo","rating"=>"3"];
    }
}
