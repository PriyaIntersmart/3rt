@extends('backend::layouts.app')
@section('title', ' Banner Management')
@section('content')
<div class="card">
    <div class="card-header">
        Edit Banner Cms:
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('home-banner.update', $home_banner->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="title">Title*</label>
                        <input type="text" class="form-control title @error('title') is-invalid @enderror" id="title"
                            name="title" value="{{ old('title', $home_banner->title) }}">
                        @error('title')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="subtitle">Subtitle</label>
                        <input type="text" class="form-control subtitle @error('subtitle') is-invalid @enderror"
                            id="subtitle" name="subtitle" value="{{ old('subtitle', $home_banner->subtitle) }}">
                        @error('subtitle')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="button_title">Button Title</label>
                        <input type="text" class="form-control button_title @error('button_title') is-invalid @enderror"
                            id="button_title" name="button_title"
                            value="{{ old('button_title', $home_banner->button_title) }}">
                        @error('button_title')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>



                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="banner_image" class="form-label">Image*</label>
                        <input type="file" name="banner_image" id="banner_image" accept="image/*"
                            class="form-control file-input-preview @error('banner_image') is-invalid @enderror">
                        @error('banner_image')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                        <span class="file-dimension-span">*Dimension 976 × 403</span>
                        <div class="filePreview">
                            <img src="{{ $home_banner->image_value }}" alt="image" class="img-fluid" width="120" />
                        </div>
                    </div>
                </div>





                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="meta_keywords">Meta Keywords</label>
                        <textarea id="meta_keywords" name="meta_keywords" class="form-control   @error('meta_keywords') is-invalid @enderror">{{ old('meta_keywords', @$home_banner->meta_keywords) }}</textarea>

                        @error('meta_keywords')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="meta_description">Meta Description</label>
                        <textarea id="meta_description" name="meta_description"
                            class="form-control   @error('meta_description') is-invalid @enderror">{{ old('meta_description', @$home_banner->meta_description) }}</textarea>
                        @error('meta_description')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="other_meta_keywords">Other Meta Keywords</label>
                        <textarea id="other_meta_keywords" name="other_meta_keywords"
                            class="form-control   @error('other_meta_keywords') is-invalid @enderror">{{ old('other_meta_keywords', @$home_banner->other_meta_keywords) }}</textarea>
                        @error('other_meta_keywords')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="meta_title">Meta Title</label>
                        <input type="text" class="form-control meta_title @error('meta_title') is-invalid @enderror"
                            id="meta_title" name="meta_title" value="{{ old('meta_title', @$home_banner->meta_title) }}">
                        @error('meta_title')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary" id="submitBtn">update</button>
            </div>

        </form>
    </div>
</div>
    @endsection
