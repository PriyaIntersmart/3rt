@extends('admin::layouts.app')
@section('title', 'Mining Process')

@section('content')

    <form method="POST" action="{{ route('mining-process.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="card">
            <div class="card-header">
               Add Mining Process
     </div>
            <div class="card-body mb-0">
                <div class="row">


                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="title">Title*</label>
                            <input type="text" class="form-control title @error('title') is-invalid @enderror"
                                id="title" name="title" value="{{ old('title') }}">
                            @error('title')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>



                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="description" name="description" class="form-control  tinymce @error('description') is-invalid @enderror">{{ old('description', @$terms_and_condition->description) }}</textarea>
                            @error('description')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="sort_order">Sort Order</label>
                            <input type="number"
                                class="form-control sort_order @error('sort_order') is-invalid @enderror"
                                id="sort_order" name="sort_order"
                                value="{{ old('sort_order', @$team->sort_order) }}">
                            @error('sort_order')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-select @error('status') is-invalid @enderror" id="example-select"
                                name="status">
                                <option value="1" {{ old('status', @$team->status) == '1' ? 'selected' : '' }}>
                                    Active
                                </option>
                                <option value="0" {{ old('status', @$team->status) == '0' ? 'selected' : '' }}>
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

