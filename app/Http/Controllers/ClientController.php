<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
class ClientController extends Controller
{
    //
    public function index(){
        $clients = Client::all();
        return view('cms.clients.index',compact('clients'));
    }

    
    public function create(){
       
        return view('cms.clients.create');
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
             $photo->move('assets/client/', $image);
             
         }

         Client::insert([
           
            'image'         =>$image,
            'alt_image'     =>$request->alt_image,
            'name'     =>$request->name,
            'link'     =>$request->link,
        ]);

        toastr()->success('Data has been saved successfully!');

        return redirect()->route('clientCms');

    }

    public function edit($id){
        $client = Client::where('id',$id)->first();
       
        return view('cms.clients.edit',compact('client'));
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
             $photo->move('assets/client/', $image);
             Client::where('id',$id)->update([ 'image' =>$image,]);
         }
        
         Client::where('id',$id)->update([
        
            'alt_image'     =>$request->alt_image,
            'name'     =>$request->name,
            'link'     =>$request->link,
           
         
        ]);

        toastr()->success('Data has been saved successfully!');

        return redirect()->route('clientCms');

        
    }


    public function delete($id){
        Client::where('id',$id)->delete();
        toastr()->success('Data has been deleted successfully!');

        return redirect()->route('clientCms');
    }
}
