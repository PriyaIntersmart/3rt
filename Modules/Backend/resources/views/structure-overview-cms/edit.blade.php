@extends('backend::layouts.app')
@section('title', 'Edit Structure Overview Cms')
@section('content')

<div class=card>
    <div class="card-header">Edit Structure Cms</div>
    <form method="POST" action="{{ route('structure-overview.update',$structure_cms->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Structure OverView Edit:</h3>
                    </div>
                    <div class="card-body">
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="left_section_title">left Side Section Title</label>
                                <input type="text"
                                    class="form-control left_section_title @error('left_section_title') is-invalid @enderror"
                                    id="left_section_title" name="left_section_title"
                                    value="{{ old('left_section_title', @$structure_cms->left_section_title) }}">
                                @error('left_section_title')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="left_section_content"> left Sideleft_section_content</label>
                                <textarea id="left_section_content" name="left_section_content"
                                    class="form-control  tinymce @error('left_section_content') is-invalid @enderror">{{ old('left_section_content', @$structure_cms->left_section_content) }}</textarea>
                                @error('left_section_content')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="right_section_title">right Side Section Title</label>
                                <input type="text"
                                    class="form-control right_section_title @error('right_section_title') is-invalid @enderror"
                                    id="right_section_title" name="right_section_title"
                                    value="{{ old('right_section_title', @$structure_cms->right_section_title) }}">
                                @error('right_section_title')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="right_section_content">Right Side right_section_content</label>
                                <textarea id="right_section_content" name="right_section_content"
                                    class="form-control  tinymce @error('right_section_content') is-invalid @enderror">{{ old('right_section_content', @$structure_cms->right_section_content) }}</textarea>
                                @error('right_section_content')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="section_one_heading">Section One Heading</label>
                                <input type="text"
                                    class="form-control section_one_heading @error('section_one_heading') is-invalid @enderror"
                                    id="section_one_heading" name="section_one_heading"
                                    value="{{ old('section_one_heading', @$structure_cms->section_one_heading) }}">
                                @error('section_one_heading')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="section_one_subtitle_one">Section One Subtitle One</label>
                                <input type="text"
                                    class="form-control section_one_subtitle_one @error('section_one_subtitle_one') is-invalid @enderror"
                                    id="section_one_subtitle_one" name="section_one_subtitle_one"
                                    value="{{ old('section_one_subtitle_one', @$structure_cms->section_one_subtitle_one) }}">
                                @error('section_one_subtitle_one')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="section_one_subtitle_two">Section One Subtitle Two</label>
                                <input type="text"
                                    class="form-control section_one_subtitle_two @error('section_one_subtitle_two') is-invalid @enderror"
                                    id="section_one_subtitle_two" name="section_one_subtitle_two"
                                    value="{{ old('section_one_subtitle_two', @$structure_cms->section_one_subtitle_two) }}">
                                @error('section_one_subtitle_two')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="section_two_heading">Section Two Heading</label>
                                <input type="text"
                                    class="form-control section_two_heading @error('section_two_heading') is-invalid @enderror"
                                    id="section_two_heading" name="section_two_heading"
                                    value="{{ old('section_two_heading', @$structure_cms->section_two_heading) }}">
                                @error('section_two_heading')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Upload  Left Section  Image</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="input-group @error('section_one_image') is-invalid @enderror">
                                        <input type="file" class="form-control  file-preview"
                                            id="left_section_image" name="left_section_image">

                                        <div class="pt-3 file-holder"> </div>
                                    </div>
                                    1920 x 750
                                    @error('left_section_image')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group  image-container-div">
                                    <div class="image-container">
                                        <img src="{{ @$structure_cms->image_value }}" width="120" height="50"
                                            alt="Uploaded Image" id="uploadedImage" class="uploaded-image">

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Upload Section One Image</h3>
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
                                        <img src="{{ @$structure_cms->image_value_one }}" width="120" height="50"
                                            alt="Uploaded Image" id="uploadedImage" class="uploaded-image">

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Upload Section Two Image</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="input-group @error('section_two_image') is-invalid @enderror">
                                        <input type="file" class="form-control  file-preview"
                                            id="section_two_image" name="section_two_image">

                                        <div class="pt-3 file-holder"> </div>
                                    </div>
                                    1920 x 750
                                    @error('section_two_image')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group  image-container-div">
                                    <div class="image-container">
                                        <img src="{{ @$structure_cms->image_value_two }}" width="120" height="50"
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
