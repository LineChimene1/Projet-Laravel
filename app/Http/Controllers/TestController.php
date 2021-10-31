<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
   public function index1(){
       $nom="chimene";
     return view('home',compact ('nom'));

   }
}
