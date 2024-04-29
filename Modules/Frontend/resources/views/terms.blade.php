@extends('frontend::layouts.app')
@section('title', 'About Us')
@section('meta_title', $bannerandmeta->meta_title)
@section('meta_keywords', $bannerandmeta->meta_keywords)
@section('meta_description', $bannerandmeta->meta_description)
@section('other_meta_tags')
    {!! $bannerandmeta->other_meta_tags !!}
@endsection
@section('content')
<div id="pageWrapper" class="legalPage">

    <section id="pageBanner">
        <div class="imgBox">
            <img src="{{ $bannerandmeta->image_value }}" width="1920" height="650" alt="banner-legal">
        </div>
        <div class="container">
            <div class="captionBx">
                <h1 class="title">{{ $bannerandmeta->banner_title }}</h1>
            </div>
        </div>
    </section>

    <section id="Content">
        <div class="container">
            <div class="cntWrap">
                {!! $terms->description !!}
            </div>
        </div>
    </section>

</div>

@endsection


