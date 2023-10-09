@extends('layouts.admin')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Vision Section</h5>
                    <div class="card-body">
                        <form action="{{ route('visionStore') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="pt-3 pb-3">
                                <label for="subtitle_vision" class="form-label">Subtitle</label>
                                <input type="text" class="form-control" id="subtitle_vision" name="subtitle_vision"
                                    value="{{ $vision->subtitle_vision }}" />

                            </div>


                            <div class="pt-3 pb-3">
                                <label for="title_vision" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title_vision" name="title_vision"
                                    value="{{ $vision->title_vision }}" />

                            </div>


                            <div class="pt-3 pb-3">
                                <label for="content_vision" class="form-label">Content</label>
                                <textarea class="form-control" id="content_vision" name="content_vision">{!! $vision->content_vision !!}</textarea>

                            </div>

                            <div class="row">
                                <div class="pt-3 pb-3 col-6">
                                    <label for="alt_image" class="form-label">Alt Image</label>
                                    <input type="text" class="form-control" id="file" name="alt_image"
                                        value="{{ $vision->alt_image }}" />

                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" class="form-control" id="file" name="image" />

                                </div>

                                <div class="pt-3 pb-3">
                                    @if ($vision->image)
                                        <img src="{{ asset('assets/about/' . $vision->image) }}" width="100">
                                    @endif
                                </div>
                            </div>

                            <div class="row">

                                <div class="pt-3 pb-3 col-6">
                                    <label for="count1" class="form-label">Counter 1</label>
                                    <input type="text" class="form-control" id="count1" name="count1"
                                        value="{{ $vision->count1 }}" />

                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    <label for="title1" class="form-label">subtitle 1</label>
                                    <input type="text" class="form-control" id="title1" name="title1"
                                        value="{{ $vision->title1 }}" />

                                </div>
                            </div>

                            <div class="row">


                                <div class="pt-3 pb-3 col-6">
                                    <label for="count2" class="form-label">Counter 2</label>
                                    <input type="text" class="form-control" id="count2" name="count2"
                                        value="{{ $vision->count2 }}" />

                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    <label for="title2" class="form-label">subtitle 2</label>
                                    <input type="text" class="form-control" id="title2" name="title2"
                                        value="{{ $vision->title2 }}" />

                                </div>

                            </div>

                            <div class="row">

                                <div class="pt-3 pb-3 col-6">
                                    <label for="count3" class="form-label">Counter 3</label>
                                    <input type="text" class="form-control" id="count3" name="count3"
                                        value="{{ $vision->count3 }}" />

                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    <label for="title3" class="form-label">subtitle 3</label>
                                    <input type="text" class="form-control" id="title3" name="title3"
                                        value="{{ $vision->title3 }}" />

                                </div>

                            </div>

                            <div class="row">

                                <div class="pt-3 pb-3 col-6">
                                    <label for="count4" class="form-label">Counter 4</label>
                                    <input type="text" class="form-control" id="count4" name="count4"
                                        value="{{ $vision->count4 }}" />

                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    <label for="title4" class="form-label">subtitle 4</label>
                                    <input type="text" class="form-control" id="title4" name="title4"
                                        value="{{ $vision->title4 }}" />

                                </div>

                            </div>

                            <div class="row">

                                <div class="pt-3 pb-3 col-6">
                                    <label for="count5" class="form-label">Counter 5</label>
                                    <input type="text" class="form-control" id="count5" name="count5"
                                        value="{{ $vision->count5 }}" />
                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    <label for="title5" class="form-label">subtitle 5</label>
                                    <input type="text" class="form-control" id="title5" name="title5"
                                        value="{{ $vision->title5 }}" />

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
