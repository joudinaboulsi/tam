@extends('layouts.admin')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Settings Page</h5>
                    <div class="card-body">
                        <form action="{{ route('settingsStore') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="pt-3 pb-3 col-6">
                                    <label for="alt_logo" class="form-label">Alt Logo</label>
                                    <input type="text" class="form-control" id="alt_logo" name="alt_logo"
                                        value="{{ $settings->alt_logo }}"  />

                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    <label for="logo" class="form-label">Logo</label>
                                    <input type="file" class="form-control" id="logo" name="logo"/>

                                </div>

                                <div class="pt-3 pb-3">
                                    @if ($settings->logo)
                                        <img src="{{ asset('assets/logo/'.$settings->logo) }}" width="100">
                                    @endif
                                </div>
                            </div>

                            <div class="pt-3 pb-3">
                                <label for="logo_title" class="form-label"> Logo Text</label>
                                <input type="text" class="form-control" id="logo_title" name="logo_title"
                                    value="{{ $settings->logo_title }}"  />
                            </div>

                            <div class="pt-3 pb-3">
                                <label for="scrollToLinkText" class="form-label">scrollToLinkText</label>
                                <input type="text" class="form-control" id="scrollToLinkText" name="scrollToLinkText"
                                    value="{{ $settings->scrollToLinkText }}"  />
                            </div>
                            <div class="pt-3 pb-3">
                                <label for="scrollToLink" class="form-label">scrollToLink</label>
                                <input type="text" class="form-control" id="scrollToLink" name="scrollToLink"
                                    value="{{ $settings->scrollToLink }}"  />
                            </div>
                            <div class="pt-3 pb-3">
                                <label for="email1" class="form-label">Email 1</label>
                                <input type="email" class="form-control" id="email1" name="email1"
                                    value="{{ $settings->email1 }}"  />
                            </div>
                            <div class="pt-3 pb-3">
                                <label for="email2" class="form-label">Email 2</label>
                                <input type="email" class="form-control" id="email2" name="email2"
                                    value="{{ $settings->email2 }}"  />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="phone1" class="form-label">phone 1</label>
                                <input type="text" class="form-control" id="phone1" name="phone1"
                                    value="{{ $settings->phone1 }}"  />
                            </div>
                            <div class="pt-3 pb-3">
                                <label for="tel1" class="form-label">Tel</label>
                                <input type="text" class="form-control" id="tel1" name="tel1"
                                    value="{{ $settings->tel1 }}"  />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="phone2" class="form-label">phone 2</label>
                                <input type="text" class="form-control" id="phone2" name="phone2"
                                    value="{{ $settings->phone2 }}"  />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="whatsap_link" class="form-label">whatsap link</label>
                                <input type="text" class="form-control" id="whatsap_link" name="whatsap_link"
                                    value="{{ $settings->whatsap_link }}"  />
                            </div>
                            <div class="pt-3 pb-3">
                                <label for="location" class="form-label"> Address</label>
                                <input type="text" class="form-control" id="location" name="location"
                                    value="{{ $settings->location }}"  />
                            </div>

                            <div class="pt-3 pb-3">
                                <label for="map" class="form-label"> Map</label>
                                <input type="text" class="form-control" id="map" name="map"
                                    value="{{ $settings->map }}"  />
                            </div>

                            <div class="pt-3 pb-3">
                                <label for="instagram" class="form-label">Instagram</label>
                                <input type="text" class="form-control" id="instagram"
                                    name="instagram" value="{{ $settings->instagram }}"
                                     />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="linkedin" class="form-label">LinkedIn</label>
                                <input type="text" class="form-control" id="linkedin"
                                    name="linkedin" value="{{ $settings->linkedin }}"
                                     />

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
