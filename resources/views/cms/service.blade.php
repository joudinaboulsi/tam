@extends('layouts.admin')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">


        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Services Section</h5>
                    <div class="card-body">
                        <form action="{{ route('serviceStore') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="pt-3 pb-3">
                                <label for="subtitle_service" class="form-label">Subtitle</label>
                                <input type="text" class="form-control" id="subtitle_service"
                                    name="subtitle_service" value="{{ $service->subtitle_service }}"
                                     />

                            </div>
                            
                            <div class="pt-3 pb-3">
                                <label for="title_service" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title_service"
                                    name="title_service" value="{{ $service->title_service }}"
                                     />

                            </div>

                            <div class="pt-3 pb-3">
                                <label for="content_service" class="form-label">Content</label>
                                <textarea class="form-control" id="content_service"
                                    name="content_service" 
                                    >{!! $service->content_service !!}</textarea>

                            </div>
                            <div class="row">
                                <div class="pt-3 pb-3 col-6">
                                    <label for="alt_icon1" class="form-label">Alt Icon 1</label>
                                    <input type="text" class="form-control" name="alt_icon1"
                                        value="{{ $service->alt_icon1 }}"  />

                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    <label for="icon1" class="form-label">Icon 1</label>
                                    <input type="file" class="form-control" id="icon1" name="icon1"
                                         />

                                </div>
                                <div class="pt-3 pb-3">
                                    @if ($service->icon1)
                                        <img src="{{ asset('assets/service/'.$service->icon1) }}" width="100">
                                    @endif

                                </div>
                                <div class="pt-3 pb-3 col-6">
                                    <label for="alt_image1" class="form-label">Alt Image 1</label>
                                    <input type="text" class="form-control"  name="alt_image1" id="alt_image1"
                                        value="{{ $service->alt_image1 }}"  />

                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    <label for="image1" class="form-label">Image 1</label>
                                    <input type="file" class="form-control" id="image1" name="image1"
                                         />
                                </div>

                                <div class="pt-3 pb-3">
                                    @if ($service->image1)
                                        <img src="{{ asset('assets/service/'.$service->image1) }}" width="100">
                                    @endif

                                </div>
                                <div class="pt-3 pb-3">
                                    <label for="subtitle1" class="form-label">Subtitle</label>
                                    <input type="text" class="form-control" id="subtitle1"
                                        name="subtitle1" value="{{ $service->subtitle1 }}"
                                         />
    
                                </div>

                            </div>
                            <div class="row">
                                <div class="pt-3 pb-3 col-6">
                                    <label for="alt_icon2" class="form-label">Alt Icon 2</label>
                                    <input type="text" class="form-control" id="alt_icon2" name="alt_icon2"
                                        value="{{ $service->alt_icon2 }}"  />

                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    <label for="icon2" class="form-label">Icon2</label>
                                    <input type="file" class="form-control" id="icon2" name="icon2"
                                         />
                                </div>

                                <div class="pt-3 pb-3">
                                    @if ($service->icon2)
                                        <img src="{{ asset('assets/service/'.$service->icon2) }}" width="100">
                                    @endif

                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    <label for="alt_image2" class="form-label">Alt Image 2</label>
                                    <input type="text" class="form-control" id="alt_image2" name="alt_image2"
                                        value="{{ $service->alt_image2 }}" />

                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    <label for="image2" class="form-label">Image 2</label>
                                    <input type="file" class="form-control" id="image2" name="image2"
                                         />
                                </div>

                                <div class="pt-3 pb-3">
                                    @if ($service->image2)
                                        <img src="{{ asset('assets/service/'.$service->image2) }}" width="100">
                                    @endif

                                </div>
                                <div class="pt-3 pb-3">
                                    <label for="subtitle2" class="form-label">Subtitle</label>
                                    <input type="text" class="form-control" id="subtitle2"
                                        name="subtitle2" value="{{ $service->subtitle2 }}"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="pt-3 pb-3 col-6">
                                    <label for="alt_icon3" class="form-label">Alt Icon 3</label>
                                    <input type="text" class="form-control" id="alt_icon3" name="alt_icon3"
                                        value="{{ $service->alt_icon3 }}"  />

                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    <label for="icon3" class="form-label">Icon3</label>
                                    <input type="file" class="form-control" id="icon3" name="icon3"/>

                                </div>

                                <div class="pt-3 pb-3">
                                    @if ($service->icon3)
                                        <img src="{{ asset('assets/service/'.$service->icon3) }}" width="100">
                                    @endif

                                </div>


                                <div class="pt-3 pb-3 col-6">
                                    <label for="alt_image3" class="form-label">Alt Image 3</label>
                                    <input type="text" class="form-control" id="alt_image3" name="alt_image3"
                                        value="{{ $service->alt_image3 }}"  />

                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    <label for="image3" class="form-label">Image 3</label>
                                    <input type="file" class="form-control" id="image3" name="image3" />

                                </div>

                                <div class="pt-3 pb-3">
                                    @if ($service->image3)
                                        <img src="{{ asset('assets/service/'.$service->image3) }}" width="100">
                                    @endif

                                </div>

                                <div class="pt-3 pb-3">
                                    <label for="subtitle3" class="form-label">Subtitle</label>
                                    <input type="text" class="form-control" id="subtitle3"
                                        name="subtitle3" value="{{ $service->subtitle3 }}" />
    
                                </div>
                            </div>
                            <div class="row">
                                <div class="pt-3 pb-3 col-6">
                                    <label for="alt_icon4" class="form-label">Alt Icon 4</label>
                                    <input type="text" class="form-control" id="alt_icon4" name="alt_icon4"
                                        value="{{ $service->alt_icon4 }}"  />

                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    <label for="icon4" class="form-label">Icon4</label>
                                    <input type="file" class="form-control" id="icon4" name="icon4"
                                         />

                                </div>

                                <div class="pt-3 pb-3">
                                    @if ($service->icon4)
                                        <img src="{{ asset('assets/service/'.$service->icon4) }}" width="100">
                                    @endif

                                </div>


                                <div class="pt-3 pb-3 col-6">
                                    <label for="alt_image4" class="form-label">Alt Image 4</label>
                                    <input type="text" class="form-control" id="alt_image4" name="alt_image4"
                                        value="{{ $service->alt_image4 }}"  />

                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    <label for="image4" class="form-label">Image 4</label>
                                    <input type="file" class="form-control" id="image4" name="image4"
                                         />

                                </div>

                                <div class="pt-3 pb-3">
                                    @if ($service->image4)
                                        <img src="{{ asset('assets/service/'.$service->image4) }}" width="100">
                                    @endif

                                </div>

                                <div class="pt-3 pb-3">
                                    <label for="subtitle4" class="form-label">Subtitle</label>
                                    <input type="text" class="form-control" id="subtitle4"
                                        name="subtitle4" value="{{ $service->subtitle4 }}"
                                         />
    
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
