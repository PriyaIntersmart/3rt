@extends('admin::layouts.app')
@section('title', 'Edit Privacy Policy')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('privacy-policy.update',@$privacy_policy->id) }}">Privacy Policy</a></li>
@endsection
@section('content')

    <form method="POST" action="{{ route('privacy-policy.update', @$privacy_policy->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card-header">
                Edit Privacy Policy'
     </div>
            <div class="card-body mb-0">
                <div class="row">

                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <label for="description"> Description</label>
                            <textarea id="description" name="description" class="form-control  tinymce @error('description') is-invalid @enderror">{{ old('description', @$privacy_policy->description) }}</textarea>
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
