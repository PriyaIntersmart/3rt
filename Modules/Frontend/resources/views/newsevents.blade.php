@extends('frontend::layouts.app')
@section('title', 'About Us')
@section('meta_title', $bannerandmeta->meta_title)
@section('meta_keywords', $bannerandmeta->meta_keywords)
@section('meta_description', $bannerandmeta->meta_description)
@section('other_meta_tags')
    {!! $bannerandmeta->other_meta_tags !!}
@endsection
@section('content')


<div id="pageWrapper" class="newsEventsPage">

    <section id="pageBanner">
        <div class="imgBox">
            <img src="{{ $bannerandmeta->image_value }}" data-src="{{ $bannerandmeta->image_value }}" class="lazy" loading="lazy" width="1920" height="650" alt="">
        </div>
        <div class="container">
            <div class="captionBx">
                <h1 class="title">{{ $bannerandmeta->banner_title }}</h1>
            </div>
        </div>
    </section>

    <section id="newsEvents" class="newsEvents">
        <div class="container">
            <div class="newsEventsMain">
            @foreach ($newsandevents as $item)
            <a href="{{ route('news-events-details',$item->slug) }}" class="newsEventsGrid">
                <img src="{{ $item->image_value }}" alt="image">
                <div class="txtGrid">
                    <p>{{$item->title  }}</p>
                    <div class="newsBtm">
                        <h5>#NEWS</h5>
                        <h6>{{ \Carbon\Carbon::parse($item->date)->format('d F Y') }}</h6>
                    </div>
                </div>
            </a>
            @endforeach


            </div>
        </div>
    </section>
</div>
@endsection
