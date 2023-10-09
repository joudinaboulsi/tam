@extends('layouts/admin')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
<div class="card">
    <h5 class="card-header">Projects Section</h5>
    <div class="card-header">
        <a href="{{ route('projectCreate') }}" class="btn btn-primary">Add</a>
    </div>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>Alt Image</th>
            <th>Image</th>
            <th>video</th>
            
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->alt_image }}</td>
                    <td>
                        @if($project->image)
                        <img src="{{ asset('assets/project/'.$project->image) }}" width="100">
                        @endif
                    </td>

                    <td>
                      @if($project->video)
                      <video width="220" height="240" controls>
                        <source src="../assets/project/{{ $project->video}}" type="video/mp4">
                
                        </video>
                    
                      @endif
                  </td>
                    <td>
                        <div  style="display: flex">
                            <a href="{{route('projectEdit',$project->id)}}" class="btn btn-outline-success" style="margin:0 5px">Edit</a>
                            <form action="{{ route('projectDelete',$project->id) }}" method="POST">
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