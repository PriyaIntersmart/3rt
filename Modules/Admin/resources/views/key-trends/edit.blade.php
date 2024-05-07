@extends('admin::layouts.app')
@section('title', 'Edit Key Trends')

@section('content')

    <form method="POST" action="{{ route('key-trends.update',$key_element->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card-body mb-0">
                <div class="row">


                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="starting_year">Starting Year*</label>
                            <input type="text" class="form-control starting_year @error('starting_year') is-invalid @enderror"
                                id="starting_year" name="starting_year" value="{{ old('starting_year',$key_element->starting_year) }}">
                            @error('starting_year')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="starting_value">Starting Value*</label>
                            <input type="text" class="form-control starting_value @error('starting_value') is-invalid @enderror"
                                id="starting_value" name="starting_value" value="{{ old('starting_value',@$key_element->starting_value) }}">
                            @error('starting_value')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="ending_year">Ending Year*</label>
                            <input type="text" class="form-control ending_year @error('ending_year') is-invalid @enderror"
                                id="ending_year" name="ending_year" value="{{ old('ending_year',@$key_element->ending_year) }}">
                            @error('ending_year')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="ending_value">Ending Value*</label>
                            <input type="text" class="form-control ending_value @error('ending_value') is-invalid @enderror"
                                id="ending_value" name="ending_value" value="{{ old('ending_value',@$key_element->ending_value) }}">
                            @error('ending_value')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="title">Title*</label>
                            <input type="text" class="form-control title @error('title') is-invalid @enderror"
                                id="title" name="title" value="{{ old('title',@$key_element->title) }}">
                            @error('title')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="percentage">Percentage Value*</label>
                            <input type="number" class="form-control percentage @error('percentage') is-invalid @enderror"
                                id="percentage" name="percentage" value="{{ old('percentage',@$key_element->percentage) }}">
                            @error('percentage')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="heading">Heading*</label>
                            <input type="text" class="form-control heading @error('heading') is-invalid @enderror"
                                id="heading" name="heading" value="{{ old('heading',@$key_element->heading) }}">
                            @error('heading')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <label for="description">Description*</label>
                            <textarea id="description" name="description" class="form-control  tinymce @error('description') is-invalid @enderror">{{ old('description', $key_element->description) }}</textarea>
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
