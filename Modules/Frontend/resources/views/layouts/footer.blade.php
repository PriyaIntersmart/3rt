</div>

<footer id="Footer">
    <div class="container">
        <div class="ftMid">
            <div class="ftAccordion accordion" id="ftAcco">
                <div class="accordion-item Col">
                    <div class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ftAcco1" aria-expanded="true" aria-controls="ftAcco1">
                            <span class="ftTle">QUICK LINKS</span>
                        </button>
                    </div>
                    <div id="ftAcco1" class="accordion-collapse collapse show" aria-labelledby="ftAcco1" data-bs-parent="#ftAcco">
                        <div class="accordion-body">
                            <ul class="ftUl">
                                <li>
                                    <a href="{{ route('index') }}" class="ftTxt {{ Nav::isRoute('index')}}" aria-label="nav">Home</a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}" class="ftTxt {{ Nav::isRoute('about')}}" aria-label="nav">About us</a>
                                </li>
                                <li>
                                    <a href="{{ route('structure.overview') }}" class="ftTxt {{ Nav::isRoute('structure.overview')}}" aria-label="nav">Structure overview</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}" class="ftTxt {{ Nav::isRoute('contact')}}" aria-label="nav">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @foreach ($address as $item)
                <div class="Col">
                    <div class="itemWrap">
                        <div class="ftTle">{{ $item->title }}</div>
                        <ul class="ftUl">
                            <li>
                                <p class="ftTxt">{!! $item->address !!}</p>
                            </li>
                        </ul>
                    </div>
                </div>
                @endforeach


                <div class="Col">
                    <div class="itemWrap">
                        <div class="ftTle">CONTACT US</div>
                        <ul class="ftUl">
                            <li>
                                <a href="mailto:{{  $siteCommon->email }}" class="ftTxt mail" aria-label="mail">Email: <br> {{  $siteCommon->email }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="Col">
                    <div class="itemWrap">
                        <a href="{{ route('index') }}" class="logoWrap" aria-label="Logo">
                            <img src="@themeSettings('website_logo')" width="230" height="100" alt="logo">
                        </a>
                    </div>
                    <div class="itemWrap">
                        <p class="ftTxt">3RT Smart Gold Holdings
                            is a forward thinking and
                            innovative gold exploration
                            company in Canada</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="ftBtm">
            <div class="dFlx">
                <div class="lftSd">
                    <p class="ftTxt">Copyright © <?= date('Y') ?> 3RT Smart Gold. All Rights Reserved.</p>
                </div>
                <div class="midSd">
                    <p class="ftTxt"><a href="{{ route('terms-and-condition') }}">Terms and Conditions</a></p>
                    <!-- &nbsp; | &nbsp;<a href="disclaimer.php">Disclaimer</a></p> -->
                </div>
                <div class="rgtSd">
                    <p class="ftTxt">Designed By: <a href="https://www.intersmartsolution.com/" target="_blank">inter Smart</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<ul id="fixedRgt">
    <li>
        <a href="https://wa.me/{{ $siteCommon->phone }}"target="_blank" class="call" aria-label="call">
            <img src="{{ asset('frontend/images/icon-callUs.svg') }}" width="36" height="36" alt="icon">
        </a>
    </li>
    <li>
        <a href="mailto:{{  $siteCommon->email }}" target="_blank" class="mail dir-lft" aria-label="mail">
            <img src="{{ asset('frontend/images/icon-mailUs.svg') }}" width="36" height="36" alt="icon">
        </a>
    </li>
</ul>

<!-- Google Tag Manager -->
<!-- <script async="true">
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-T7C88L3');
</script> -->
<!-- End Google Tag Manager -->

<!-- CUSTOM --->
<script type="text/javascript" src="{{ asset('frontend/js/app.min.js') }}" defer></script>

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T7C88L3" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- BOOTSTRAP --->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>




<!-- TOUCH_SWIPE -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.19/jquery.touchSwipe.min.js" integrity="sha512-YYiD5ZhmJ0GCdJvx6Xe6HzHqHvMpJEPomXwPbsgcpMFPW+mQEeVBU6l9n+2Y+naq+CLbujk91vHyN18q6/RSYw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- OWL -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- SCROLL_MAGIC -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js" integrity="sha512-8E3KZoPoZCD+1dgfqhPbejQBnQfBXe8FuwL4z/c8sTrgeDMFEnoyTlH3obB4/fV+6Sg0a0XF+L/6xS4Xx1fUEg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- JARALLAX --->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jarallax/2.0.3/jarallax.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jarallax/2.0.3/jarallax.min.js"></script>

<script>
    // TOUCH_SWIPE
    $(".carousel").swipe({
        swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
            if (direction == 'left') $(this).carousel('next');
            if (direction == 'right') $(this).carousel('prev');
        },
        allowPageScroll: "vertical"
    });
    // COUNT SLIDER
    $(".countSlide").owlCarousel({
        items: 1,
        margin: 0,
        loop: $('.countSlide .owl-item').length >= 1 ? true : false,
        rewind: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        nav: false,
        dots: false,
        responsive: {
            1551: {
                items: 5,
                loop: $('.countSlide .owl-item').length >= 5 ? true : false,
                margin: 20,
            },
            992: {
                items: 5,
                loop: $('.countSlide .owl-item').length >= 5 ? true : false,
                margin: 10,
            },
            768: {
                items: 5,
                loop: $('.countSlide .owl-item').length >= 5 ? true : false,
                margin: 8,
            },
            468: {
                items: 4,
                loop: $('.countSlide .owl-item').length >= 4 ? true : false,
                margin: 8,
            },
            376: {
                items: 2,
                loop: $('.countSlide .owl-item').length >= 2 ? true : false,
                margin: 6,
            },
            320: {
                items: 2,
                loop: $('.countSlide .owl-item').length >= 2 ? true : false,
                margin: 4,
            }
        }
    });
    // COUNTER
    var controller = new ScrollMagic.Controller();
    var scene = new ScrollMagic.Scene({
            triggerElement: '#About',
            triggerHook: 0.9
        })
        .on("enter", function() {
            $(".counter").each(function() {
                var $this = $(this),
                    countTo = $this.attr("data-countto");
                countDuration = parseInt($this.attr("data-duration"));
                $({
                    counter: $this.text()
                }).animate({
                    counter: countTo
                }, {
                    duration: countDuration,
                    easing: "linear",
                    step: function() {
                        $this.text(Math.floor(this.counter));
                    },
                    complete: function() {
                        $this.text(this.counter);
                    }
                });
            });
        })
        .on("leave", function() {
            $('.counter').each(function() {
                $(this).text(0);
            });
        })
        .addTo(controller);
    // JARALLAX
    $('.jarallax').jarallax();
    // NEWS SLIDER
    $(".newsSlide").owlCarousel({
        items: 1,
        margin: 0,
        loop: $('.newsSlide .owl-item').length >= 1 ? true : false,
        rewind: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        nav: false,
        dots: false,
        responsive: {
            1551: {
                items: 3,
                loop: $('.newsSlide .owl-item').length >= 3 ? true : false,
                margin: 20,
            },
            1200: {
                items: 3,
                loop: $('.newsSlide .owl-item').length >= 3 ? true : false,
                margin: 10,
            },
            992: {
                items: 2,
                loop: $('.newsSlide .owl-item').length >= 2 ? true : false,
                margin: 10,
            },
            576: {
                items: 2,
                loop: $('.newsSlide .owl-item').length >= 2 ? true : false,
                margin: 10,
            },
            468: {
                items: 2,
                loop: $('.newsSlide .owl-item').length >= 2 ? true : false,
                margin: 8,
            },
            376: {
                items: 2,
                loop: $('.newsSlide .owl-item').length >= 2 ? true : false,
                margin: 6,
            }
        }
    });
