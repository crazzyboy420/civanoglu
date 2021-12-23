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
        $all_propertise = Property::latest();
        if (!empty($request->type)){
            $all_propertise = $all_propertise->where('type',$request->type);
        }
        if (!empty($request->sale)){
            $all_propertise = $all_propertise->where('sale',$request->sale);
        }
        if (!empty($request->bedrooms)){
            $all_propertise = $all_propertise->where('bedrooms',$request->bedrooms);
        }
        if (!empty($request->price)){
            //$all_propertise = $all_propertise->where('bedrooms',$request->bedrooms);
            if($request->price == 3000000){
                $all_propertise = $all_propertise->where('price','<=','3000000');
            }
            if($request->price == 4000000){
                $all_propertise = $all_propertise->where('price','>','3000000')->where('price','<=','4000000');
            }
            if($request->price == 5000000){
                $all_propertise = $all_propertise->where('price','>','4000000')->where('price','<=','5000000');
            }
            if($request->price == 6000000){
                $all_propertise = $all_propertise->where('price','>','5000000')->where('price','<=','6000000');
            }
            if($request->price == 7000000){
                $all_propertise = $all_propertise->where('price','>','6000000')->where('price','<=','7000000');
            }
            if($request->price == 8000000){
                $all_propertise = $all_propertise->where('price','>','7000000')->where('price','<=','8000000');
            }
            if($request->price == 9000000){
                $all_propertise = $all_propertise->where('price','>','8000000')->where('price','<=','9000000');
            }
            if($request->price == '9000000+'){
                $all_propertise = $all_propertise->where('price','>','9000000');
            }
        }
        $all_propertise = $all_propertise->paginate(15);
        return view('property.index',['all_property' => $all_propertise]);
    }
}
