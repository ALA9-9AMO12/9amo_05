<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class ArtikellenController extends Controller
{
    //
}

public function index(){
    Route::get('/artikellen', 'ArtikellenController@index');

}
