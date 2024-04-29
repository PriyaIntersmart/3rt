@extends('frontend::layouts.app')
@section('title', 'About Us')
@section('meta_title', $bannerandmeta->meta_title)
@section('meta_keywords', $bannerandmeta->meta_keywords)
@section('meta_description', $bannerandmeta->meta_description)
@section('other_meta_tags')
    {!! $bannerandmeta->other_meta_tags !!}
@endsection
@section('content')
<div id="pageWrapper" class="aboutPage">

    <section id="pageBanner">
        <div class="imgBox">
            <img src="{{ $bannerandmeta->image_value }}" data-src="{{ $bannerandmeta->image_value }}" class="lazy"
                loading="lazy" width="1920" height="650" alt="">
        </div>
        <div class="container">
            <div class="captionBx">
                <h1 class="title">{{ $bannerandmeta->page_title }}</h1>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <div class="mainHead center">
                <div class="title">{{ $about_cms->title }}</div>
                <div class="subT">{!! $about_cms->subtitle !!}</div>
            </div>
           @isset($about_cms->aboutUs_value)
            <div class="imgBox">
                <img src="{{ $about_cms->aboutUs_value }}" data-src="{{ $about_cms->aboutUs_value }}" class="lazy" loading="lazy"
                    width="1650" height="650" alt="">
            </div>
@endisset
        </div>
    </section>

    <section id="details">
        <div class="dElmtWrap">
            <div class="dElmt bgBlur"></div>
        </div>
        <div class="container">
            <div class="dtlsWrap floatTxt">
                <div class="rtBx">
                    <div class="logowrap">
                        <img src="{{ $about_cms->aboutUs_value_one }}" alt="">
                        <div class="imgBx">
                            <img src="{{ $about_cms->aboutUs_value_two }}" data-src="{{ $about_cms->aboutUs_value_two }}" class="lazy"
                                loading="lazy" alt="">
                        </div>
                    </div>
                    @if(!$count_setting->isEmpty())
                    <div class="flxbx">
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
                    @endif
                </div>
                {!! $about_cms->description !!}

            </div>
        </div>
    </section>

    <section id="overview">
        <div class="dElmtWrap">
            <div class="dElmt bgBlur"></div>
        </div>
        <div class="container">
            <div class="ovfLx">
                <div class="lftBx">
                    <div class="content">
                        <div class="mainHead">
                            <div class="title">
                               {{ $about_cms->work_overview_title }}
                            </div>
                        </div>
                       {!! $about_cms->work_overview_description !!}
                    </div>
                </div>
                <div class="rtBx">
                    <div class="flxBx">
                        <div class="dElmtWrap">
                            <div class="dElmt bgBlur"></div>
                        </div>
                        <div class="lBx">
                            <div class="imgBx">
                                <img src="{{ $about_cms->over_view_image_one }}" data-src="{{ $about_cms->over_view_image_one }}" width="420"
                                    height="350" alt="">
                            </div>
                        </div>
                        <div class="rbx">
                            <div class="imwrapr">
                                <div class="round">
                                    <div class="imBx">
                                        <img src="{{ $about_cms->over_view_image_two }}" alt="">
                                    </div>
                                </div>
                                <div class="round">
                                    <div class="imBx">
                                        <img src="{{ $about_cms->over_view_image_three }}" alt="">
                                    </div>
                                </div>
                                <div class="round">
                                    <div class="imBx">
                                        <img src="{{ $about_cms->over_view_image_four }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="rflx">
                <div class="ltBx">
                    <div class="viewBx">
                        <div class="mainTxt">{!! $about_cms->about_right_description !!}</div>
                    </div>
                </div>
                <div class="rtBx">
                     {!! $about_cms->about_left_description !!}
                </div>
            </div>
        </div>
    </section>
 {{-- mining starts here --}}
 @if(!$minior_process->isEmpty())
    <section id="mining">
        <div class="container">
            <div class="mainHead center">
                <div class="title">{{ $minior_cms->title }}</div>
                {{ $minior_cms->subtitle }}
            </div>
            <div class="miningSlider owl-carousel">
                @foreach ($minior_process as $item)
                <div class="item">
                    <a href="javascript:void(0)" class="miningbx">
                        <div class="innerBx">
                            <div class="bgBx">
                                <div class="bgBorder">
                                    <div class="contentBx">
                                        <div class="cnWrp">
                                            <div class="title">{{ $item->title }}</div>
                                            {!! $item->description !!}

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach


            </div>
        </div>
    </section>
    @endif
 {{-- mining ends here --}}
 {{-- team members starts here --}}
    @if(!$team_member->isEmpty())
    <section id="team">
        <div class="container">
            <div class="mainHead center">
                <div class="title upper">{{ $about_cms->section_one_heading }}</div>
            </div>
            <div class="teamList">

                <div class="item">
                    <div class="cmNtitle center upper">{{ $about_cms->section_one_subheading }}</div>
                    <div class="teamSlider owl-carousel">
                        @foreach($team_member as $member)
                        <div class="item">
                            <div class="teamBx" aria-label="team member">
                                <div class="imRap">
                                    <div class="imGBx">
                                        <img src="{{ $member->image_value }}" width="272" height="272" alt="george">
                                    </div>
                                </div>
                                <div class="contentBx">
                                    <div class="name">{{ $member->name }}</div>
                                    <div class="post">{{ $member->designation }}</div>
                                    <div class="cnWrp">
                                        {!! $member->description !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                @endif
                @if(!$senior_member->isEmpty())
                <div class="item">
                    <div class="cmNtitle center upper">{{ $about_cms->section_two_heading }}</div>
                    <div class="teamSlider owl-carousel">

                        @foreach ($senior_member as $senior)
                        <div class="item">
                            <div class="teamBx" aria-label="team member">
                                <div class="imRap">
                                    <div class="imGBx">
                                        <img src="{{ $senior->image_value }}" width="272" height="272"
                                            alt="sandeep">
                                    </div>
                                </div>
                                <div class="contentBx">
                                    <div class="name">{{ $senior->name }}</div>
                                    <div class="post">{{ $senior->designation }}</div>
                                    <div class="cnWrp">
                                         {!! $senior->description !!}
                                    </div>
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
 {{-- team members ends here --}}

</div>
@endsection
