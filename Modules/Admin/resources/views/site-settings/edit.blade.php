@extends('admin::layouts.app')
@section('title', 'Edit Site Common Content')
@section('content')
    <!-- form start -->
    @if($errors->any())
    {{ implode('', $errors->all('<div>:message</div>')) }}
@endif
    <form method="POST" action="{{ route('site-common-content.update',$site_common_content->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <h5 class="card-header bg-light-subtle">Edit Site Common Content</h5>
                    <div class="card-body">
                        <div class="row">
                            {{-- <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="facebook_link">Facebook Link</label>
                                    <input type="text"
                                        class="form-control facebook_link @error('facebook_link') is-invalid @enderror" id="facebook_link"
                                        name="facebook_link" value="{{ old('facebook_link', $site_common_content->facebook_link) }}">
                                    @error('facebook_link')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="instagram_link">Instagram Link</label>
                                    <input type="text"
                                        class="form-control instagram_link @error('instagram_link') is-invalid @enderror" id="instagram_link"
                                        name="instagram_link" value="{{ old('instagram_link', $site_common_content->instagram_link) }}">
                                    @error('instagram_link')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="youtube_link">Youtube Link</label>
                                    <input type="text"
                                        class="form-control youtube_link @error('youtube_link') is-invalid @enderror" id="youtube_link"
                                        name="youtube_link" value="{{ old('youtube_link', $site_common_content->youtube_link) }}">
                                    @error('youtube_link')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="twitter_link">Twitter Link</label>
                                    <input type="text"
                                        class="form-control twitter_link @error('twitter_link') is-invalid @enderror" id="twitter_link"
                                        name="twitter_link" value="{{ old('twitter_link', $site_common_content->twitter_link) }}">
                                    @error('twitter_link')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="linkedin_link">Linkedin Link</label>
                                    <input type="text"
                                        class="form-control linkedin_link @error('linkedin_link') is-invalid @enderror" id="linkedin_link"
                                        name="linkedin_link" value="{{ old('linkedin_link', $site_common_content->linkedin_link) }}">
                                    @error('linkedin_link')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="map_link">Map Link</label>
                                    <input type="text"
                                        class="form-control map_link @error('map_link') is-invalid @enderror" id="map_link"
                                        name="map_link" value="{{ old('map_link', $site_common_content->map_link) }}">
                                    @error('map_link')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div> --}}
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="text"
                                        class="form-control phone @error('phone') is-invalid @enderror" id="phone"
                                        name="phone" value="{{ old('phone', $site_common_content->phone) }}">
                                    @error('phone')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text"
                                        class="form-control email @error('email') is-invalid @enderror" id="email"
                                        name="email" value="{{ old('email', $site_common_content->email) }}">
                                    @error('email')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="whatsapp_number">Whatsapp Number</label>
                                    <input type="text"
                                        class="form-control whatsapp_number @error('whatsapp_number') is-invalid @enderror" id="whatsapp_number"
                                        name="whatsapp_number" value="{{ old('whatsapp_number', $site_common_content->whatsapp_number) }}">
                                    @error('whatsapp_number')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="enquiry_receive_email">Enquiry Recieve Email</label>
                                    <input type="text"
                                        class="form-control enquiry_receive_email @error('enquiry_receive_email') is-invalid @enderror" id="enquiry_receive_email"
                                        name="enquiry_receive_email" value="{{ old('enquiry_receive_email', $site_common_content->enquiry_receive_email) }}">
                                    @error('enquiry_receive_email')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <textarea type="text"
                                        class="form-control address @error('address') is-invalid @enderror" id="address"
                                        name="address" >{{ old('address', $site_common_content->address) }}</textarea>
                                    @error('address')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>



                        </div>



                        <button type="submit" class="btn btn-primary" id="submitBtn">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
