@extends('layouts.admin')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Mission Section</h5>
                    <div class="card-body">
                        <form action="{{ route('missionStore') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="pt-3 pb-3">
                                <label for="title_mission" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title_mission" name="title_mission"
                                    value="{{ $mission->title_mission }}" />

                            </div>

                            <div class="pt-3 pb-3">
                                <label for="content_mission" class="form-label">Content</label>
                                <textarea class="form-control" id="content_mission" name="content_mission">{!! $mission->content_mission !!}</textarea>

                            </div>


                            <div class="pt-3 pb-3">
                                <label for="title1" class="form-label">Title 1</label>
                                <input type="text" class="form-control" id="title1" name="title1"
                                    value="{{ $mission->title1 }}" />

                            </div>

                            <div class="pt-3 pb-3">
                                <label for="p1" class="form-label">Content 1</label>
                                <textarea class="form-control" id="p1" name="p1">{!! $mission->p1 !!}</textarea>

                            </div>

                            <div class="pt-3 pb-3">
                                <label for="title2" class="form-label">Title 2</label>
                                <input type="text" class="form-control" id="title2" name="title2"
                                    value="{{ $mission->title2 }}" />
                            </div>

                            <div class="pt-3 pb-3">
                                <label for="p2" class="form-label">Content 2</label>
                                <textarea class="form-control" id="p2" name="p2">{!! $mission->p2 !!}</textarea>
                            </div>

                            <div class="pt-3 pb-3">
                                <label for="title3" class="form-label">Title 3</label>
                                <input type="text" class="form-control" id="title3" name="title3"
                                    value="{{ $mission->title3 }}" />
                            </div>

                            <div class="pt-3 pb-3">
                                <label for="p3" class="form-label">Content 3</label>
                                <textarea class="form-control" id="p3" name="p3">{!! $mission->p3 !!}</textarea>

                            </div>

                            <div class="pt-3 pb-3">
                                <label for="title4" class="form-label">Title 4</label>
                                <input type="text" class="form-control" id="title4" name="title4"
                                    value="{{ $mission->title4 }}" />

                            </div>

                            <div class="pt-3 pb-3">
                                <label for="p4" class="form-label">Content 4</label>
                                <textarea class="form-control" id="p4" name="p4">{!! $mission->p4 !!}</textarea>

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="scrollTo" class="form-label">ScrollToLink</label>
                                <input type="text" class="form-control" id="scrollTo" name="scrollTo"
                                    value="{{ $mission->scrollTo }}" />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="btn" class="form-label">Text Button</label>
                                <input type="text" class="form-control" id="btn" name="btn"
                                    value="{{ $mission->btn }}" />

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
