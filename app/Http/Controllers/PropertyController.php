<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function single($id){
        $property = Property::findOrFail($id);
        return view('property.single',['property_single' => $property]);
    }
    public  function  index(Request  $request){
        $location = Location::select('id','name')->get();
        $all_propertise = Property::latest();
        if (!empty($request->type) || $request->type == '0'){
            $all_propertise = $all_propertise->where('type',$request->type);
        }
        if (!empty($request->location)){
            $all_propertise = $all_propertise->where('location',$request->location);
        }

        if (!empty($request->sale) || $request->sale == '0'){
            $all_propertise = $all_propertise->where('sale',$request->sale);
        }
        if (!empty($request->bedrooms)){
            $all_propertise = $all_propertise->where('bedrooms',$request->bedrooms);
        }
        if (!empty($request->name_search)){
            $all_propertise = $all_propertise->where('name', 'LIKE', '%'.$request->get('name_search').'%');
        }
        if (!empty($request->price)){
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
        return view('property.index',['all_property' => $all_propertise,'locations'=>$location]);
    }
}
