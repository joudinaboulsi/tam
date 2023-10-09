@extends('layouts/admin')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
<div class="card">
    <h5 class="card-header">Slider Home Section</h5>
    <div class="card-header">
        <a href="{{ route('sliderCreate') }}" class="btn btn-primary">Add</a>
    </div>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>Title</th>
            <th>SubTitle</th>
            <th>Link </th>
            <th>Href</th>
            <th>Alt Image</th>
            <th>Image</th>
            
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach ($sliders as $slider)
                <tr>
                    <td>{{ $slider->title }}</td>
                    <td>{{ $slider->subtitle }}</td>
                    <td>{{ $slider->link_text }}</td>
                    <td>{{ $slider->href }}</td>
                    <td>{{ $slider->alt_image }}</td>
                    <td>
                        @if($slider->image)
                        <img src="{{ asset('assets/slider/'.$slider->image) }}" width="100">
                        @endif
                    </td>
                    <td>
                        <div  style="display: flex">
                            <a href="{{route('sliderEdit',$slider->id)}}" class="btn btn-outline-success" style="margin:0 5px">Edit</a>
                            <form action="{{ route('sliderDelete',$slider->id) }}" method="POST">
                                @csrf
                                @method('delete')
                            
                                <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this data?')">Delete</button> 
                        
                            </form>
                        </div></td>
                </tr>
       
            
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
  <!--/ Basic Bootstrap Table -->
@endsection