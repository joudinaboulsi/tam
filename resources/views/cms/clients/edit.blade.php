@extends('layouts.admin')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">


        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Edit</h5>
                    <div class="card-body">
                        <form action="{{ route('clientUpdate', $client->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="pt-4">
                                <label for="client_name" class="form-label pb-3">Client Name </label>
                                <input type="text" class="form-control" id="client_name" name="name"
                                    value="{{ $client->name }}" />

                            </div>
                            <div class="pt-4">
                                <label for="website_link" class="form-label pb-3">Website link</label>
                                <input type="text" class="form-control" id="website_link" name="link"
                                    value="{{ $client->link }}" />

                            </div>
                            <div class="pt-4">
                                @if ($client->image)
                                    <img src="{{ asset('assets/client/' . $client->image) }}" width="100">
                                @endif
                            </div>
                            <div class="pt-4">
                                <label for="image" class="form-label pb-3">Image</label>
                                <input type="file" class="form-control" id="image" name="image" />

                            </div>
                            <div class="pt-4">
                                <label for="alt_image" class="form-label pb-3">Alt Image </label>
                                <input type="text" class="form-control" id="alt_image" name="alt_image"
                                    value="{{ $client->alt_image }}" />

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
