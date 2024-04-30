@extends('admin::layouts.app')
@section('title', 'Edit Address')

@section('content')

    <form method="POST" action="{{ route('address-management.update', base64_encode($address->id)) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card-header">
                Edit Address Details:
            </div>
            <div class="card-body mb-0">
                <div class="row">


                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <label for="title">Title*</label>
                            <input type="text" class="form-control title @error('title') is-invalid @enderror"
                                id="title" name="title" value="{{ old('title', @$address->title) }}">
                            @error('title')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>




                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <label for="address">Address*</label>
                            <textarea id="address" name="address" class="form-control   @error('address') is-invalid @enderror">{{ old('address', @$address->address) }}</textarea>
                            @error('address')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="sort_order">Sort Order</label>
                            <input type="number" class="form-control sort_order @error('sort_order') is-invalid @enderror"
                                id="sort_order" name="sort_order" value="{{ old('sort_order', @$address->sort_order) }}">
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
                                <option value="1" {{ old('status', @$address->status) == '1' ? 'selected' : '' }}>
                                    Active
                                </option>
                                <option value="0" {{ old('status', @$address->status) == '0' ? 'selected' : '' }}>
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
