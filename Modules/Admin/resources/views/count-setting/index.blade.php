@extends('admin::layouts.app')
@section('title', 'count management')
@section('content')

<div class="card">
    <div class="card-header " role="tab" id="heading-1">

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary me-md-2" type="button" href="{{ route('count-setting.create') }}">Create</a>

          </div>
    </div>
</div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">List count</div>
                <div class="card-body">
                    <table id="dataTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Count</th>
                                <th>subtitle</th>
                                <th>Sort Order</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($count as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->count }}</td>
                                    <td>{{ $item->subtitle }}</td>

                                    <td>
                                        <input type="text"
                                            value="{{ $item->sort_order }}" class="form-control sort-order w-25"
                                            data-model="countSetting" data-id="{{ base64_encode($item->id) }}"
                                            name="sort_order">
                                    </td>

                                    <td>
                                        <div class="form-check form-switch">
                                            <input type="checkbox" class="form-check-input status" data-model="countSetting"
                                                value="{{ $item->status }}"
                                                data-id="{{ base64_encode($item->id) }}" name="status"
                                                {{ $item->status == 1 ? 'checked' : '' }}>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="{{ route('count-setting.edit',base64_encode($item->id)) }}"
                                            class="btn btn-primary btn-sm" title="Edit">
                                            <i class="ri-pencil-fill"></i>
                                        </a>
                                        <form action="{{ route('count-setting.destroy',$item->id) }}" method="POST" style="display: inline-block;">
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
