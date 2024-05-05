@extends('admin::layouts.app')
@section('title', 'Edit Mining Process')

@section('content')

    <form method="POST" action="{{ route('tokenization.update',$tokenization->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card-header">
                Edit Tokenization Content
      </div>
            <div class="card-body mb-0">
                <div class="row">


                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="title_one">Title One*</label>
                            <input type="text" class="form-control title_one @error('title_one') is-invalid @enderror"
                                id="title_one" name="title_one" value="{{ old('title_one',@$tokenization->title_one) }}">
                            @error('title_one')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="title_two">Title Two*</label>
                            <input type="text" class="form-control title_two @error('title_two') is-invalid @enderror"
                                id="title_two" name="title_two" value="{{ old('title_two',@$tokenization->title_two) }}">
                            @error('title_two')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="title_three">Title Three*</label>
                            <input type="text" class="form-control title_three @error('title_three') is-invalid @enderror"
                                id="title_three" name="title_three" value="{{ old('title_three',@$tokenization->title_three) }}">
                            @error('title_three')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    {{-- <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="title_three">title_three*</label>
                            <input type="text" class="form-control title_three @error('title_three') is-invalid @enderror"
                                id="title_three" name="title_three" value="{{ old('title_three',@$tokenization->title_three) }}">
                            @error('title_three')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div> --}}

                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="title_four">Title Four*</label>
                            <input type="text" class="form-control title_four @error('title_four') is-invalid @enderror"
                                id="title_four" name="title_four" value="{{ old('title_four',@$tokenization->title_four) }}">
                            @error('title_four')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="title_five">Title Five*</label>
                            <input type="text" class="form-control title_five @error('title_five') is-invalid @enderror"
                                id="title_five" name="title_five" value="{{ old('title_five',@$tokenization->title_five) }}">
                            @error('title_five')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="title_six">Title Six*</label>
                            <input type="text" class="form-control title_six @error('title_six') is-invalid @enderror"
                                id="title_six" name="title_six" value="{{ old('title_six',@$tokenization->title_six) }}">
                            @error('title_six')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="title_seven">Title Seven*</label>
                            <input type="text" class="form-control title_seven @error('title_seven') is-invalid @enderror"
                                id="title_seven" name="title_seven" value="{{ old('title_seven',@$tokenization->title_seven) }}">
                            @error('title_seven')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="title_eight">Title Eight*</label>
                            <input type="text" class="form-control title_eight @error('title_eight') is-invalid @enderror"
                                id="title_eight" name="title_eight" value="{{ old('title_eight',@$tokenization->title_eight) }}">
                            @error('title_eight')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="title_nine">Title Nine*</label>
                            <input type="text" class="form-control title_nine @error('title_nine') is-invalid @enderror"
                                id="title_nine" name="title_nine" value="{{ old('title_nine',@$tokenization->title_nine) }}">
                            @error('title_nine')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="title_ten">Title Ten*</label>
                            <input type="text" class="form-control title_ten @error('title_ten') is-invalid @enderror"
                                id="title_ten" name="title_ten" value="{{ old('title_ten',@$tokenization->title_ten) }}">
                            @error('title_ten')
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
