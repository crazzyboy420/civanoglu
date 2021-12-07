<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function home(){
       $latest_property = Property::all();
       return view('welcome',[
          'latest_property' => $latest_property,
       ]);
   }
}
