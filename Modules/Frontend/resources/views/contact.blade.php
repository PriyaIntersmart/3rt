@extends('frontend::layouts.app')
@section('title', 'About Us')
@section('meta_title', $bannerandmeta->meta_title)
@section('meta_keywords', $bannerandmeta->meta_keywords)
@section('meta_description', $bannerandmeta->meta_description)
@section('other_meta_tags')
    {!! $bannerandmeta->other_meta_tags !!}
@endsection
@section('content')

    <div id="pageWrapper" class="contactPage">
        <section id="pageBanner">
            <div class="imgBox">
                <img src="{{ $bannerandmeta->image_value }}" width="1920" height="650" alt="banner">
            </div>
            <div class="container">
                <div class="captionBx">
                    <h1 class="title">{!!$bannerandmeta->banner_title  !!}</h1>
                </div>
            </div>
        </section>
        @if ($locations->isNotEmpty())
            <section id="ContactInfo">
                <div class="container">

                    @foreach ($locations as $location)
                        <div class="itemWrap">
                            <div class="tleWrap">
                                <h2 class="mTle">{{ $location->title }}</h2>
                            </div>
                            <div class="mapWrap">
                                <iframe src="{{ $location->iframe }}" width="600" height="450" style="border:0;"
                                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                <div class="addrssBx">
                                    <div class="bxWrap">
                                        <div class="infoWrap">
                                            <div class="tle">Registered Office</div>
                                            <ul class="infoUl">
                                                <li>
                                                    <div class="infoBx">
                                                        <span class="icon">
                                                            <svg width="18" height="22" viewBox="0 0 18 22"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9 0C6.81285 0.0029013 4.71612 0.873027 3.16957 2.41957C1.62303 3.96612 0.752901 6.06285 0.75 8.25C0.75 14.1728 8.43625 21.5909 8.76281 21.9038C8.82633 21.9655 8.91142 22 9 22C9.08858 22 9.17367 21.9655 9.23719 21.9038C9.56375 21.5909 17.25 14.1728 17.25 8.25C17.2471 6.06285 16.377 3.96612 14.8304 2.41957C13.2839 0.873027 11.1871 0.0029013 9 0ZM9 12.0312C8.25214 12.0312 7.52107 11.8095 6.89925 11.394C6.27743 10.9785 5.79277 10.388 5.50658 9.69702C5.22039 9.00609 5.14551 8.2458 5.29141 7.51231C5.43731 6.77882 5.79743 6.10507 6.32625 5.57625C6.85507 5.04743 7.52882 4.68731 8.26231 4.54141C8.9958 4.39551 9.75609 4.47039 10.447 4.75658C11.138 5.04277 11.7285 5.52743 12.144 6.14925C12.5595 6.77107 12.7812 7.50214 12.7812 8.25C12.7806 9.25267 12.3821 10.2141 11.6731 10.9231C10.9641 11.6321 10.0027 12.0306 9 12.0312Z"
                                                                    fill="#C88F2F" />
                                                            </svg>
                                                        </span>
                                                        <span class="bxCntWrap">{{ $location->address }}</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="infoWrap">
                                            <div class="tle">Mail us</div>
                                            <ul class="infoUl">
                                                <!-- <li> <span class="smTle">Sandeep Ghosh</span> </li> -->
                                                <li>
                                                    <div class="infoBx">
                                                        <span class="icon">
                                                            <svg width="21" height="17" viewBox="0 0 21 17"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.1074 11.1529C10.9091 11.2769 10.686 11.3265 10.4876 11.3265C10.2893 11.3265 10.0661 11.2769 9.86777 11.1529L0 5.12811V13.1364C0 14.8471 1.38843 16.2356 3.09917 16.2356H17.9008C19.6116 16.2356 21 14.8471 21 13.1364V5.12811L11.1074 11.1529Z"
                                                                    fill="#C88F2F" />
                                                                <path
                                                                    d="M17.9013 0.764465H3.09961C1.6368 0.764465 0.39713 1.80579 0.0996094 3.19422L10.5128 9.54132L20.9013 3.19422C20.6037 1.80579 19.3641 0.764465 17.9013 0.764465Z"
                                                                    fill="#C88F2F" />
                                                            </svg>
                                                        </span>
                                                        <span class="bxCntWrap"> <a href="mailto:{{ $location->email }}"
                                                                class="mail">{{ $location->email }}</a> </span>
                                                    </div>
                                                </li>
                                                <!-- <li>
                                                <div class="infoBx">
                                                    <span class="icon">
                                                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M19.7105 14.8313C19.6567 14.7886 15.75 11.9726 14.6777 12.1748C14.1658 12.2653 13.8731 12.6144 13.2858 13.3133C13.1913 13.4262 12.9642 13.6966 12.7877 13.8889C12.4165 13.7678 12.0544 13.6204 11.7042 13.4479C9.89659 12.5679 8.43609 11.1073 7.55606 9.29972C7.38338 8.94956 7.236 8.58747 7.11506 8.21625C7.308 8.03906 7.57837 7.812 7.69387 7.71487C8.3895 7.13081 8.73928 6.83812 8.82984 6.32494C9.01556 5.26181 6.20156 1.32825 6.17203 1.29281C6.04436 1.11042 5.87774 0.958691 5.68422 0.848599C5.49071 0.738507 5.27515 0.672806 5.05312 0.65625C3.91256 0.65625 0.65625 4.88053 0.65625 5.59191C0.65625 5.63325 0.715969 9.83587 5.89838 15.1075C11.1648 20.284 15.3667 20.3438 15.4081 20.3438C16.1201 20.3438 20.3438 17.0874 20.3438 15.9469C20.3274 15.7256 20.2621 15.5108 20.1526 15.3179C20.043 15.1249 19.892 14.9587 19.7105 14.8313Z" fill="#C88F2F" />
                                                        </svg>
                                                    </span>
                                                    <span class="bxCntWrap"> <a href="tel:+447719748737" class="tel">+44 7719 748 737</a> </span>
                                                </div>
                                            </li> -->
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        @endif
    </div>
@endsection
