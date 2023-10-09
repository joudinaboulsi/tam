<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SliderHome;
class SliderHomeController extends Controller
{
    //
    
    public function index(){
        $sliders = SliderHome::all();
        return view('cms.sliders.index',compact('sliders'));
    }

    
    public function create(){
       
        return view('cms.sliders.create');
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
             $photo->move('assets/slider/', $image);
             
         }


         SliderHome::insert([
           
            'image'         =>$image,
            'alt_image'     =>$request->alt_image,
            'title'     =>$request->title,
            'link_text'     =>$request->link_text,
            'href'     =>$request->href,
            'subtitle'     =>$request->subtitle,

        ]);

        toastr()->success('Data has been saved successfully!');

        return redirect()->route('sliderCms');

    }

    public function edit($id){
        $slider = SliderHome::where('id',$id)->first();
       
        return view('cms.sliders.edit',compact('slider'));
    }

    public function update(Request $request,$id){

        $image='';
        if($request->hasFile('image')){
           $photo = $request->file('image');
             $image = str_replace(
                 '/[^A-Za-z0-9]/',
                 '-',
                 time() . $photo->getClientOriginalName()
             );
             $photo->move('assets/slider/', $image);
             SliderHome::where('id',$id)->update([ 'image' =>$image,]);
         }
         SliderHome::where('id',$id)->update([
            'alt_image'     =>$request->alt_image,
            'title'     =>$request->title,
            'subtitle'     =>$request->subtitle,
            'link_text'     =>$request->link_text,
            'href'     =>$request->href,
         ]);
       

        toastr()->success('Data has been saved successfully!');

        return redirect()->route('sliderCms');

        
    }


    public function delete($id){
        SliderHome::where('id',$id)->delete();
        toastr()->success('Data has been deleted successfully!');

        return redirect()->route('sliderCms');
    }
}
