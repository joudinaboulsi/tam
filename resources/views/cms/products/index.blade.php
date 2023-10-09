@extends('layouts/admin')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
<div class="card">
    <h5 class="card-header">Products Section</h5>
    <div class="card-header">
        <a href="{{ route('productCreate') }}" class="btn btn-primary">Add</a>
    </div>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>Alt Image</th>
            <th>Image</th>
            
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->alt_image }}</td>
                    <td>
                        @if($product->image)
                        <img src="{{ asset('assets/product/'.$product->image) }}" width="100">
                        @endif
                    </td>
                    <td>
                        <div  style="display: flex">
                            <a href="{{route('productEdit',$product->id)}}" class="btn btn-outline-success" style="margin:0 5px">Edit</a>
                            <form action="{{ route('productDelete',$product->id) }}" method="POST">
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