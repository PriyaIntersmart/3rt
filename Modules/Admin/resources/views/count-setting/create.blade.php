@extends('admin::layouts.app')
@section('title', 'Add Count Details')

@section('content')

    <form method="POST" action="{{ route('count-setting.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="card">
            <div class="card-header">
                Add Count Details:
            </div>
            <div class="card-body mb-0">
                <div class="row">


                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="count">Count*</label>
                            <input type="text" class="form-control count @error('count') is-invalid @enderror"
                                id="count" name="count" value="{{ old('count') }}">
                            @error('count')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="subtitle">subtitle*</label>
                            <input type="text" class="form-control subtitle @error('subtitle') is-invalid @enderror"
                                id="subtitle" name="subtitle" value="{{ old('subtitle') }}">
                            @error('subtitle')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="text_before_count">Text Before Count</label>
                            <input type="text" class="form-control text_before_count @error('text_before_count') is-invalid @enderror"
                                id="text_before_count" name="text_before_count" value="{{ old('text_before_count') }}">
                            @error('text_before_count')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="text_after_count">Text After Count</label>
                            <input type="text" class="form-control text_after_count @error('text_after_count') is-invalid @enderror"
                                id="text_after_count" name="text_after_count" value="{{ old('text_after_count') }}">
                            @error('text_after_count')
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

