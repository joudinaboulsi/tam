@extends('layouts/admin')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
<div class="card">
    <h5 class="card-header">Clients Section</h5>
    <div class="card-header">
        <a href="{{ route('clientCreate') }}" class="btn btn-primary">Add</a>
    </div>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>Client </th>
            <th>Website Link</th>
            <th>Alt Image</th>
            <th>Image</th>
            
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach ($clients as $client)
                <tr>
                  <td>{{ $client->name }}</td>
                  <td>{{ $client->link }}</td>

                    <td>{{ $client->alt_image }}</td>
                    <td>
                        @if($client->image)
                        <img src="{{ asset('assets/client/'.$client->image) }}" width="100">
                        @endif
                    </td>
                    <td>
                        <div  style="display: flex">
                            <a href="{{route('clientEdit',$client->id)}}" class="btn btn-outline-success" style="margin:0 5px">Edit</a>
                            <form action="{{ route('clientDelete',$client->id) }}" method="POST">
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