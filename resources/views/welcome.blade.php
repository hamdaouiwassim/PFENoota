<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<meta name="description" content="تاريخ وا حد مليون العرب في رحلتهم لتصبح مطوري البرمجيات المهنية. إتقان الحرفية على منصة مجانية على الانترنت مع دورات استثنائية.">
<meta name="csrf-token" content="1532788924##67056c72221c402419d4428e85c14244cf82d24d">
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

<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand fadeImg" href="/" style="position: relative;">
                <img src="/images/logo-1.png" alt="" style="position: absolute; width: 252px; height: 42px; display: none;">
                <img style="position: absolute; width: 252px; height: 42px; display: block; opacity: 0.704325;" src="/images/logo-2.png" alt="">
                <img style="position: absolute; width: 252px; height: 42px; display: block; opacity: 0.295675;" src="/images/logo-3.png" alt="">
            </a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li ><a href="/contact">اتصل بنا</a></li>
                <li ><a href="/aboutus">عن نوته</a></li>
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
<!-- Partner logos Strip  -->
{{--<section class="partner-logos" id="partners">
    <div class="container">
        <div class="col-sm-12 col-md-12 text-center">
            <h2>شريك استراتيجي</h2>
            <img src="/images/damac-foundation.png" alt="Hussain Sajwani- Damac Foundation" title="Hussain Sajwani- Damac Foundation">
        </div>
    </div>
</section>--}}
<!-- Services Section -->
<section class="services-sec" id="aboutUs">
    <div class="container">
        <div class="head-section">
            <h3>انضم إلى هذه المبادرة الفريدة لإعداد الجيل المقبل من الكتاب</h3>
            <p>مبادرة كلية العلوم بالمنستير</p>
        </div>
        <div class="sercive-sec-list row">
            <div class="col-md-4 col-sm-4 col-md-12 col-service">
                <img src="/images/online-cerifications.png" alt="Online Certifications">
                <h4>فضاء خاص بعشاق الكتابة</h4>
                <p>هنا يلتقي كل عشاق الكتاب التونسيين</p>
            </div>
            <div class="col-md-4 col-sm-4 col-md-12 col-service">
                <img src="/images/online-forms.png" alt="Online Forums">
                <h4>استمتع بفضائنا التفاعلي</h4>
                <p>كن جزءاً من مجتمع معرفي من الكتاب والقراء، لتبادل المعارف والمعلومات وتنمية المهارات</p>
            </div>
            <div class="col-md-4 col-sm-4 col-md-12 col-service">
                {{--<img src="/public/images/udacity-scholarships.png" alt="Udacity Scholarships">--}}
                <h4>فرص للتفاعل مع مجتمع الكتاب المحترفيين </h4>
                <p>احصل على ميزة التفاعل مع محترفي الكتابة التونسيين</p>
            </div>
        </div>
    </div>
