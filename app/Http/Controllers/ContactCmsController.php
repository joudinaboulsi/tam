<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class ContactCmsController extends Controller
{
   
    public function index(){
        $contact = Contact::where('id',1)->first();
        return view('cms.contact',compact('contact'));
    }



    public function store(Request $request){

        
        $image='';
        if($request->hasFile('image')){
            $photo = $request->file('image');
                $image = str_replace(
                    '/[^A-Za-z0-9]/',
                    '-',
                    time() . $photo->getClientOriginalName()
                );
                $photo->move('assets/contact/', $image);

                Contact::where('id',1)->update([
                    'image'=>$image,
                ]);

         }
    
         
     
     Contact::where('id',1)->update([
       
        'alt_image'         => $request->alt_image,
        
        'title_contact'     => $request->title_contact,
        'subtitle_contact'        => $request->subtitle_contact,
     
        
    ]);

     toastr()->success('Data has been saved successfully!', 'Congrats');
     return  redirect()->route('contactCms');
     
    }
}
