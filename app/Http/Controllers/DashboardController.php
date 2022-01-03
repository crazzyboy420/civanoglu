<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Media;
use App\Models\Property;
use Flasher\Prime\FlasherInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
  public function index(){
      return view('admin.dashboard');
  }
  public function propertise(){
      $propertise = Property::latest()->paginate(20);
      return view('admin.propertise',['propertise' =>$propertise]);
  }
  public function addProperty(){
      $location = Location::all();
      return view('admin.property.addProperty',['locations' =>$location]);
  }
  public function validation(){
      return [
          'name' =>'required',
          'name_bn'=>'required',
          'price'=>'required|integer',
          'location'=>'required',
          'sale'=>'required',
          'type'=>'required',
          'bathrooms'=>'integer',
          'drowing_room'=>'integer',
          'gross_sqm'=>'integer',
          'net_sqm'=>'integer',
          'pool'=>'integer',
          'overview'=>'required',
          'overview_bn'=>'required',
          'description'=>'required',
          'description_bn'=>'required',
      ];
  }
  public function saveAndUpdateProperty($propertise,$request)
  {

      $propertise->name = $request->name;
      $propertise->name_bn = $request->name_bn;


      if (!empty($request->feature_img)){
          if (!empty($propertise->feature_img)){
              Storage::delete('/public/uploads/'.$propertise->feature_img);
          }
          $feature_img_name = time() . '-' . $request->feature_img->getClientOriginalName();
          $request->feature_img->storeAs('public/uploads', $feature_img_name);
          $propertise->feature_img = $feature_img_name;
      }
      $propertise->price = $request->price;
      $propertise->location = $request->location;
      $propertise->sale = $request->sale;
      $propertise->type = $request->type;
      $propertise->bedrooms = $request->bedrooms;
      $propertise->drowing_room = $request->drowing_room;
      $propertise->bathrooms = $request->bathrooms;
      $propertise->gross_sqm = $request->gross_sqm;
      $propertise->net_sqm = $request->net_sqm;
      $propertise->pool = $request->pool;
      $propertise->overview = $request->overview;
      $propertise->overview_bn = $request->overview_bn;
      $propertise->why_buy = $request->why_buy;
      $propertise->why_buy_bn = $request->why_buy_bn;
      $propertise->description = $request->description;
      $propertise->description_bn = $request->description_bn;
      $propertise->save();
     if(!empty($request->gallery_img)){
      foreach ($request->gallery_img as $image){
          if(!empty($image)){
              $gallery_image_name = time().'-'.$image->getClientOriginalName();
              $image->storeAs('public/uploads',$gallery_image_name);
              $madia = new Media();
              $madia->name = $gallery_image_name;
              $madia->property_id =  $propertise->id;
              $madia->save();
          }
      }
     }
  }
  public function createProperty(Request $request,FlasherInterface $flasher){
      $update_validation = $this->validation()[] = [
          'feature_img'=>'required|image',
          'gallery_img'=>'required',
      ];
      $request->validate($update_validation);

      $propertise = new Property();
      $this->saveAndUpdateProperty($propertise,$request);
      $flasher->addSuccess('Property Created successfully');
     return redirect(route('dashboard-propertise'));

  }
  public function updateProperty($property_id,Request $request,FlasherInterface $flasher){
      $request->validate($this->validation());

      $propertise = Property::findOrFail($property_id);
      $this->saveAndUpdateProperty($propertise,$request);
      $flasher->addSuccess('Property Update successfully');
      return redirect(route('dashboard-propertise'));
  }
  public function deleteMedia(Request $request,$media_id){
      $media = Media::findOrFail($media_id);
      //delete file
      Storage::delete('public/uploads/'.$media->name);
      //delete row
      $media->delete();
      return back();
  }
    public function editProperty($property_id){
        $property = Property::findOrFail($property_id);
        $location = Location::all();
        return view('admin.property.editProperty',[
            'property'=>$property,
            'locations' => $location,
        ]);
    }
    public function deleteProperty($dproperty_id,FlasherInterface $flasher){
      $property = Property::findOrFail($dproperty_id);
      //Feature image delete
        Storage::delete('/public/uploads/'.$property->feature_img);
      //gallery image delete
      foreach ($property->gallery as $gallery){
          $media = Media::findOrFail($gallery->id);
          Storage::delete('/public/uploads/'.$gallery->name);
          $media->delete();
      }
      $property->delete();
      $flasher->addSuccess('Property deleted Successfully');
      return back();
    }
}
