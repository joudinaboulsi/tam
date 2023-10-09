<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vision;
class VisionController extends Controller
{
    //

    public function index(){
        $vision = Vision::where('id',1)->first();
        return view('cms.vision',compact('vision'));
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

                Vision::where('id',1)->update([
                    'image'=>$image,
            ]);

        }

  
    
         
     
     Vision::where('id',1)->update([
       
        'subtitle_vision'         => $request->subtitle_vision,
        'title_vision'            => $request->title_vision,
        'content_vision'            => $request->content_vision,
        'count1'                  => $request->count1,
        'count2'                  => $request->count2,
        'count3'                  => $request->count3,
        'count4'                  => $request->count4,
        'count5'                  => $request->count5,
        'title1'                  => $request->title1,
        'title2'                  => $request->title2,
        'title3'                  => $request->title3,
        'title4'                  => $request->title4,
        'title5'                  => $request->title5,
        'alt_image'               => $request->alt_image,
   
     
        
    ]);

     toastr()->success('Data has been saved successfully!', 'Congrats');
     return  redirect()->route('visionCms');
     
    }
}
