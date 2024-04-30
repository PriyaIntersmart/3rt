@extends('admin::layouts.app')
@section('title', 'NewsEvents Management')
@section('content')

<div class="card">
    <div class="card-header " role="tab" id="heading-1">

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary me-md-2" type="button" href="{{ route('news-events.create') }}">Create</a>

          </div>
    </div>
</div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">List NewsEvents</div>
                <div class="card-body">
                    <table id="dataTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($news_events as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img src="{{ $item->image_value }}" width="100" height="50"></td>
                                    <td>{{ $item->title }}</td>
                                    <td>
                                        {{ $item->date }}
                                    </td>

                                    <td>
                                        <div class="form-check form-switch">
                                            <input type="checkbox" class="form-check-input status" data-model="KeyElement"
                                                value="{{ $item->status }}"
                                                data-id="{{ base64_encode($item->id) }}" name="status"
                                                {{ $item->status == 1 ? 'checked' : '' }}>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="{{ route('news-events.edit',base64_encode($item->id)) }}"
                                            class="btn btn-primary btn-sm" title="Edit">
                                            <i class="ri-pencil-fill"></i>
                                        </a>
                                        <form action="{{ route('news-events.destroy',$item->id) }}" method="POST" style="display: inline-block;">
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
