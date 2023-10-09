<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
class ProjectController extends Controller
{
    
    public function index(){
        $projects = Project::all();
        return view('cms.projects.index',compact('projects'));
    }

    
    public function create(){
       
        return view('cms.projects.create');
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
             $photo->move('assets/project/', $image);
             
         }

         $video='';
         if($request->hasFile('video')){
            $photo = $request->file('video');
              $video = $photo->getClientOriginalName();
        
              $photo->move('assets/project/', $video);
             
          }

         Project::insert([
           
            'image'         =>$image,
            'video'         =>$video,
            'alt_image'     =>$request->alt_image,
        ]);

        toastr()->success('Data has been saved successfully!');

        return redirect()->route('projectCms');

    }

    public function edit($id){
        $project = Project::where('id',$id)->first();
       
        return view('cms.projects.edit',compact('project'));
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
             $photo->move('assets/project/', $image);
             Project::where('id',$id)->update([ 'image' =>$image,]);
         }
        
         $video='';
         if($request->hasFile('video')){
            $photo = $request->file('video');
              $video = $photo->getClientOriginalName();
        
              $photo->move('assets/project/', $video);
              Project::where('id',$id)->update([  'video'=>$video,]);
          }
         Project::where('id',$id)->update([
        
            'alt_image'     =>$request->alt_image,
        ]);

        toastr()->success('Data has been saved successfully!');

        return redirect()->route('projectCms');

        
    }


    public function delete($id){
        Project::where('id',$id)->delete();
        toastr()->success('Data has been deleted successfully!');

        return redirect()->route('projectCms');
    }
}
