<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Settings;
use Illuminate\Support\Facades\File;
class SettingsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
        $settings = Settings::where('id',1)->first();
        return view('cms.settings',compact('settings'));
    }



    public function store(Request $request){

        
        // $logo_header='';
        // if($request->hasFile('logo_header')){
        //     $photo = $request->file('logo_header');
        //         $logo_header = str_replace(
        //             '/[^A-Za-z0-9]/',
        //             '-',
        //             time() . $photo->getClientOriginalName()
        //         );
        //         $photo->move('assets/logo/', $logo_header);

        //         Settings::where('id',1)->update([
        //             'logo_header'=>$logo_header,
        //         ]);

        //  }
        $settings = Settings::where('id',1)->first();

        if ($request->hasFile('logo')) {
            // Delete the old image
            $oldImage = public_path('assets/logo/' .$settings->logo);
            if (File::exists($oldImage)) {
                File::delete($oldImage);
            }
    
            // Store and update the new image
            $logo = $request->file('logo');
            $new_name = rand() . '.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('assets/logo'), $new_name);
            Settings::where('id',1)->update([
                            'logo'=>$new_name,]);
           
        }

         
     
     Settings::where('id',1)->update([
       
        'alt_logo'         => $request->alt_logo,
        'logo_title'         => $request->logo_title,
        'phone1'           => $request->phone1,
        'tel1'             => $request->tel1,
        'phone2'           => $request->phone2,
        'scrollToLink'           => $request->scrollToLink,
        'scrollToLinkText'           => $request->scrollToLinkText,
        'whatsap_link'           => $request->whatsap_link,
      
        'email1'           => $request->email1,
         'email2'          => $request->email2,
        'location'         => $request->location,
        'map'              => $request->map,
      
        'instagram'        => $request->instagram,
        'linkedin'         => $request->linkedin,
        
    ]);

     toastr()->success('Data has been saved successfully!', 'Congrats');
     return  redirect()->route('settingsCms');
     
    }
}
