@extends('backend::layouts.app')
@section('title', 'Dashboard')
@section('content')
<h1>WELCOME,{{ Auth::user()->name }}</h1>


@endsection

