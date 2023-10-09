<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SeoPage;
class SeoPageController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

   
    public function index()
    {
        $seo = SeoPage::where('id',1)->first();
        return view('cms.seo', compact('seo'));
    }




    public function store(Request $request)
    {
        

        $image='';
        if($request->hasFile('image')){
           $photo = $request->file('image');
             $image = str_replace(
                 '/[^A-Za-z0-9]/',
                 '-',
                 time() . $photo->getClientOriginalName()
             );
             $photo->move('assets/seo/', $image);
             SeoPage::where('id',1)->update([
                    'image'=>  $image,
                 ]);
            }

            SeoPage::where('id',1)->update([
        
               
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'meta_keywords' => $request->meta_keywords,
              
             
            ]);

            toastr()->success('Data has been saved successfully!');

            return redirect()->route('seoCms');
    }
}
