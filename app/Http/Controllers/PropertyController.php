<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function single($id){
        $property = Property::findOrFail($id);
        return view('property.single',['property_single' => $property]);
    }
    public  function  index(Request  $request){
        $all_propertise = Property::latest()->where('type',$request->type)->paginate(15);
        return view('property.index',['all_property' => $all_propertise]);
    }
}
