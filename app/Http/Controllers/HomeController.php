<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Page;
use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function home(){
       $latest_property = Property::latest()->get()->take(4);
       $locations = Location::select('id','name')->get();
       return view('welcome',[
          'latest_property' => $latest_property,
           'locations'     => $locations,
       ]);
   }
    public function single($slug){
        $page = Page::where('slug',$slug)->first();
        if(!empty($page)){
            return view('page.page',[
                'page' => $page,
            ]);
        }else{
            return abort('404');
        }
    }
}
