@extends('admin::layouts.app')
@section('title', 'Edit Admin Configuration')
@section('content')
    <!-- form start -->
    @if($errors->any())
    {{ implode('', $errors->all('<div>:message</div>')) }}
@endif
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <h5 class="card-header bg-light-subtle">Edit Configurations:
            </h5>
            <div class="card-body">
                <form method="POST" action="{{ route('admin-config.update', $configuration->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="value" class="form-label">Value</label>
                                <input type="text" name="value" id="value"
                                    class="form-control @error('value') is-invalid @enderror"
                                    value="{{ old('value', $configuration->value) }}">
                                @error('value')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" id="submitBtn">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
