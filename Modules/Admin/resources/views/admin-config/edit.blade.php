@extends('admin::layouts.app')
@section('title', 'Edit Admin Configuration')
@section('content')
    <!-- form start -->
    @if ($errors->any())
        {{ implode('', $errors->all('<div>:message</div>')) }}
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="hidden" name="type" value="{{ $config->type }}">
                            @if ($config->type == 0)
                                <div class="form-group">
                                    <label for="value">Value</label>
                                    <input type="text" class="form-control @error('value') is-invalid @enderror"
                                        id="value" name="value" placeholder="Enter Value"
                                        value="{{ old('value', $config->value) }}">
                                    @error('value')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            @elseif ($config->type == 1)
                                <div class="form-group">
                                    <label for="value">Image</label>
                                    <input type="file" name="value" id="value"
                                        accept="image/jpeg,image/png,image/webp,image/jpg,image/svg+xml"
                                        class="form-control multiple-file-input @error('value') is-invalid @enderror">
                                    @error('value')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                    <div class="multipleFilePreview pl-1 pt-1">
                                        @if ($config->value)
                                            <img src="{{ Storage::disk('public')->exists($config->value) ? Storage::url($config->value) : asset($config->value) }}" alt="Uploaded Image"
                                                id="uploadedImage" class="uploaded-file"
                                                onerror="this.onerror=null;this.src='';this.height='';this.width='';">
                                        @endif
                                    </div>
                                @elseif ($config->type == 2)
                                    <div class="form-group">
                                        <label for="value">Value</label>
                                        <input type="color" class="form-control @error('value') is-invalid @enderror"
                                            id="value" name="value" value="{{ old('value', $config->value) }}">
                                        @error('value')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
