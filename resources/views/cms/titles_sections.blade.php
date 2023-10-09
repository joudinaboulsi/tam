@extends('layouts.admin')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Titles Section</h5>
                    <div class="card-body">
                        <form action="{{ route('titleStore') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                          
                            <div class="pt-3 pb-3">
                                <label for="title_product" class="form-label">Title Product</label>
                                <input type="text" class="form-control" id="title_product" name="title_product"
                                    value="{{ $title->title_product}}" />

                            </div>

                
                            <div class="pt-3 pb-3">
                                <label for="subtitle_project" class="form-label">Subtitle Projoct</label>
                                <input type="text" class="form-control" id="subtitle_project" name="subtitle_project"
                                    value="{{ $title->subtitle_project }}" />

                            </div>


                            <div class="pt-3 pb-3">
                                <label for="title_project" class="form-label">Title Project</label>
                                <input type="text" class="form-control" id="title_project" name="title_project"
                                    value="{{ $title->title_project }}" />

                            </div>

                            <div class="pt-3 pb-3">
                                <label for="title_client" class="form-label">Title Client</label>
                                <input type="text" class="form-control" id="title_client" name="title_client"
                                    value="{{ $title->title_client }}" />

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
