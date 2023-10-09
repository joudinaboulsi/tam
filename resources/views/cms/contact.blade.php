@extends('layouts.admin')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">


        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Contact Section</h5>
                    <div class="card-body">
                        <form action="{{ route('contactStore') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="pt-3 pb-3 col-6">
                                    <label for="alt_image" class="form-label">Alt Image</label>
                                    <input type="text" class="form-control" id="alt_image" name="alt_image"
                                        value="{{ $contact->alt_image }}"  />

                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" class="form-control" id="image" name="image"/>

                                </div>

                                <div class="pt-3 pb-3">
                                    @if ($contact->image)
                                        <img src="{{ asset('assets/contact/'.$contact->image) }}" width="100">
                                    @endif

                                </div>


                            </div>
                            <div class="pt-3 pb-3">
                                <label for="subtitle_contact" class="form-label">Subtitle</label>
                                <input type="text" class="form-control" id="subtitle_contact" name="subtitle_contact"
                                    value="{{ $contact->subtitle_contact }}"  />

                            </div>


                            <div class="pt-3 pb-3">
                                <label for="title_contact" class="form-label">Titile</label>
                                <input type="text" class="form-control" id="title_contact" name="title_contact"
                                    value="{{ $contact->title_contact }}"  />

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
