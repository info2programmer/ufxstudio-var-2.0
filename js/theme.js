/*
 Theme Name: TopBiz - Responsive Corporate HTML5 Template
 Theme URL: http://themewar.com/html/topland
 Author: ThemeWar
 Author URI: http://www.themewar.com
 Description: Responsive Corporate HTML5 Template
 Version: 1.0
 */
(function ($) {
    'use strict';
    //========================
    // Loader
    //========================
    $(window).load(function () {
        if ($(".loaderWrap").length > 0)
        {
            $(".loaderWrap").delay(500).fadeOut("slow");
        }
    });
//========================
// Pretty Photo
//========================
    if ($("a[data-rel^='prettyPhoto']").length > 0) {
        $("a[data-rel^='prettyPhoto']").prettyPhoto({
            social_tools: false
        });
    }
//=======================================================
// Gallery Mixing
//=======================================================
    if ($('#mixer').length > 0)
    {
        $('#mixer').themeWar();
    }
//=======================================================
// Circle Bar
//=======================================================
    if ($('.singleSkill').length > 0) {
        $('.skillArea').appear(function () {
            $(".cmskill").each(function () {
                var pint = $(this).attr('data-skills');
                var decs = pint * 100;
                var grs = $(this).attr('data-gradientstart');
                var gre = $(this).attr('data-gradientend');

                $(this).circleProgress({
                    value: pint,
                    startAngle: -Math.PI / 4 * 2,
                    fill: {gradient: [[grs, 1], [gre, .2]], gradientAngle: Math.PI / 4 * 2},
                    lineCap: 'round',
                    thickness: 22,
                    animation: {duration: 1800},
                    size: 270
                }).on('circle-animation-progress', function (event, progress) {
                    $(this).find('strong').html(parseInt(decs * progress) + '<span>%</span>');
                });
            });
        });
    }
    //=======================================================
    // Portfolio Hover
    //=======================================================
    if ($('.folioImg').length > 0) {
        $(' .folioImg').each(function () {
            $(this).hoverdir({
                hoverDelay: 90
            });
        });
    }
    //=======================================================
    // Contact Map
    //=======================================================
    if ($("#map").length > 0)
    {
        var map;
        map = new GMaps({
            el: '#map',
            lat: 51.5224303,
            lng: -0.15554,
            scrollwheel: false,
            zoom: 18,
            zoomControl: false,
            panControl: false,
            streetViewControl: false,
            mapTypeControl: false,
            overviewMapControl: false,
            clickable: false
        });
    }
    //=======================================================
    // Home Slider
    //=======================================================
    if ($(".sliderArea").length > 0)
    {
        var revs;
        revs = $('.tp-banner1').revolution({
            delay: 6000,
            startheight: 656,
            startwidth: 1170,
            hideThumbs: 200,
            thumbWidth: 100,
            thumbHeight: 50,
            thumbAmount: 5,
            navigationType: "bullet",
            navigationArrows: "none",
            navigationStyle: "round",
            touchenabled: "on",
            onHoverStop: "on",
            navOffsetHorizontal: 0,
            navOffsetVertical: 20,
            shadow: 0,
            fullWidth: "on",
            fullScreen: "on"
        });
        revs.bind("revolution.slide.onchange", function (e, data) {
            $(".sliderArea").attr('data-currentslide', 'activRev_' + data.slideIndex);
        });

    }
    //=======================================================
    // Mobile Menu
    //=======================================================
    $(".menuButton").on('click', function () {
        $(".mainMenu > ul").slideToggle('slow');
        $(this).toggleClass('active');
    });
    if ($(window).width() <= 991)
    {
        $("ul li.hasChild > a").on('click', function (e) {
            e.preventDefault();
            $(this).next('.dropSub').slideToggle('slow');
            $(this).next('.dropMenu').slideToggle('slow');
        });
    }
    $(".menuButton").on('click', function () {
        $(".innerMenu > ul").slideToggle('slow');
        $(this).toggleClass('active');
    });
    //=======================================================
    // Color Preset
    //=======================================================
    if ($(".presetArea").length > 0)
    {
        var switchs = true;
        $("#switches").on('click', function (e) {
            e.preventDefault();
            if (switchs)
            {
                $(this).addClass('active');
                $(".presetArea").animate({'left': '0px'}, 400);
                switchs = false;
            }
            else
            {
                $(this).removeClass('active');
                $(".presetArea").animate({'left': '-290px'}, 400);
                switchs = true;
            }
        });

        $(".patterns a").on('click', function (e) {
            e.preventDefault();
            var bg = $(this).attr('href');

            if ($("#boxLayout").hasClass('active'))
            {
                //alert(bg);
                $('.patterns a').removeClass('active');
                $(this).addClass('active');
                $('body').removeClass('bgOne bgTwo bgThree bgFour bgFive');
                $('body').addClass(bg);
            }
            else
            {
                alert('Please, active box layout First.');
            }

        });

        $(".layouta").on('click', function (e) {
            e.preventDefault();
            var layout = $(this).attr('href');
            if (layout == 'wide')
            {
                $('body').removeClass('bgOne bgTwo bgThree bgFour bgFive');
            }
            $('.layouta').removeClass('active');
            $(this).addClass('active');
            $("#layout").attr('href', 'css/colorpreset/' + layout + '.css');
        });

        $(".colorChem a").click(function (e) {
            e.preventDefault();
            var colorsch = $(this).attr('href');
            $('.colorChem a').removeClass('active');
            $(this).addClass('active');
            $("#colorChem").attr('href', 'css/colorpreset/' + colorsch + '.css');
        });

        $(".accentColor a").click(function (e) {
            e.preventDefault();
            var color = $(this).attr('href');
            $(".accentColor a").removeClass('active');
            $(this).addClass('active');
            $("#colorsSet").attr('href', 'css/colorpreset/' + color + '.css');
        });
    }
    //=======================================================
    // Fixed Header 
    //=======================================================
    if ($(".headerArea").length > 0)
    {
        $(window).on('scroll', function () {
            if ($(window).scrollTop() > 500)
            {
                $(".headerArea").addClass('headerFix animated fadeInUp1');
            }
            else
            {
                $(".headerArea").removeClass('headerFix animated fadeInUp1');
            }
        });
    }
    else
    {
        $(window).on('scroll', function () {
            if ($(window).scrollTop() > 170)
            {
                $(".headerArea").addClass('headerFix animated fadeInUp1');
            }
            else
            {
                $(".headerArea").removeClass('headerFix animated fadeInUp1');
            }
        });
    }
    //========================================================
    // Fun Fact
    //========================================================
    $('.funFactArea').appear(function () {
        $('.mycounter').each(function () {
            var $this = $(this);
            jQuery({Counter: 0}).animate({Counter: $this.attr('data-counter')}, {
                duration: 6000,
                easing: 'swing',
                step: function () {
                    var num = Math.ceil(this.Counter).toString();
                    if (Number(num) > 999) {
                        while (/(\d+)(\d{3})/.test(num)) {
                            num = num.replace(/(\d+)(\d{3})/, '<span>' + '$1' + '</span>' + '$2');
                        }
                    }
                    $this.html(num);
                }
            });
        });
    });

    //========================================================
    // Subscribe Form
    //========================================================
    if ($("#subscribeForm").length > 0)
    {
        $("#subscribeForm").submit(function (e) {
            e.preventDefault();
            $("button i", this).removeClass('icon-pencil').addClass('fa fa-spinner fa-spin');
            var email = $("#subs_email").val();
            if (email !== '')
            {
                $("#subs_email").removeClass('errorInput');
                $.ajax({
                    type: "POST",
                    url: 'subscribe.php',
                    data: {email: email},
                    success: function (data)
                    {
                        $("#subs_email").val('');
                        $("#subs_email").attr('placeholder', 'Successfully Done!');
                        $("#subs_email").addClass('successInput');
                        $("#subscribeForm button i").removeClass('fa fa-spinner fa-spin').addClass('icon-pen2');
                    }
                });
            }
            else
            {
                $("#subs_email").addClass('errorInput');
                $("button i", this).removeClass('fa fa-spinner fa-spin').addClass('icon-pen2');
            }
            return false;
        });

    }
    //========================================================
    // Contact
    //========================================================
    if ($("#unContactForm").length > 0)
    {
        $("#unContactForm").on('submit', function (e) {
            e.preventDefault();
            var allData = $(this).serialize();
            var required = 0;
            $("#unConSubmit").html('Sending...');
            $(".required", this).each(function () {
                if ($(this).val() == '')
                {
                    $(this).addClass('reqError');
                    required += 1;
                }
                else
                {
                    if ($(this).hasClass('reqError'))
                    {
                        $(this).removeClass('reqError');
                        if (required > 0)
                        {
                            required -= 1;
                        }
                    }
                }
            });
            //alert(required);
            if (required === 0)
            {
                $("#unConSubmit").html('Sending...');
                $.ajax({
                    type: "POST",
                    url: 'contact_mail.php',
                    data: {allData: allData},
                    success: function (data)
                    {
                        $("#unContactForm input[type='text'], #unContactForm input[type='email'], #unContactForm textarea").val('');
                        $("#unConSubmit").html('Done!');
                    }
                });
            }
            else
            {
                $("#unConSubmit").html('Send');
            }
        });
    }
    //========================
    // Back To Top
    //========================
    if ($("#backto").length > 0)
    {
        $("#backto").on('click', function (e) {
            e.preventDefault();
            $('html, body').animate({scrollTop: 0}, 1000);
        });
    }
    //========================
    // WOW INIT
    //========================
    if ($(window).width() > 490)
    {
        var wow = new WOW({
            mobile: false
        });
        wow.init();
    }
    //========================
    // Image Carousel
    //========================
    if ($(".caroselArea").length > 0)
    {
        // home page slider 
        $('.imageCaros').slick({
            centerMode: true,
            centerPadding: '80px',
            slidesToShow: 3,
            autoplay: true,
            autoplaySpeed: 5000,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }
})(jQuery);
