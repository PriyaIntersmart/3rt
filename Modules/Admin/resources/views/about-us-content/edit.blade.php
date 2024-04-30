@extends('admin::layouts.app')
@section('title', 'Edit About Cms')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card p-1">
            <div class="card-body">
    <!-- form start -->
    <form method="POST" action="{{ route('about-cms.update',@$about_cms->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">About Cms Edit:</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text"
                                        class="form-control @error('title') is-invalid @enderror"
                                        id="title" name="title"
                                        value="{{ old('title',@$about_cms->title) }}">
                                    @error('title')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="subtitle">Sub Title</label>
                                    <input type="text"
                                        class="form-control @error('subtitle') is-invalid @enderror"
                                        id="subtitle" name="subtitle"
                                        value="{{ old('subtitle',@$about_cms->subtitle) }}">
                                    @error('subtitle')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea id="description" name="description"
                                        class="form-control tinymce @error('description') is-invalid @enderror">{{ old('description',@$about_cms->description) }}</textarea>
                                    @error('description')
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
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="work_overview_title">Work Overview Title</label>
                                    <input type="text"
                                        class="form-control @error('work_overview_title') is-invalid @enderror"
                                        id="work_overview_title" name="work_overview_title"
                                        value="{{ old('work_overview_title',@$about_cms->work_overview_title) }}">
                                    @error('work_overview_title')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>



                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="work_overview_description">Work Overview Description</label>
                                    <textarea id="work_overview_description" name="work_overview_description"
                                        class="form-control tinymce @error('work_overview_description') is-invalid @enderror">{{ old('work_overview_description',@$about_cms->work_overview_description) }}</textarea>
                                    @error('work_overview_description')
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
                                    <label for="about_right_description">Section three description</label>
                                    <textarea id="about_right_description" name="about_right_description"
                                        class="form-control tinymce @error('about_right_description') is-invalid @enderror">{{ old('about_right_description',@$about_cms->about_right_description) }}</textarea>
                                    @error('about_right_description')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="about_left_description">Section Four description</label>
                                    <textarea id="about_left_description" name="about_left_description"
                                        class="form-control tinymce @error('about_left_description') is-invalid @enderror">{{ old('about_left_description',@$about_cms->about_left_description) }}</textarea>
                                    @error('about_left_description')
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
                                    <label for="section_one_heading">Section Four Title</label>
                                    <input type="text"
                                        class="form-control @error('section_one_heading') is-invalid @enderror"
                                        id="section_one_heading" name="section_one_heading"
                                        value="{{ old('section_one_heading',@$about_cms->section_one_heading) }}">
                                    @error('section_one_heading')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="section_one_subheading">Section Four Subheading</label>
                                    <input type="text"
                                        class="form-control @error('section_one_subheading') is-invalid @enderror"
                                        id="section_one_subheading" name="section_one_subheading"
                                        value="{{ old('section_one_subheading',@$about_cms->section_one_subheading) }}">
                                    @error('section_one_subheading')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="section_two_heading">Section Five Heading</label>
                                    <input type="text"
                                        class="form-control @error('section_two_heading') is-invalid @enderror"
                                        id="section_two_heading" name="section_two_heading"
                                        value="{{ old('section_two_heading',@$about_cms->section_two_heading) }}">
                                    @error('section_two_heading')
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
                            <h3 class="card-title">Upload  About Image</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group @error('about_image') is-invalid @enderror">
                                            <input type="file" class="form-control  file-preview"
                                                id="about_image" name="about_image">

                                            <div class="pt-3 file-holder"> </div>
                                        </div>
                                        1920 x 750
                                        @error('about_image')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group  image-container-div">
                                        <div class="image-container">
                                            <img src="{{ @$about_cms->aboutUs_value }}" width="120" height="50"
                                                alt="Uploaded Image" id="uploadedImage" class="uploaded-image">

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Upload  About Section Image One</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group @error('about_image_one') is-invalid @enderror">
                                            <input type="file" class="form-control  file-preview"
                                                id="about_image_one" name="about_image_one">

                                            <div class="pt-3 file-holder"> </div>
                                        </div>
                                        1920 x 750
                                        @error('about_image_one')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group  image-container-div">
                                        <div class="image-container">
                                            <img src="{{ @$about_cms->aboutUs_value_one }}" width="120" height="50"
                                                alt="Uploaded Image" id="uploadedImage" class="uploaded-image">

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Upload  About Section Image Two</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group @error('about_image_two') is-invalid @enderror">
                                            <input type="file" class="form-control  file-preview"
                                                id="about_image_two" name="about_image_two">

                                            <div class="pt-3 file-holder"> </div>
                                        </div>
                                        1920 x 750
                                        @error('about_image_two')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group  image-container-div">
                                        <div class="image-container">
                                            <img src="{{@$about_cms->aboutUs_value_two }}" width="120" height="50"
                                                alt="Uploaded Image" id="uploadedImage" class="uploaded-image">

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Upload  work overview One</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group @error('work_overview_imageone') is-invalid @enderror">
                                            <input type="file" class="form-control  file-preview"
                                                id="work_overview_imageone" name="work_overview_imageone">

                                            <div class="pt-3 file-holder"> </div>
                                        </div>
                                        1920 x 750
                                        @error('work_overview_imageone')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group  image-container-div">
                                        <div class="image-container">
                                            <img src="{{ @$about_cms->over_view_image_one }}" width="120" height="50"
                                                alt="Uploaded Image" id="uploadedImage" class="uploaded-image">

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Upload  work overview  Image Two</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group @error('work_overview_imagetwo') is-invalid @enderror">
                                            <input type="file" class="form-control  file-preview"
                                                id="work_overview_imagetwo" name="work_overview_imagetwo">

                                            <div class="pt-3 file-holder"> </div>
                                        </div>
                                        1920 x 750
                                        @error('work_overview_imagetwo')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group  image-container-div">
                                        <div class="image-container">
                                            <img src="{{ @$about_cms->over_view_image_two }}" width="120" height="50"
                                                alt="Uploaded Image" id="uploadedImage" class="uploaded-image">

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Upload  work overview Image Three</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group @error('work_overview_imagethree') is-invalid @enderror">
                                            <input type="file" class="form-control  file-preview"
                                                id="work_overview_imagethree" name="work_overview_imagethree">

                                            <div class="pt-3 file-holder"> </div>
                                        </div>
                                        1920 x 750
                                        @error('work_overview_imagethree')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group  image-container-div">
                                        <div class="image-container">
                                            <img src="{{ @$about_cms->over_view_image_three }}" width="120" height="50"
                                                alt="Uploaded Image" id="uploadedImage" class="uploaded-image">

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Upload work overview Image Four</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="input-group @error('work_overview_imagefour') is-invalid @enderror">
                                            <input type="file" class="form-control  file-preview"
                                                id="work_overview_imagefour" name="work_overview_imagefour">

                                            <div class="pt-3 file-holder"> </div>
                                        </div>
                                        1920 x 750
                                        @error('work_overview_imagefour')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group  image-container-div">
                                        <div class="image-container">
                                            <img src="{{ @$about_cms->over_view_image_four }}" width="120" height="50"
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
