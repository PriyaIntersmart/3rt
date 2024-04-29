@extends('frontend::layouts.app')

@section('content')
<div id="pageWrapper" class="homePage">

    <section id="MainBanner">
        <div id="bannerCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="bgImgWrap">
                        <picture>
                            <source media="(min-width: 468px)" srcset="{{ $home_banner->image_value }}">
                            <img src="{{ $home_banner->image_value }}" width="1920" height="1080" alt="banner">
                        </picture>
                    </div>
                    <div class="container">
                        <div class="dFlx">
                            <div class="fullSd">
                                <div class="cntWrap">
                                    <h1 class="mHead">{!!$home_banner->title   !!}</h1>
                                    <h5 class="sHead">{!! $home_banner->subtitle !!}</h5>
                                    <div class="btnWrap">
                                        <a href="{{ route('about') }}" class="baseBtn baseBtn2 hoveranim" aria-label="about company">
                                            <span>{{ $home_banner->button_title }}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="carousel-item">
                    <div class="bgImgWrap">
                        <picture>
                            <source media="(min-width: 468px)" srcset="assets/images/banner-home-1.jpg">
                            <img src="assets/images/banner-home-1.jpg" width="1920" height="1080" alt="banner">
                        </picture>
                    </div>
                    <div class="container">
                        <div class="dFlx">
                            <div class="fullSd">
                                <div class="cntWrap">
                                    <h1 class="mHead">SHAPING TOMORROW 22</h1>
                                    <h5 class="sHead">3RT Smart <a href="javascript:void(0)">Gold's</a> Innovative Approach to Gold Exploration in Canada.</h5>
                                    <div class="btnWrap">
                                        <a href="about.php" class="baseBtn baseBtn2 hoveranim" aria-label="about company">
                                            <span>DISCOVER MORE</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- <div class="carousel-indicators">
                <div class="carousel-indicatorsWrap">
                    <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="1" class="" aria-current="" aria-label="Slide 2"></button>
                </div>
            </div> -->
        </div>
    </section>

    <section id="About">
        <div class="dElmtWrap">
            <div class="dElmt bgBlur"></div>
            <div class="dElmt bgBlur"></div>
        </div>
        <div class="container">
            <div class="dFlx">
                <div class="lftSd">
                    <div class="dElmtImgWrap">
                        <div class="imgWrap">
                            <img src="{{ $home_cms->section_one_value }}" width="830" height="360" alt="abotClip">
                        </div>
                    </div>
                </div>
                <div class="rgtSd">
                    <div class="cntWrap">
                        <div class="tleWrap">
                            <h2 class="mTle">{{ $home_cms->section_one_title }}</h2>
                            <div class="sTle">{!! $home_cms->section_one_subtitle !!}.</div>
                        </div>
                        {!! $home_cms->section_one_description !!}
                        <div class="btnWrap">
                            <a href="{{ route('about') }}" class="baseBtn baseBtn1" aria-label="about details">
                                <span>{{@$home_cms->section_one_button_title}}</span>
                                <span class="rgtArrw">
                                    <img src="{{ asset('frontend/images/dElmt-rgtArrow.svg') }}" width="8" height="14" alt="rgtArrow">
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                @if(!$count_setting->isEmpty())
                <div class="w100">
                    <div class="owl-carousel countSlide">
                        @foreach ($count_setting as $item)
                        <div class="item">
                            <div class="countBx" aria-label="count">
                                <div class="bxWrap">
                                    <h3 class="num">{!! @$item->text_before_count !!}<span class="counter" data-countto="{{@$item->count  }}" data-duration="3000">0</span>{!! @$item->text_after_count !!}</h3>
                                    <div class="txt">{{ $item->subtitle }}</div>
                                </div>
                            </div>
                        </div>
                        @endforeach




                    </div>
                </div>
                @endif
            </div>
        </div>
    </section>

    <section id="Business">
        <div class="container smX">
            <div class="dFlx">
                <div class="lftSd">
                    <div class="cntWrap">
                        <div class="tleWrap">
                            <h2 class="mTle">{!! $home_cms->section_two_title !!}</h2>
                        </div>
                        {!! $home_cms->section_two_description !!}
                        <div class="btnWrap">
                            <a href="{{ route('structure-overview.edit') }}" class="baseBtn baseBtn1" aria-label="business">
                                <span>{{ $home_cms->section_two_button_title }}</span>
                                <span class="rgtArrw">
                                    <img src="{{ asset('frontend/images/dElmt-rgtArrow.svg') }}" width="8" height="14" alt="rgtArrow">
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="rgtSd">
                    <div class="imgWrapOuter">
                        <div class="dElmtWrap">
                            <div class="dElmt logoOutline">
                                <img src="{{ $home_cms->section_two_value_two }}" width="540" height="240" alt="logoOutline">
                            </div>
                            <div class="dElmt gold">
                                <img src="{{ $home_cms->section_two_value_three }}" width="400" height="300" alt="gold">
                            </div>
                        </div>
                        <div class="imgWrap">
                            <img src="{{ $home_cms->section_two_value_one }}" width="820" height="540" alt="business">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="Location" class="jarallax">
        <div class="bgImg">
            <img src="{{ $home_cms->section_three_value }}" class="jarallax-img" width="1920" height="600" alt="location">
        </div>
        <div class="container">
            <div class="cntWrap">
                <div class="tleWrap center">
                    <h2 class="mTle">{{ $home_cms->section_three_title }}</h2>
                </div>
                {!! $home_cms->section_three_description !!}
            </div>
        </div>
    </section>

     <section id="News">
        <div class="dElmtWrap">
            <div class="dElmt bgBlur"></div>
        </div>
        <div class="container">
            <div class="dFlx">
                <div class="lftSd">
                    <div class="cntWrap">
                        <div class="tleWrap">
                            <h2 class="mTle">{{ $news_events_cms->title }}</h2>
                        </div>
                        {!! $news_events_cms->description !!}
                        <div class="btnWrap">
                            <a href="{{ route('newsandevents') }}" class="baseBtn baseBtn1" aria-label="news listing">
                                <span>VIEW ALL</span>
                                <span class="rgtArrw">
                                    <img src="{{ asset('frontend/images/dElmt-rgtArrow.svg') }}" width="8" height="14" alt="rgtArrow">
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="rgtSd">
                    <div class="owl-carousel newsSlide">
                        @foreach ($news_events as $item)
                        <div class="item">
                            <a href="{{ route('news-events-details',$item->slug) }}" class="newsBx" aria-label="news">
                                <div class="bxImgWrap">
                                    <img src="{{ $item->image_value }}" width="400" height="360" alt="news">
                                </div>
                                <div class="bxCntWrap">
                                    <div class="tle">{{ $item->title }}</div>
                                    <div class="infoWrap">
                                        <div class="infoCat"># NEWS</div>
                                        <div class="infoDate">{{ \Carbon\Carbon::parse($item->date)->format('d F Y') }}</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="GetTouch">
        <div class="container">
            <div class="dFlx">
                <div class="lftSd">
                    <div class="cntWrap">
                        <div class="tleWrap">
                            <div class="mTle">{{ $home_cms->section_four_title }}</div>
                        </div>
                       {!! $home_cms->section_four_description !!}
                    </div>
                </div>
                <div class="rgtSd">
                    <div class="btnWrap">
                        <a href="{{ route('contact') }}" class="baseBtn baseBtn2 hoveranim" aria-label="contact">
                            <span>{{ $home_cms->section_four_button_title }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection

