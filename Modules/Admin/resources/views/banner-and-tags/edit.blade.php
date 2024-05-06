@extends('admin::layouts.app')
@section('title', ' Banner And Meta Tags')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card p-1">
                <div class="card-body">
                    <form method="POST" action="{{ route('bannerandmetatag.update', $bannerandmetatags->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="page">Page*</label>
                                    <input type="text" class="form-control page @error('page') is-invalid @enderror"
                                        id="page" name="page" value="{{ old('page', @$bannerandmetatags->page) }}"
                                        readonly>
                                    @error('page')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="page_title">Page title</label>
                                    <input type="text"
                                        class="form-control page_title @error('page_title') is-invalid @enderror"
                                        id="page_title" name="page_title"
                                        value="{{ old('page_title', @$bannerandmetatags->page_title) }}">
                                    @error('page_title')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="banner_title">Banner Title</label>
                                    <input type="text"
                                        class="form-control banner_title @error('banner_title') is-invalid @enderror"
                                        id="banner_title" name="banner_title"
                                        value="{{ old('banner_title', @$bannerandmetatags->banner_title) }}">
                                    @error('banner_title')
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
                                        <img src="{{ @$bannerandmetatags->image_value }}" alt="image" class="img-fluid"
                                            width="120" />
                                    </div>
                                </div>
                            </div>





                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="meta_keywords">Meta Keywords</label>
                                    <textarea id="meta_keywords" name="meta_keywords" class="form-control   @error('meta_keywords') is-invalid @enderror">{{ old('meta_keywords', @$bannerandmetatags->meta_keywords) }}</textarea>

                                    @error('meta_keywords')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="meta_description">Meta Description</label>
                                    <textarea id="meta_description" name="meta_description"
                                        class="form-control   @error('meta_description') is-invalid @enderror">{{ old('meta_description', @$bannerandmetatags->meta_description) }}</textarea>
                                    @error('meta_description')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="other_meta_keywords">Other Meta Keywords</label>
                                    <textarea id="other_meta_keywords" name="other_meta_keywords"
                                        class="form-control   @error('other_meta_keywords') is-invalid @enderror">{{ old('other_meta_keywords', @$bannerandmetatags->other_meta_keywords) }}</textarea>
                                    @error('other_meta_keywords')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="meta_title">Meta Title</label>
                                    <input type="text"
                                        class="form-control meta_title @error('meta_title') is-invalid @enderror"
                                        id="meta_title" name="meta_title"
                                        value="{{ old('meta_title', @$bannerandmetatags->meta_title) }}">
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
