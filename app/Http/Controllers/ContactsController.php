<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Country;
use App\Contact;
use App\Phone;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class ContactsController extends Controller
{
    
       public function contact(Request $request){
		   $countries=Country::all();
		   $phones=Phone::all();
      
       if($request->isMethod('post')){
		    $data = $request->all();
		 
		     $contact=new Contact;
             $contact->name=$data['name'];
			 $contact->country_id=$data['country_id'];
             $contact->email=$data['email']; 
             $contact->phone=$data['phone']; 
             $contact->message=$data['message'];
             $contact->save();
		 
 $email="admin1000@yopmail.com";
            $messageData=
                [
                'name'=>$data['name'],
				'country_id'=>$data['country_id'],
                'email'=>$data['email'],
                'phone'=>$data['phone'],
                'comment'=>$data['message']
                ];
            Mail::send('frontend.contact.emails.enquiry',$messageData,
                      function($message)use($email)
                       {
                           $message->to($email)->subject('Enquiry from E-labto');
                       });
	   
            return redirect()->back()->with('flash_message_success','Thank you for your enquiry, we will get back soon.');
      
	   }
         return view('frontend.contact.contact',compact('countries','phones'));
          }

}