</section>
<!-- Course Section -->
{{--<section class="software-sec" id="curriculum">
    <div class="container">
        <div class="head-section">
            <h3>حدد مستقبلك في عالم البرمجيات </h3>
            <p>احصل على المهنة التي تحلم بها عبر اختيارك واحداً من أربعة مسارات هي الأكثر طلباً في مجال تطوير المواقع الإلكترونية. </p>
        </div>
        <div class="row marTop4Bot2">
            <div class="col-sm-12 col-md-6 col-service">
                <div class="thumbnail-icon col-sm-3 col-xs-12">
                    <img src="/images/webdeveloper-ico.png" alt="Full-Stack Web Developer">
                </div>
                <div class="thumbnail-caption col-sm-9 col-xs-12">
                    <h4>فرصتك لتصبح خبيراً في تطوير المواقع الإلكترونية</h4>
                    <p>هل ترغب بمعرفة كيف يتم تصميم شبكات التواصل الاجتماعي ومنصات الفيديو ومواقع التجارة الإلكترونية؟
                        تعلم كيفية تطوير تطبيقات المواقع الإلكترونية القابلة للتوسع عالمياً عبر هذا المسار.
                    </p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-service">
                <div class="thumbnail-icon col-sm-3 col-xs-12">
                    <img src="/images/andriod-ico.png" alt="Android App Guru">
                </div>
                <div class="thumbnail-caption col-sm-9 col-xs-12">
                    <h4>فرصتك لتصبح خبيراً بتطبيقات أندرويد </h4>
                    <p>هل لديك فضول لمعرفة طريقة عمل تطبيقات الهاتف المحمول؟ هل لديك فكرة لتطبيق وترغب بتنفيذها؟ سيقدم لك هذا المسار كافة المهارات التي تحتاجها.
                    </p>
                </div>
            </div>
        </div>
        <div class="row marTop4Bot2">
            <div class="col-sm-12 col-md-6 col-service">
                <div class="thumbnail-icon col-sm-3 col-xs-12">
                    <img src="/images/frontend-ico.png" alt="Front-End Web Expert">
                </div>
                <div class="thumbnail-caption col-sm-9 col-xs-12">
                    <h4>فرصتك لتصبح خبيراً في تطوير صفحات المواقع الإلكترونية </h4>
                    <p>هل ترغب في تصميم صفحات المواقع الإلكترونية وتطبيقات للهاتف المحمول تفاعلية وذات تصميم جذاب بحيث تضمن تقديم تجربة مذهلة للمستخدم؟
                        تعلّم عبر هذا المسار المتعمق في مجال تطوير المواقع الإلكترونية كيف تنمّي هذه المهارة.
                    </p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-service">
                <div class="thumbnail-icon col-sm-3 col-xs-12">
                    <img src="/images/dataAnalyst-ico.png" alt="Data Analyst Specialist">
                </div>
                <div class="thumbnail-caption col-sm-9 col-xs-12">
                    <h4>فرصتك لتصبح خبيراً في تحليل البيانات </h4>
                    <p>إن علم البيانات هو الحقل الأكثر إثارة في مجال التكنولوجيا، وتكمن أهميته في استخلاص أبرز النتائج من بين أحجام هائلة من البيانات. ويمكنك عبر هذا المسار أن تصبح خبيراً في هذا المجال. </p>
                </div>
            </div>
        </div>
    </div>
</section>--}}
<!-- 3 Steps Section -->
<section class="services-sec">
    <div class="container">
        <div class="head-section">
            <h3>خطوات التسجيل</h3>
            <p>كيفية التسجيل والاستفادة من المنصة المجانية</p>
        </div>
        <div class="steps-sec">
            <div class="row bs-wizard" style="border-bottom:0;">

                <div class="col-sm-4 col-xs-12 bs-wizard-step">
                    <div class="progress"><div class="progress-bar"></div></div>
                    <div class="bs-wizard-dot step-1"></div>
                    <div class="steps-sec-text">
                        <h4>١. إنضم الأن</h4>
                        <div class="bs-wizard-info text-center">قم بالتسجيل ،و تحصل فورا على منصة كتابة خاصة بك و كون شبكة قراء واسعة</div>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-12 bs-wizard-step"><!-- complete -->
                    <div class="progress"><div class="progress-bar"></div></div>
                    <div class="bs-wizard-dot step-2"></div>
                    <div class="steps-sec-text">
                        <h4>٢.  طور مهاراتك</h4>
                        <div class="bs-wizard-info text-center">طور مهاراتك في الكتابة عن طريق التفاعل مع آلاف الكتاب و تقبل النقد لتحسين المحتوى و </div>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-12 bs-wizard-step"><!-- complete -->
                    <div class="progress"><div class="progress-bar"></div></div>
                    <div class="bs-wizard-dot step-3"></div>
                    <div class="steps-sec-text">
                        <h4>٣.  كن كاتبا محترفا من الطراز العالمي</h4>
                        <div class="bs-wizard-info text-center">كن واحدا من الكتاب الذين شهد التاررخ بكتاباتهم</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
{{--<section class="partner-logos">
    <div class="container">
        <div class="col-sm-12 col-md-12">
            <h2>شركاء داعمين‎</h2>
            <img src="/images/bayt.png" alt="Bayt - The Middle East&#39;s Leading Job Site" title="Bayt - The Middle East&#39;s Leading Job Site">
            <img src="/images/udacity.png" alt="UDACITY - Imagine Your Future‎" title="UDACITY - Imagine Your Future">
            <img src="/images/marsad-al-mostaqbal.png" alt="Marsad Al Mostaqbal" title="Marsad Al Mostaqbal">
        </div>
    </div>
</section>--}}
<!-- Footer Section -->
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