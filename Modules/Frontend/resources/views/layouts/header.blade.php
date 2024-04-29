<header id="Header">
    <div class="topHd">
        <div class="sp-container rgt">
            <div class="dFlx">
                <div class="fullSd">
                    <div class="marqueeBx">
                        <!-- <marquee class="marquee" onmouseover="this.stop();" onmouseout="this.start();" direction="left">
                            <ul>
                                <li>
                                    <div class="tleBx">GOLD </div>
                                </li>
                                <li>CURRENT PRICE : $2,171.77 <img src="assets/images/icon-chart.svg" width="26px" height="10px" alt="chart">
                                </li>
                                <li>YEARLY HIGH : $2,224.36 <img src="assets/images/icon-chart.svg" width="26px" height="10px" alt="chart">
                                </li>
                                <li>YEARLY LOW : $1,811.18 <img src="assets/images/icon-chart.svg" width="26px" height="10px" alt="chart">
                                </li>
                                <li>YEARLY CHANGE : +$188.79 <img src="assets/images/icon-chart.svg" width="26px" height="10px" alt="chart">
                                </li>
                                <li>
                                    <div class="tleBx silver">SILVER</div>
                                </li>
                                <li>CURRENT PRICE : $2,171.77 <img src="assets/images/icon-chart.svg" width="26px" height="10px" alt="chart">
                                </li>
                                <li>YEARLY HIGH : $2,224.36 <img src="assets/images/icon-chart.svg" width="26px" height="10px" alt="chart">
                                </li>
                                <li>YEARLY LOW : $1,811.18 <img src="assets/images/icon-chart.svg" width="26px" height="10px" alt="chart">
                                </li>
                                <li>YEARLY CHANGE : +$188.79 <img src="assets/images/icon-chart.svg" width="26px" height="10px" alt="chart">
                                </li>
                            </ul>
                        </marquee> -->
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                                {
                                    "symbols": [{
                                        "description": "GOLD SPOT XAUUSD",
                                        "proName": "FXOPEN:XAUUSD"
                                    }],
                                    "showSymbolLogo": true,
                                    "isTransparent": true,
                                    "displayMode": "regular",
                                    "colorTheme": "light",
                                    "locale": "en"
                                }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="HeaderMain">
        <div class="container">
            <div class="mainFlx">
                <div class="lftSd">
                    <a href="{{ route('index') }}" class="logo" aria-label="Logo">
                        <img src="@themeSettings('website_logo')" width="250" height="80" alt="logo">
                    </a>
                </div>
                <div class="rgtSd">
                    <div class="cNavOuter" id="CNavPOP">
                        <div class="cNavWrap">
                            <button type="button" class="cNacBtn close" aria-labelledby="humburger menu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                            <a href="{{ route('index') }}" class="mobLogo" aria-label="Logo">
                                <img src="@themeSettings('website_logo')" width="250" height="80" alt="logo">
                            </a>
                            <div class="accordion" id="AccordMenu">
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <a href="{{ route('index') }}" class="accordion-button {{ Nav::isRoute('index')}}" aria-label="button">
                                            <span>HOME</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <a href="{{ route('about') }}" class="accordion-button {{ Nav::isRoute('about')}}" aria-label="button">
                                            <span>ABOUT US</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <a href="{{ route('structure.overview') }}" class="accordion-button {{ Nav::isRoute('structure.overview')}}" aria-label="button">
                                            <span>STRUCTURE OVERVIEW</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header">
                                        <a href="{{ route('contact') }}" class="accordion-button {{ Nav::isRoute('contact') }}" aria-label="button">
                                            <span>CONTACT US</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cNacBtnWrap">
                        <button type="button" class="cNacBtn" aria-labelledby="humburger menu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    document.querySelectorAll('.cNacBtn').forEach(button => {
        button.addEventListener('click', function() {
            document.querySelectorAll('.cNacBtn').forEach(btn => {
                btn.classList.toggle('open');
            });
            document.getElementById('CNavPOP').classList.toggle('show');
            document.body.classList.toggle('cPop-open');
        });
    });
</script>

<div id="viewport">
    @yield('content')
    @include('frontend::layouts.footer')
