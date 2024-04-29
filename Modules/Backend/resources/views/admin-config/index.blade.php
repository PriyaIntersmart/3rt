@extends('backend::layouts.app')
@section('title', 'Admin Configurations')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Key</th>
                                <th>Value</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($configurations as $configuration)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $configuration->key }}</td>
                                    @if ($configuration->type == "0")
                                        <td> {{ $configuration->value }}</td>
                                    @else
                                    <td>
                                        @if (Storage::exists($configuration->value))
                                            <img src="{{ Storage::url($configuration->value) }}" alt="" height="51">
                                        @else
                                            <img src="{{ asset($configuration->value) }}" alt="" height="51">
                                        @endif
                                    </td>
                                    @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin-config.edit', base64_encode($configuration->id)) }}"
                                            class="btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-title="Edit">
                                            <i class="ri-pencil-line"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">No data found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
