@extends('layouts.admin')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Seo</h5>
                    <div class="card-body">
                        <form action="{{ route('seoStore') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="pt-3 pb-3">
                                <label for="meta_title" class="form-label">meta title</label>
                                <input type="text" class="form-control" id="meta_title" name="meta_title"  value="{{ $seo->meta_title }}" />
                            </div>

                            <div class="pt-3 pb-3">
                                <label for="meta_keywords" class="form-label">Meta keywords</label>
                                <textarea  class="form-control" id="meta_keywords" name="meta_keywords"
                                  >{!!  $seo->meta_keywords !!}</textarea>

                            </div>

                            <div class="pt-3 pb-3">
                                <label for="meta_description" class="form-label">Meta description</label>
                                <textarea  class="form-control" id="meta_description" name="meta_description"
                                >{!! $seo->meta_description !!}</textarea>
                            </div>
                           
                            <div class="row">
                               
                                <div class="pt-3 pb-3">
                                    <label for="image" class="form-label">Image </label>
                                    <input type="file" class="form-control" id="image" name="image"
                                        />
                                </div>
                                <div class="pt-3 pb-3">
                                    @if ($seo->image)
                                        <img src="{{ asset('assets/seo/'.$seo->image) }}" width="100">
                                    @endif
                                </div>
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
