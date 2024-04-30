@extends('admin::layouts.app')
@section('title', 'Banner And Meta Tags')
@section('content')
    <div class="row">
        <div class="col-md-12">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card p-3">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Page</th>
                                <th>Title</th>
                                <th>Banner Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bannerandmeta as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->page }}</td>
                                    <td>{{ $item->page_title }}</td>
                                    <td><img src="{{ $item->image_value }}" width="100" height="50"></td>
                                    <td>
                                        <a href="{{ route('bannerandmetatag.edit', base64_encode($item->id)) }}"
                                            class="btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="Edit">
                                            <i class="ri-pencil-line"></i>

                                        </a>

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
