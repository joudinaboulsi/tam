<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use Illuminate\Support\Facades\File;
class ServiceController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
        $service = Service::where('id',1)->first();
        return view('cms.service',compact('service'));
    }



    public function store(Request $request){

        $service = Service::where('id',1)->first();

        if ($request->hasFile('icon1')) {
            // Delete the old image
            $oldImage = public_path('assets/service/' .$service->icon1);
            if (File::exists($oldImage)) {
                File::delete($oldImage);
            }
            $icon1 = $request->file('icon1');
            $new_name = rand() . '.' . $icon1->getClientOriginalExtension();
            $icon1->move(public_path('assets/service'), $new_name);
            Service::where('id',1)->update([
                            'icon1'=>$new_name,]);
        }


        
        if ($request->hasFile('icon2')) {
            // Delete the old image
            $oldImage = public_path('assets/service/' .$service->icon2);
            if (File::exists($oldImage)) {
                File::delete($oldImage);
            }
            $icon2 = $request->file('icon2');
            $new_name = rand() . '.' . $icon2->getClientOriginalExtension();
            $icon2->move(public_path('assets/service'), $new_name);
            Service::where('id',1)->update([
                            'icon2'=>$new_name,]);
        }

          
        if ($request->hasFile('icon3')) {
            // Delete the old image
            $oldImage = public_path('assets/service/' .$service->icon3);
            if (File::exists($oldImage)) {
                File::delete($oldImage);
            }
            $icon3 = $request->file('icon3');
            $new_name = rand() . '.' . $icon3->getClientOriginalExtension();
            $icon3->move(public_path('assets/service'), $new_name);
            Service::where('id',1)->update([
                            'icon3'=>$new_name,]);
        }

        if ($request->hasFile('icon4')) {
            // Delete the old image
            $oldImage = public_path('assets/service/' .$service->icon4);
            if (File::exists($oldImage)) {
                File::delete($oldImage);
            }
            $icon4 = $request->file('icon4');
            $new_name = rand() . '.' . $icon4->getClientOriginalExtension();
            $icon4->move(public_path('assets/service'), $new_name);
            Service::where('id',1)->update([
                            'icon4'=>$new_name,]);
        }

        if ($request->hasFile('image1')) {
            // Delete the old image
            $oldImage = public_path('assets/service/' .$service->image1);
            if (File::exists($oldImage)) {
                File::delete($oldImage);
            }
            $image1 = $request->file('image1');
            $new_name = rand() . '.' . $image1->getClientOriginalExtension();
            $image1->move(public_path('assets/service'), $new_name);
            Service::where('id',1)->update([
                            'image1'=>$new_name,]);
        }

        
        if ($request->hasFile('image2')) {
            // Delete the old image
            $oldImage = public_path('assets/service/' .$service->image2);
            if (File::exists($oldImage)) {
                File::delete($oldImage);
            }
            $image2 = $request->file('image2');
            $new_name = rand() . '.' . $image2->getClientOriginalExtension();
            $image2->move(public_path('assets/service'), $new_name);
            Service::where('id',1)->update([
                            'image2'=>$new_name,]);
        }


        if ($request->hasFile('image3')) {
            // Delete the old image
            $oldImage = public_path('assets/service/' .$service->image3);
            if (File::exists($oldImage)) {
                File::delete($oldImage);
            }
            $image3 = $request->file('image3');
            $new_name = rand() . '.' . $image3->getClientOriginalExtension();
            $image3->move(public_path('assets/service'), $new_name);
            Service::where('id',1)->update([
                            'image3'=>$new_name,]);
        }

        if ($request->hasFile('image4')) {
            // Delete the old image
            $oldImage = public_path('assets/service/' .$service->image4);
            if (File::exists($oldImage)) {
                File::delete($oldImage);
            }
            $image4 = $request->file('image4');
            $new_name = rand() . '.' . $image4->getClientOriginalExtension();
            $image4->move(public_path('assets/service'), $new_name);
            Service::where('id',1)->update([
                            'image4'=>$new_name,]);
        }


        

         
     
     Service::where('id',1)->update([
       
        'subtitle_service'    => $request->subtitle_service,
        'title_service'       => $request->title_service,
        'content_service'     => $request->content_service,
        'alt_image1'          => $request->alt_image1,
        'alt_image2'          => $request->alt_image2,
        'alt_image3'          => $request->alt_image3,
        'alt_image4'          => $request->alt_image4,
        'alt_icon1'          => $request->alt_icon1,
        'alt_icon2'          => $request->alt_icon2,
        'alt_icon3'          => $request->alt_icon3,
        'alt_icon4'          => $request->alt_icon4,
        'subtitle1'           => $request->subtitle1,
        'subtitle2'           => $request->subtitle2,
        'subtitle3'           => $request->subtitle3,
        'subtitle4'           => $request->subtitle4,
       
        
    ]);

     toastr()->success('Data has been saved successfully!', 'Congrats');
     return  redirect()->route('serviceCms');
     
    }
}
