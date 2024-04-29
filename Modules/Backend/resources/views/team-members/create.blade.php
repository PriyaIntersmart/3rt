@extends('backend::layouts.app')
@section('title', 'Team Management')

@section('content')

    <form method="POST" action="{{ route('team-management.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="card">
            <div class="card-body mb-0">
                <div class="card-header">
                           Add Team Member
                </div>
                <div class="row">

                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="type">Type*</label>

                            <select id="type" name="type"
                                class="form-control  @error('type') is-invalid @enderror">
                                <option value="" selected >Select Type</option>
                                <option value="1">Team member</option>
                                <option value="2">Senior</option>

                            </select>

                            @error('type')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="name">Name*</label>
                            <input type="text" class="form-control name @error('name') is-invalid @enderror"
                                id="name" name="name" value="{{ old('name') }}">
                            @error('name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="designation">Designation*</label>
                            <input type="text" class="form-control designation @error('designation') is-invalid @enderror"
                                id="designation" name="designation" value="{{ old('designation') }}">
                            @error('designation')
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
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="image"> Upload Image</label>
                            <div class="input-group @error('image') is-invalid @enderror">
                                <input type="file" class="form-control  file-preview"
                                    id="image" name="image">

                                <div class="pt-3 file-holder"> </div>
                            </div>
                            1920 x 750
                            @error('image')
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
                <button type="submit" class="btn btn-primary" id="submitBtn">update</button>
            </div>
        </div>
        </div>
    </form>
@endsection

