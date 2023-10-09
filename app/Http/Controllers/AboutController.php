<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
class AboutController extends Controller
{
    //

    public function index(){
        $about = About::where('id',1)->first();
        return view('cms.about',compact('about'));
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
                $photo->move('assets/about/', $image);

                About::where('id',1)->update([
                    'image'=>$image,
                ]);

         }

         $image1='';
         if($request->hasFile('image1')){
             $photo = $request->file('image1');
                 $image1 = str_replace(
                     '/[^A-Za-z0-9]/',
                     '-',
                     time() . $photo->getClientOriginalName()
                 );
                 $photo->move('assets/about/', $image1);
 
                 About::where('id',1)->update([
                     'image1'=>$image1,
                 ]);
 
          }

          
         $pdf='';
         if($request->hasFile('pdf')){
             $photo = $request->file('pdf');
                 $pdf = str_replace(
                     '/[^A-Za-z0-9]/',
                     '-',
                     time() . $photo->getClientOriginalName()
                 );
                 $photo->move('assets/about/', $pdf);
 
                 About::where('id',1)->update([
                     'pdf'=>$pdf,
                 ]);
 
          }
    
         
     
     About::where('id',1)->update([
       
        'alt_image'         => $request->alt_image,
        'alt_image1'         => $request->alt_image1,
        'subtitle_about'     => $request->subtitle_about,
        'title_about'        => $request->title_about,
        'content_about'        => $request->content_about,
        'btn_text'        => $request->btn_text,
    
    ]);

     toastr()->success('Data has been saved successfully!', 'Congrats');
     return  redirect()->route('aboutCms');
     
    }
}