</script>
<script>
    // COUNTER
    var controller = new ScrollMagic.Controller();
    var scene = new ScrollMagic.Scene({
        triggerElement: '#details',
        triggerHook: 0.9
    })
        .on("enter", function () {
            $(".counter").each(function () {
                var $this = $(this),
                    countTo = $this.attr("data-countto");
                countDuration = parseInt($this.attr("data-duration"));
                $({
                    counter: $this.text()
                }).animate({
                    counter: countTo
                }, {
                    duration: countDuration,
                    easing: "linear",
                    step: function () {
                        $this.text(Math.floor(this.counter));
                    },
                    complete: function () {
                        $this.text(this.counter);
                    }
                });
            });
        })
        .on("leave", function () {
            $('.counter').each(function () {
                $(this).text(0);
            });
        })
        .addTo(controller);


    $('.miningSlider').owlCarousel({
        rewind: false,
        autoplay: false,
        smartSpeed: 500,
        autoplayTimeout: 3500,
        autoplayHoverPause: true,
        items: 1,
        lazyLoad: true,
        dotsEach: 1,
        margin: 10,
        responsiveClass: true,
        nav: false,
        responsive: {
            520: {
                items: 2,
                margin: 10,
                dotsEach: 1,
            },
            578: {
                items: 2,
                margin: 10,
                dotsEach: 1,
            },
            678: {
                items: 2.5,
                margin: 10,
                dotsEach: 2,
            },

            992: {
                items: 3,
                margin: 10,
                dotsEach: 3,
            },
            1200: {
                items: 4,
                margin: 10,
                dotsEach: 4,
            },
            1551: {
                items: 4,
                margin: 20,
                dotsEach: 4,
            }
        }
    });

    $('.teamSlider').owlCarousel({
        rewind: false,
        autoplay: false,
        smartSpeed: 500,
        autoplayTimeout: 3500,
        autoplayHoverPause: true,
        items: 1,
        lazyLoad: true,
        // dotsEach: 3,
        margin: 10,
        responsiveClass: true,
        nav: false,
        responsive: {
            578: {
                items: 2,
                margin: 10,
            },
            678: {
                items: 2.5,
                margin: 15,
            },
            992: {
                items: 3,
                margin: 20,
            },
            1200: {
                items: 3,
                margin: 40,
            },
            1551: {
                items: 3,
                margin: 70,
            }
        }
    });

    // CONTACT
    $(document).ready(function () {
        var timeout;
        $('#overview, #details').mousemove(function (e) {
            if (timeout) clearTimeout(timeout);
            setTimeout(callParallax.bind(null, e), 200);

        });
        if ($(window).width() >= 768) {
            function callParallax(e) {
                parallaxIt(e, '.imgBx', -30);
            }
        }

        function parallaxIt(e, target, movement) {
            var $this = $('#overview, #details');
            var relX = e.pageX - $this.offset().left;
            var relY = e.pageY - $this.offset().top;

            TweenMax.to(target, 1, {
                x: (relX - $this.width() / 2) / $this.width() * movement,
                y: (relY - $this.height() / 2) / $this.height() * movement,
                ease: Power2.easeOut
            })
        }
    });
</script>
</body>

</html>
