<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class ContactController extends Controller
{
    public function index(){
Route::get('/contact','ContactController@index');
    }
}
