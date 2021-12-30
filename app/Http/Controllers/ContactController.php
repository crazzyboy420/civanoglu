<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        $conact->massege = $request->massage."\r\n".' This massage send via '.route('property_single',$property_id).' website';
        $conact->save();
         Mail::send(new ContactMail($conact));
        return redirect(route('property_single',$property_id))->with(['message' => 'Your message has been send']);
    }
}
