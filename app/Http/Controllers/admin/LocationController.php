<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Flasher\Prime\FlasherInterface;
use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $location = Location::latest()->paginate(10);
        return view('admin.location.location',['locations' =>$location]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.location.add-location');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,FlasherInterface $flasher)
    {
        $request->validate([
            'location_name' => 'required',
        ]);
        $addlocation = new Location();
        $addlocation->name = $request->location_name;
        $addlocation->save();
        $flasher->addSuccess('Location Added Successfully');
        return redirect(route('admin-location.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $location = Location::findOrFail($id);
        return view('admin.location.edit-location',['location' => $location]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id,FlasherInterface $flasher)
    {
        $request->validate([
            'location_name' => 'required',
        ]);
        $updae_location = Location::findOrFail($id);
        $updae_location->name = $request->location_name;
        $updae_location->save();
        $flasher->addSuccess('Location Updated Successfully');
        return redirect(route('admin-location.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,FlasherInterface $flasher)
    {
        $location = Location::findOrFail($id);
        $location->delete();
        $flasher->addSuccess('Location Deleted Successfully');
        return redirect(route('admin-location.index'));
    }
}
