<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SliderProduct;
class ProductController extends Controller
{
    //



    public function index(){
        $products = SliderProduct::all();
        return view('cms.products.index',compact('products'));
    }

    
    public function create(){
       
        return view('cms.products.create');
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
             $photo->move('assets/product/', $image);
             
         }

         SliderProduct::insert([
           
            'image'         =>$image,
            'alt_image'     =>$request->alt_image,
        ]);

        toastr()->success('Data has been saved successfully!');

        return redirect()->route('productCms');

    }

    public function edit($id){
        $product = SliderProduct::where('id',$id)->first();
       
        return view('cms.products.edit',compact('product'));
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
             $photo->move('assets/product/', $image);
             SliderProduct::where('id',$id)->update([ 'image' =>$image,]);
         }
        
         SliderProduct::where('id',$id)->update([
        
            'alt_image'     =>$request->alt_image,
           
         
        ]);

        toastr()->success('Data has been saved successfully!');

        return redirect()->route('productCms');

        
    }


    public function delete($id){
        SliderProduct::where('id',$id)->delete();
        toastr()->success('Data has been deleted successfully!');

        return redirect()->route('productCms');
    }
}
