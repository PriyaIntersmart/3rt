@extends('frontend::layouts.app')
@section('title', 'NewsAndevents')
@section('meta_title', $bannerandmeta->meta_title)
@section('meta_keywords', $bannerandmeta->meta_keywords)
@section('meta_description', $bannerandmeta->meta_description)
@section('other_meta_tags')
    {!! $bannerandmeta->other_meta_tags !!}
@endsection
@section('content')
<div id="pageWrapper" class="newsEventsDetailsPage">

    <section id="newsEventsDetails" class="newsEventsDetails">
        <div class="container">
            <div class="newsDetailsMain">
                <div class="newsdetailLeft">
                    <h1>{{ $newsandevents->title }}</h1>
                    <ul class="newsDesc">
                        <li>{{ \Carbon\Carbon::parse($newsandevents->date)->format('d F Y') }}</li>
                        <li># NEWS</li>
                    </ul>
                    <div class="imgGrid">
                        <img src="{{ $newsandevents->image_value }}" alt="image" />
                    </div>
                    {!! $newsandevents->description !!}
                </div>
                <div class="newsdetailRight">
                    <h3>Related News & Events</h3>
                    @foreach ($related_news as $item)
                    <a href="" class="newsGrid">
                        <div class="imgGrid">
                            <img src="{{ $item->image_value }}" alt="image" />
                        </div>
                        <div class="txtGrid">
                            <div class="topGrid">
                                <h6>{{ \Carbon\Carbon::parse($item->date)->format('d F Y') }}</h6>
                                <h5>#NEWS</h5>
                            </div>
                            <p>{{ $item->title }}</p>
                        </div>
                    </a>
                    @endforeach


                </div>
            </div>
        </div>
    </section>
</div>
@endsection
