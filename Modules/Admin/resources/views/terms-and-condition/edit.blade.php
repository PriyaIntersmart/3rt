@extends('admin::layouts.app')
@section('title', 'Edit Terms and Condition')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('terms-and-condition.update',@$terms_and_condition->id) }}">Privacy Policy</a></li>
@endsection
@section('content')

    <form method="POST" action="{{ route('terms-and-condition.update', @$terms_and_condition->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card-body mb-0">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="title">Title*</label>
                            <input type="text" class="form-control title @error('title') is-invalid @enderror"
                                id="title" name="title" value="{{ old('title', @$terms_and_condition->title) }}">
                            @error('title')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="sub_title">Subtitle*</label>
                            <input type="text" class="form-control sub_title @error('sub_title') is-invalid @enderror"
                                id="sub_title" name="sub_title" value="{{ old('sub_title', @$terms_and_condition->sub_title) }}">
                            @error('sub_title')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <label for="description"> Description</label>
                            <textarea id="description" name="description" class="form-control  tinymce @error('description') is-invalid @enderror">{{ old('description', @$terms_and_condition->description) }}</textarea>
                            @error('description')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>


                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary" id="submitBtn">update</button>
            </div>
        </div>
        </div>
    </form>
@endsection
