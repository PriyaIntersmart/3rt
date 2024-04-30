@extends('admin::layouts.app')
@section('title', 'Edit Home Cms')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card p-1">
            <div class="card-body">
    <!-- form start -->
    <form method="POST" action="{{ route('home-cms.update',$home_cms->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Home Cms Edit:</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="section_one_title">Section One Title</label>
                                    <input type="text"
                                        class="form-control @error('section_one_title') is-invalid @enderror"
                                        id="section_one_title" name="section_one_title"
                                        value="{{ old('section_one_title',@$home_cms->section_one_title) }}">
                                    @error('section_one_title')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="section_one_subtitle">Section one Sub Title</label>
                                    <input type="text"
                                        class="form-control @error('section_one_subtitle') is-invalid @enderror"
                                        id="section_one_subtitle" name="section_one_subtitle"
                                        value="{{ old('section_one_subtitle',@$home_cms->section_one_subtitle) }}">
                                            <span>use span tag for styling</span>
                                        @error('section_one_subtitle')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="section_one_description">Section One Description</label>
                                    <textarea id="section_one_description" name="section_one_description"
                                        class="form-control tinymce @error('section_one_description') is-invalid @enderror">{{ old('section_one_description', @$home_cms->section_one_description) }}</textarea>
                                    @error('section_one_description')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>





                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Section Two</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="section_two_title">Section Two Title</label>
                                    <input type="text"
                                        class="form-control @error('section_two_title') is-invalid @enderror"
                                        id="section_two_title" name="section_two_title"
                                        value="{{ old('section_two_title',@$home_cms->section_two_title) }}">
                                    @error('section_two_title')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="section_two_button_title">Section Two Button Title</label>
                                    <input type="text"
                                        class="form-control @error('section_two_button_title') is-invalid @enderror"
                                        id="section_two_button_title" name="section_two_button_title"
                                        value="{{ old('section_two_button_title',@$home_cms->section_two_button_title) }}">
                                    @error('section_two_button_title')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="section_two_description">Section Two Description</label>
                                    <textarea id="section_two_description" name="section_two_description"
                                        class="form-control tinymce @error('section_two_description') is-invalid @enderror">{{ old('section_two_description', @$home_cms->section_two_description) }}</textarea>
                                    @error('section_two_description')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Section Three</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="section_three_title">Section Three Title</label>
                                    <input type="text"
                                        class="form-control @error('section_three_title') is-invalid @enderror"
                                        id="section_three_title" name="section_three_title"
                                        value="{{ old('section_three_title',@$home_cms->section_three_title) }}">
                                    @error('section_three_title')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>



                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="section_three_description">Section Three Description</label>
                                    <textarea id="section_three_description" name="section_three_description"
                                        class="form-control tinymce @error('section_three_description') is-invalid @enderror">{{ old('section_three_description', @$home_cms->section_three_description) }}</textarea>
                                    @error('section_three_description')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Section Four</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="section_four_title">Section Four Title</label>
                                    <input type="text"
                                        class="form-control @error('section_four_title') is-invalid @enderror"
                                        id="section_four_title" name="section_four_title"
                                        value="{{ old('section_four_title',@$home_cms->section_four_title) }}">
                                    @error('section_four_title')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="section_four_button_title">Section Four Button Title</label>
                                    <input type="text"
                                        class="form-control @error('section_four_button_title') is-invalid @enderror"
                                        id="section_four_button_title" name="section_four_button_title"
                                        value="{{ old('section_four_button_title',@$home_cms->section_four_button_title) }}">
                                    @error('section_four_button_title')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>



                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="section_four_description">Section Four Description</label>
                                    <textarea id="section_four_description" name="section_four_description"
                                        class="form-control tinymce @error('section_four_description') is-invalid @enderror">{{ old('section_four_description', @$home_cms->section_four_description) }}</textarea>
                                    @error('section_four_description')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
            <div class="col-md-4">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Upload  Section One Image</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group @error('section_one_image') is-invalid @enderror">
                                            <input type="file" class="form-control  file-preview"
                                                id="section_one_image" name="section_one_image">

                                            <div class="pt-3 file-holder"> </div>
                                        </div>
                                        1920 x 750
                                        @error('section_one_image')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group  image-container-div">
                                        <div class="image-container">
                                            <img src="{{ @$home_cms->section_one_value }}" width="120" height="50"
                                                alt="Uploaded Image" id="uploadedImage" class="uploaded-image">

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Upload  Section Two Image One</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group @error('section_two_imageone') is-invalid @enderror">
                                            <input type="file" class="form-control  file-preview"
                                                id="section_two_imageone" name="section_two_imageone">

                                            <div class="pt-3 file-holder"> </div>
                                        </div>
                                        1920 x 750
                                        @error('section_two_imageone')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group  image-container-div">
                                        <div class="image-container">
                                            <img src="{{ @$home_cms->section_two_value_one }}" width="120" height="50"
                                                alt="Uploaded Image" id="uploadedImage" class="uploaded-image">

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Upload  Section Two Image Two</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group @error('section_two_imagetwo') is-invalid @enderror">
                                            <input type="file" class="form-control  file-preview"
                                                id="section_two_imagetwo" name="section_two_imagetwo">

                                            <div class="pt-3 file-holder"> </div>
                                        </div>
                                        1920 x 750
                                        @error('section_two_imagetwo')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group  image-container-div">
                                        <div class="image-container">
                                            <img src="{{ @$home_cms->section_two_value_two }}" width="120" height="50"
                                                alt="Uploaded Image" id="uploadedImage" class="uploaded-image">

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Upload  Section Two Image Three</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group @error('section_two_imagethree') is-invalid @enderror">
                                            <input type="file" class="form-control  file-preview"
                                                id="section_two_imagethree" name="section_two_imagethree">

                                            <div class="pt-3 file-holder"> </div>
                                        </div>
                                        1920 x 750
                                        @error('section_two_imagethree')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group  image-container-div">
                                        <div class="image-container">
                                            <img src="{{ @$home_cms->section_two_value_three }}" width="120" height="50"
                                                alt="Uploaded Image" id="uploadedImage" class="uploaded-image">
                                            {{-- <div style="display:inline-block;">
                                            <a href="javascript:void(0)"><i class="fa fa-times text-red deleteImg" data-model="AboutCommonContent" data-column="employee_section_bg_image" data-id="{{$about->id}}"></i></a>
                                        </div> --}}
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Upload  Section Three Image</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group @error('section_three_image') is-invalid @enderror">
                                            <input type="file" class="form-control  file-preview"
                                                id="section_three_image" name="section_three_image">

                                            <div class="pt-3 file-holder"> </div>
                                        </div>
                                        1920 x 750
                                        @error('section_three_image')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group  image-container-div">
                                        <div class="image-container">
                                            <img src="{{ @$home_cms->section_three_value }}" width="120" height="50"
                                                alt="Uploaded Image" id="uploadedImage" class="uploaded-image">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary" id="submitBtn">update</button>
            </div>
    </form>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
    <script>
        $(function() {
            // Summernote
            $('#section_one_description,#lifecycle_section_description')
                .summernote({
                    minHeight: 200,
                })
        })
    </script>
@endpush
