<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<meta name="description" content="تاريخ وا حد مليون العرب في رحلتهم لتصبح مطوري البرمجيات المهنية. إتقان الحرفية على منصة مجانية على الانترنت مع دورات استثنائية.">

<meta name="title" content="تعلم كيفية بناء البرمجيات وتشكيل المستقبل الخاص بك و مليون مبرمج عربي">
<title>منصة هواة الكتاب التونسيين</title>
<!-- Bootstrap Core CSS -->
<link href="/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="/css/main.css" rel="stylesheet">
<!-- Custom Responsive CSS -->
<link href="/css/responsive.css" rel="stylesheet" media="all">
<!-- Animate CSS -->
<link href="/css/animate.min.css" rel="stylesheet">
<!-- Custom Fonts Awesome -->
<link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="/css/css.css" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/earlyaccess/droidarabickufi?ver=1.0" type="text/css" media="all">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<style type="text/css">
    .gradient {
        filter: none;
    }

</style>
<![endif]-->
<link rel="icon" type="image/png" sizes="32x32" href="/images/favicon.png" title="">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-108551684-1');
</script>
</head>
<body class="rtl" style="">

<div class="navbar navbar-inverse navbar-fixed-top" style="box-shadow: 7px 2px 10px grey">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand " href="/" style="position: relative;">
                <div style="font-size: 4rem;color: darkgrey; text-shadow: -2px 2px beige;font-family: '';">نوته</div>
            </a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li ><a href="/contact">اتصل بنا</a></li>
                <li ><a href="/aboutus">عن نوته</a></li>
                <li ><a href="/recent">ابدأ التصفح</a></li>
                @if (Auth::check())
                    <li class=""><a class="btn btn-primary  " href="/login">صفحتي الشخصية</a></li>
                @else
                    <li class=""><a class="btn btn-primary  " href="/login">الدخول</a></li>
                    <li class="enroll-btn"><a class="btn btn-success   " href="/register">انضم</a></li>
                @endif
            </ul>
        </div><!--/.navbar-collapse -->
    </div>
</div>

<!-- Main Banner  -->
<section class="main-banner">
    <div class="container">
        <div class="banner-caption">
            <div class="col-md-7 col-sm-10 col-xs-12">
                <h1>منصة الكتابة الاولى في تونس</h1>
                <p>انضم إلى آلاف عشاق الكتابة والقرائة في تونس و شارك في عديد الانشطة و المساباقات الثقافية</p>
                <div>
                    @if (Auth::check())
                        <a href="/new-story"  class="btn btn-orange btn-lg  animated bounce">ابدأ الكتابة</a>
                    @else
                        <a href="/register"  class="btn btn-orange btn-lg  animated bounce">انضم الآن</a>
                    @endif
                </div>
            </div>
        </div>
        <!-- SCROLL DOWN VISUAL CUE -->
        <div class="scroll-down-cue">
            <a>
                <img class="animated infinite bounce" src="/images/down.png" alt="Learn More">
            </a>
        </div>
        <!-- /SCROLL DOWN VISUAL CUE -->
    </div>
</section>

<footer>
    <div class="container">
        <div class="clearfix">
            <div class="col-md-5 col-xs-12 footer-logos">
                {{--<img src="/images/arabcoder-logo.png" alt="">
                <img src="/images/dubai-future-logo.png" alt="">--}}
            </div>
            <div class="col-md-4 col-xs-12">
                <h5></h5>
                <ul class="footer-links">

                </ul>
            </div>
            <div class="col-md-3 col-xs-12">
                <h5>مبادرة</h5>
                <ul class="footer-links">
                    <li><a href="/a-propos">حول المبادرة</a></li>
                    <li><a href="/contact">الدورات التدريبية</a></li>
                    <li>
                        <a href="tel:" style="text-decoration:none; cursor:default"></a>
                        <a href="mailto:"></a>
                    </li>
                </ul>
                <ul class="social-network social-circle">
                    <li><a href="https://www.facebook.com/" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/" target="_blank" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="copy-rights text-left clearfix">كل الحقوق محفوظة
            © 2019 كلية العلوم بالمنستير الجمهورية التونسية
        </div>
    </div>
</footer>

<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $next = 1;			// fixed, please do not modfy;
    $current = 0;		// fixed, please do not modfy;
    $interval = 500;	// You can set single picture show time;
    $fadeTime = 1000;	// You can set fadeing-transition time;
    $imgNum = 3;		// How many pictures do you have

    $(document).ready(function(){
        //NOTE : Div Wrapper should with css: relative;
        //NOTE : img should with css: absolute;
        //NOTE : img Width & Height can change by you;
        $('.fadeImg').css('position','relative');
        $('.fadeImg img').css({'position':'absolute','width':'252px','height':'42px'});

        nextFadeIn();
    });

    function nextFadeIn(){
        //make image fade in and fade out at one time, without splash vsual;
        $('.fadeImg img').eq($current).delay($interval).fadeOut($fadeTime)
            .end().eq($next).delay($interval).hide().fadeIn($fadeTime, nextFadeIn);

        // if You have 5 images, then (eq) range is 0~4
        // so we should reset to 0 when value > 4;
        if($next < $imgNum-1){ $next++; } else { $next = 0;}
        if($current < $imgNum-1){ $current++; } else { $current =0; }
    };



    // Smooth scrolling
    $('a[href*=#]').on('click', function(event){
        $('html,body').animate({scrollTop:$(this.hash).offset().top-80}, 1000);
    });
</script>

<script>
    $(document).ready(function(){
        $this = $(this);
        $('input[type=radio]').change(function(){
        });
    });

</script>
<script src="/js/main.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-121630609-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-121630609-1');
</script>

</body></html>