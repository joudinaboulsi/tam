@extends('layouts.admin')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Edit</h5>
                <div class="card-body">
                  <form action="{{ route('projectUpdate',$project->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="pt-4">
                        @if($project->image)
                        <img src="{{ asset('assets/project/'.$project->image) }}" width="100">
                        @endif
                     
                    </div>
                 
                    <div class="pt-4">
                        <label for="image_poject" class="form-label pb-3">Image</label>
                        <input type="file" class="form-control" id="image_poject" name="image"   />
                    
                    </div>
                    <div class="pt-4">
                        <label for="image_poject_alt" class="form-label pb-3">Alt Image </label>
                        <input type="text" class="form-control" id="image_poject_alt" name="alt_image"  value="{{ $project->alt_image }}" />
                    
                    </div>
              
                    <div class="pt-3 pb-3">
                        @if($project->video)
                    
                        <video width="320" height="240" controls>
                            <source src="../assets/project/{{ $project->video}}" type="video/mp4">
                    
                            </video>
                        @endif
                
                </div>
                <div class="pt-3 pb-3">
                    <label for="video_project" class="form-label">Video </label>
                   <input class="form-control" type="file" id="video_project"  name="video" />
                
                </div>


                <div class="demo-inline-spacing">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                </form>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection




