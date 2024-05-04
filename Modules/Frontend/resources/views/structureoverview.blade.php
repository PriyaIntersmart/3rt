@extends('frontend::layouts.app')
@section('title', 'About Us')
@section('meta_title', $bannerandmeta->meta_title)
@section('meta_keywords', $bannerandmeta->meta_keywords)
@section('meta_description', $bannerandmeta->meta_description)
@section('other_meta_tags')
    {!! $bannerandmeta->other_meta_tags !!}
@endsection
@section('content')
<div id="pageWrapper" class="investmentOverviewPage">
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
@isset($structure_cms)
<section id="Tokenization">
    <div class="container">
        <div class="floatTxt ckCntWrap">
            <div class="dElmtWrap">
            </div>
            <div class="listBx">
                <div class="bxWrap">
                    <h4>{{ $structure_cms->right_section_title }}</h4>
                  {!! $structure_cms->right_section_content !!}
                </div>
            </div>
            <div class="tleWrap">
                <h2>{!! $structure_cms->left_section_title !!}</h2>
                <div class="dElmt logoOutline">
                    <img src="{{ $structure_cms->image_value }}" width="540" height="240" alt="logoOutline">
                </div>
            </div>
            {!! $structure_cms->left_section_content !!}
        </div>
    </div>
</section>
@endisset


    <section id="Snapshot">
        <div class="container">
            <div class="tleWrap center">
                <div class="dElmtWrap">
                    <div class="dElmt gold">
                        <img src="{{ $structure_cms->image_value_one }}" width="400" height="300" alt="gold">
                    </div>
                </div>
                <h2 class="mTle">{{  $structure_cms->section_one_heading}}</h2>
            </div>
            <div class="dFlx">
                <div class="lftSd">
                    <div class="secTle">{{  $structure_cms->section_one_subtitle_one}}</div>
                    <div class="graphBx">
                        <div class="graphWrap">
                            <div class="graRow">
                                <div class="item">
                                    <div class="graThumb" style="height: 30%">$0.4</div>
                                </div>
                                <div class="item">
                                    <div class="graGap">
                                        <span>CAGR: 60%</span>
                                        <span>
                                            <svg width="216" height="16" viewBox="0 0 216 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M215.709 8.70711C216.1 8.31658 216.1 7.68342 215.709 7.29289L209.345 0.928933C208.955 0.538408 208.322 0.538408 207.931 0.928933C207.541 1.31946 207.541 1.95262 207.931 2.34315L213.588 8L207.931 13.6569C207.541 14.0474 207.541 14.6805 207.931 15.0711C208.322 15.4616 208.955 15.4616 209.345 15.0711L215.709 8.70711ZM0 9H215.002V7H0V9Z" fill="#B57D2D" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="graThumb" style="height: 100%">$11tn</div>
                                </div>
                            </div>
                            <div class="graBtmLine"></div>
                            <div class="graInfoX">
                                <span>2023</span>
                                <span>2024</span>
                            </div>
                        </div>
                        <div class="bxCntWrap">
                            <div class="tle">Tokenized Assets Market Size (USD trillion)</div>
                            <div class="txt">Roland Berger estimates that the value of tokenized assets will reach at conservatively ~$10.9 trillion by 2030, with Real Estate, Debt and Investment Funds being the Top 3 tokenized assets.</div>
                        </div>
                    </div>
                </div>
                <div class="rgtSd">
                    <div class="secTle">{{  $structure_cms->section_one_subtitle_two}}</div>
                    <div class="assetBx">
                        <div class="bxWrap">
                            <div class="itemWrap">
                                  {!! $tokenization->title_one !!}
                                  {!! $tokenization->title_two !!}
                                  {!! $tokenization->title_three !!}
                                  {!! $tokenization->title_four !!}
                                  {!! $tokenization->title_five !!}
                                  {!! $tokenization->title_six !!}
                                  {!! $tokenization->title_seven !!}
                                  {!! $tokenization->title_eight !!}
                                  {!! $tokenization->title_nine !!}
                                  {!! $tokenization->title_ten !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@isset($key_elements)
<section id="KeyElements">
    <div class="sp-container lft">
        <div class="dFlx">
            <div class="w50">
                <div class="imgWrap">
                    <img src="{{ $structure_cms->image_value_two }}" width="910" height="820" alt="keyElements">
                </div>
            </div>
            <div class="w50">
                <div class="cntWrap">
                    <div class="tleWrap">
                        <h2 class="mTle">{{ $structure_cms->section_two_heading }}</h2>
                    </div>
                    <div class="bxFlx">
                        @foreach ($key_elements as $item)
                        <div class="item">
                            <div class="keyElementsBx">
                                <div class="bxWrap">
                                    <div class="iconWrap">
                                        <img src="{{ $item->image_value }}" width="34" height="34" alt="liquidity">
                                    </div>
                                    <div class="txtWrap">
                                        <div class="tle">{{ $item->title }}</div>
                                        <div class="txt">{!! $item->description !!}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endisset

</div>

<script>

</script>
@endsection


