<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class NieuwsarchiefController extends Controller
{
    public function index(){
        Route::get('/nieuwsarchief','NieuwsarchiefController@index');
    }
}
