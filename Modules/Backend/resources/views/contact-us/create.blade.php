@extends('backend::layouts.app')
@section('title', 'Add Location')

@section('content')

    <form method="POST" action="{{ route('location.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="card">
            <div class="card-header">
                Add Location Details:
            </div>
            <div class="card-body mb-0">
                <div class="row">


                    <div class="col-md-12 mb-3">
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
                            <label for="iframe">Iframe </label>
                            <textarea id="iframe" name="iframe" class="form-control   @error('iframe') is-invalid @enderror">{{ old('iframe') }}</textarea>
                            @error('iframe')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="address">Address*</label>
                            <textarea id="address" name="address" class="form-control   @error('address') is-invalid @enderror">{{ old('iframe') }}</textarea>
                            @error('address')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="email">Email*</label>
                            <input type="email" class="form-control email @error('email') is-invalid @enderror"
                                id="email" name="email" value="{{ old('email') }}" >
                            @error('email')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    {{-- <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="display_footer">Display Footer</label>
                            <select class="form-select @error('display_footer') is-invalid @enderror" id="example-select"
                                name="display_footer">
                                <option value="1" {{ old('display_footer') == '1' ? 'selected' : '' }}>
                                    YES
                                </option>
                                <option value="0" {{ old('display_footer') == '0' ? 'selected' : '' }}>
                                    NO
                                </option>
                            </select>
                            @error('display_footer')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div> --}}
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

