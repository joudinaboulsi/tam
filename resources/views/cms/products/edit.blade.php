@extends('layouts.admin')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Edit</h5>
                <div class="card-body">
                  <form action="{{ route('productUpdate',$product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="pt-4">
                        @if($product->image)
                        <img src="{{ asset('assets/product/'.$product->image) }}" width="100">
                        @endif
                    </div>
                    <div class="pt-4">
                        <label for="image_product" class="form-label pb-3">Image</label>
                        <input type="file" class="form-control" id="image_product" name="image"   />
                    
                    </div>
                    <div class="pt-4">
                        <label for="image_product_alt" class="form-label pb-3">Alt Image </label>
                        <input type="text" class="form-control" id="image_product_alt" name="alt_image"  value="{{ $product->alt_image }}" />
                    
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




