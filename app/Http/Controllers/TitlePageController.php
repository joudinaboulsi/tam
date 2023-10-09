<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TitlePage;
class TitlePageController extends Controller
{
    //
    
    public function index(){
        $title = TitlePage::where('id',1)->first();
        return view('cms.titles_sections',compact('title'));
    }



    public function store(Request $request){

     
     
     TitlePage::where('id',1)->update([
       
        'subtitle_project'         => $request->subtitle_project,
        'title_project'            => $request->title_project,
        'title_product'         => $request->title_product,
        'title_client'         => $request->title_client,

        
    ]);

     toastr()->success('Data has been saved successfully!', 'Congrats');
     return  redirect()->route('titleCms');
     
    }
}
