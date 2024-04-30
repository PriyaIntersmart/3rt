@extends('admin::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('backend.name') !!}</p>
@endsection
