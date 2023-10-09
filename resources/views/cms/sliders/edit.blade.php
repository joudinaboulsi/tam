@extends('layouts.admin')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Edit</h5>
                <div class="card-body">
                  <form action="{{ route('sliderUpdate',$slider->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf


                    <div class="pt-4">
                        <label for="title" class="form-label pb-3">Title</label>
                        <input type="text" class="form-control" id="title" name="title"  value="{{ $slider->title }}"  />
                    
                    </div>
                    <div class="pt-4">
                        <label for="subtitle" class="form-label pb-3">subTitle</label>
                        <input type="text" class="form-control" id="subtitle" name="subtitle"  value="{{ $slider->subtitle }}"  />
                    
                    </div>

                    <div class="pt-4">
                        <label for="link_text" class="form-label pb-3">Link</label>
                        <input type="text" class="form-control" id="link_text" name="link_text"  value="{{ $slider->link_text }}"  />
                    
                    </div>

                    <div class="pt-4">
                        <label for="href" class="form-label pb-3">Href</label>
                        <input type="text" class="form-control" id="href" name="href"  value="{{ $slider->href }}"  />
                    
                    </div>
                    <div class="pt-4">
                        @if($slider->image)
                        <img src="{{ asset('assets/slider/'.$slider->image) }}" width="100">
                        @endif
                    </div>
                    <div class="pt-4">
                        <label for="image" class="form-label pb-3">Image</label>
                        <input type="file" class="form-control" id="image" name="image"  />
                    
                    </div>
                    <div class="pt-4">
                        <label for="alt_image" class="form-label pb-3">Alt Image </label>
                        <input type="text" class="form-control" id="alt_image" name="alt_image"  value="{{ $slider->alt_image }}"  />
                    
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




