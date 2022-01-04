<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Jobs\ProcessContactMail;
use App\Models\Contact;
use Flasher\Prime\FlasherInterface;
use Illuminate\Http\Request;

class ContactController extends Controller
{


    public function propertyInquiry(Request $request,$property_id){
        $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required|max:255',
            'email' => 'required|email|max:255',
            'massage' => 'required|max:255',
        ]);

        $conact = new Contact();
        $conact->name = $request->name;
        $conact->phone = $request->phone;
        $conact->email = $request->email;
        $conact->massege = $request->massage;
        $conact->save();

        //Mail sent with queue
        ProcessContactMail::dispatch($conact);
        return redirect(route('property_single',$property_id))->with(['message' => 'Your message has been send']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $contact = Contact::latest()->paginate(15);

       return view('admin.contactMail.contactMail',['contacts' => $contact]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $contact = Contact::findorFail($id);
       return view('admin.contactMail.viewContact',['contact' => $contact]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,FlasherInterface $flasher)
    {
       $contact = Contact::findorFail($id);

       $contact->delete();
        $flasher->addSuccess('Contact Deleted Successfully');
       return back();
    }
}
