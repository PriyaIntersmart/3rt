@extends('admin::layouts.app')
@section('title', 'Add News Events')

@section('content')

    <form method="POST" action="{{ route('news-events.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="card">
            <div class="card-header">
                Add NewsEvents:
            </div>
            <div class="card-body mb-0">
                <div class="row">

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="image" class="form-label">Image*</label>
                            <input type="file" name="image" id="image" accept="image/*"
                                class="form-control file-input-preview @error('image') is-invalid @enderror">
                            @error('image')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                            <span class="file-dimension-span">*Dimension 976 × 403</span>
                            <div class="filePreview">
                                {{-- <img src="{{ $home_banner->image_value }}" alt="image" class="img-fluid"
                                    width="120" /> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="title">Title*</label>
                            <input type="text" class="form-control mt-1 title @error('title') is-invalid @enderror"
                                id="title" name="title" value="{{ old('title') }}">
                            @error('title')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>



                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="description" name="description" class="form-control  tinymce @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                            @error('description')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="date">date*</label>
                            <input type="date" class="form-control  date @error('date') is-invalid @enderror"
                                id="date" name="date"  value="{{ old('date') }}">
                            @error('date')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-select @error('status') is-invalid @enderror" id="example-select"
                                name="status">
                                <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>
                                    Active
                                </option>
                                <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>
                                    Inactive
                                </option>
                            </select>
                            @error('status')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>


                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary" id="submitBtn">save</button>
            </div>
        </div>
        </div>
    </form>
@endsection
