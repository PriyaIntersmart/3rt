@extends('admin::layouts.app')
@section('title', 'Team Management')
@section('content')

<div class="card">
    <div class="card-header " role="tab" id="heading-1">

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary me-md-2" type="button" href="{{ route('team-management.create') }}">Create</a>

          </div>
    </div>
</div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">List Team Members</div>
                <div class="card-body">
                    <table id="dataTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Sort Order</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($teams as $team)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img src="{{ $team->image_value }}" width="50" height="50"></td>
                                    <td>{{ $team->name }}</td>
                                    <td>{{ $team->designation }}</td>
                                    <td>
                                        <input type="number"
                                            value="{{ $team->sort_order }}" class="form-control sort-order w-25"
                                            data-model="TeamMember" data-id="{{ base64_encode($team->id) }}"
                                            name="sort_order">
                                    </td>
                                    <td>
                                        <div class="form-check form-switch">
                                            <input type="checkbox" class="form-check-input status" data-model="TeamMember"
                                                value="{{ $team->status }}"
                                                data-id="{{ base64_encode($team->id) }}" data-column="status" name="status"
                                                {{ $team->status == 1 ? 'checked' : '' }}>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="{{ route('team-management.edit',base64_encode($team->id)) }}"
                                            class="btn btn-primary btn-sm" title="Edit">
                                            <i class="ri-pencil-fill"></i>
                                        </a>
                                        <form action="{{ route('team-management.destroy',$team->id) }}" method="POST" style="display: inline-block;">
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
