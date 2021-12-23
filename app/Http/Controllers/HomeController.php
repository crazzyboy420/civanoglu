<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function home(){
       $latest_property = Property::latest()->get()->take(4);
       return view('welcome',[
          'latest_property' => $latest_property,
       ]);
   }
}
