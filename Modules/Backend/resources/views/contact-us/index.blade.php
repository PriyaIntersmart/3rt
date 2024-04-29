@extends('backend::layouts.app')
@section('title', 'Contact us Management')
@section('content')

<div class="card">
    <div class="card-header " role="tab" id="heading-1">

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary me-md-2" type="button" href="{{ route('location.create') }}">Create</a>

          </div>
    </div>
</div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">List Location</div>
                <div class="card-body">
                    <table id="dataTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Title</th>
                                {{-- <th>Display Footer</th> --}}
                                <th>Sort Order</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($location as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->title }}</td>
                                    {{-- <td>
                                        <input type="text"
                                            value="{{ $item->display_footer }}" class="form-control display_footer w-25"
                                            data-model="Contactus" data-id="{{ base64_encode($item->id) }}"
                                            name="display_footer">
                                    </td> --}}
                                    <td>
                                        <input type="text"
                                            value="{{ $item->sort_order }}" class="form-control sort-order w-25"
                                            data-model="Contactus" data-id="{{ base64_encode($item->id) }}"
                                            name="sort_order">
                                    </td>

                                    <td>
                                        <div class="form-check form-switch">
                                            <input type="checkbox" class="form-check-input status" data-model="Contactus"
                                                value="{{ $item->status }}"
                                                data-id="{{ base64_encode($item->id) }}" name="status"
                                                {{ $item->status == 1 ? 'checked' : '' }}>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="{{ route('location.edit',base64_encode($item->id)) }}"
                                            class="btn btn-primary btn-sm" title="Edit">
                                            <i class="ri-pencil-fill"></i>
                                        </a>
                                        <form action="{{ route('location.destroy',$item->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger btn-sm delete-btn" title="Delete">
                                                <i class="ri-delete-bin-3-fill"></i>
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>No data found.</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
