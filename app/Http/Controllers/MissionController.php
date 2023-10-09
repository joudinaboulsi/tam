<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mission;
class MissionController extends Controller
{
    //

    public function index(){
        $mission = Mission::where('id',1)->first();
        return view('cms.mission',compact('mission'));
    }



    public function store(Request $request){

     
     Mission::where('id',1)->update([
       
        'title_mission'         => $request->title_mission,
        'content_mission'       => $request->content_mission,
        'title1'         => $request->title1,
        'p1'             => $request->p1,
        'title2'             => $request->title2,
        'p2'             => $request->p2,
        'title3'         => $request->title3,
        'p3'            => $request->p3,
        'title4'            => $request->title4,
        'p4'            => $request->p4,
        'btn'                 => $request->btn,
        'scrollTo'                 => $request->scrollTo,
     
        
    ]);

     toastr()->success('Data has been saved successfully!', 'Congrats');
     return  redirect()->route('missionCms');
     
    }
}
