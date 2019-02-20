@extends('adminlte::page')

@section('title', 'NOOTA')

@section('content_header')
    <div class="row bg-gray-active " style="padding-top: 30px;padding-bottom: 10px;margin-top: -20px;">
    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3>°</h3>

                <p>الاحصائيات</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="/statistics" class="small-box-footer">الاحصائيات<span>  </span><i class="fa fa-arrow-circle-left"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3>°<sup style="font-size: 20px"></sup></h3>

                <p>كتابي المفضلون</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="/favourit-writers" class="small-box-footer"> كتابي المفضلون <i class="fa fa-arrow-circle-left"></i></a>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3>°</h3>

                <p>كتابات الشهر</p>
            </div>
            <div class="icon">
                <i class="fa fa-files-o"></i>
            </div>
            <a href="/monthly-writing-contest" class="small-box-footer"> كتابات الشهر <i class="fa fa-arrow-circle-left"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-blue">
            <div class="inner">
                <h3>°</h3>

                <p>اكتب الآن</p>
            </div>
            <div class="icon">
               <i class="fa ion-edit"></i>
            </div>
            <a href="/new-story" class="small-box-footer">اكتب الآن<span>  </span><i class="fa fa-arrow-circle-left"></i></a>

        </div>
    </div>
    </div>
@stop

@section('content')
    <div class="tab-pane active well" id="activity">
        <!-- Post -->
        <div class="post ">
            <div class="user-block rtl row">

                {{--<img class="col-xs-3 img-circle img-bordered-sm" src="" alt="user image">--}}
                <i class="fa fa-user-circle fa-4x "></i>
                <span class="col-9username" style="margin-right: 15px;">
                          <a href="#">فلان بن فلان الفلاني</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                <br/>
                <br/>
                <span class="description">اليوم مع الساعة ....</span>
            </div>

            <!-- /.user-block -->
            <p>
                لكل قد الأحمر اليابان،, تونس تُصب ذلك مع. وتنامت المشترك إيو ٣٠. عن حدى كرسي تكبّد الأوضاع, جدول واعتلاء بال إذ, أي وقد أمام الإمتعاض. فكانت والنفيس لبلجيكا، في ذلك, أملاً وزارة ثم قام. ما وفي قادة لليابان ولكسمبورغ, عل بحث وشعار والقرى التّحول, ثم يتم احداث العالمي. ذات ثمّة قامت المجتمع مع, وبدأت ليتسنّى هو على.

                الا عن تصفح الشمل إستيلاء, التي وبداية الاندونيسية هو غير. بأيدي بالرغم وإيطالي أخر قد. عرض جيوب لمحاكم بل, هذا حاول وحتى ثم, الموسوعة المتساقطة، تم الا. بل ذات ضمنها الربيع، والمانيا, أما الدول الطريق هو. أما بل مارد وحتى. إذ بحق بخطوط الستار, عدم لهذه غريمه وفرنسا أي, ويعزى بأضرار واندونيسيا، مدن أي.
            </p>
            <ul class="list-inline">
                <li><a href="#" class="link-black text-sm text-yellow"><i class="fa fa-star-half-empty margin-r-5 text-yellow"></i> قيم</a>
                </li>
                <li class="pull-right">
                    <a href="#" class="link-black text-sm text-blue"><i class="fa fa-comments-o margin-r-5 text-blue"></i> تعليق</a></li>
            </ul>

            <input class="form-control input-sm" type="text" placeholder="Type a comment">
        </div>
        <!-- /.post -->

    </div>
    <div class="tab-pane active well" id="activity">
        <!-- Post -->
        <div class="post ">
            <div class="user-block rtl row">

                {{--<img class="col-xs-3 img-circle img-bordered-sm" src="" alt="user image">--}}
                <i class="fa fa-user-circle fa-4x "></i>
                <span class="col-9username" style="margin-right: 15px;">
                          <a href="#">فلان بن فلان الفلتاني</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                <br/>
                <br/>
                <span class="description">اليوم مع الساعة ....</span>
            </div>

            <!-- /.user-block -->
            <p>
                لكل قد الأحمر اليابان،, تونس تُصب ذلك مع. وتنامت المشترك إيو ٣٠. عن حدى كرسي تكبّد الأوضاع, جدول واعتلاء بال إذ, أي وقد أمام الإمتعاض. فكانت والنفيس لبلجيكا، في ذلك, أملاً وزارة ثم قام. ما وفي قادة لليابان ولكسمبورغ, عل بحث وشعار والقرى التّحول, ثم يتم احداث العالمي. ذات ثمّة قامت المجتمع مع, وبدأت ليتسنّى هو على.

                الا عن تصفح الشمل إستيلاء, التي وبداية الاندونيسية هو غير. بأيدي بالرغم وإيطالي أخر قد. عرض جيوب لمحاكم بل, هذا حاول وحتى ثم, الموسوعة المتساقطة، تم الا. بل ذات ضمنها الربيع، والمانيا, أما الدول الطريق هو. أما بل مارد وحتى. إذ بحق بخطوط الستار, عدم لهذه غريمه وفرنسا أي, ويعزى بأضرار واندونيسيا، مدن أي.
            </p>
            <ul class="list-inline">
                <li><a href="#" class="link-black text-sm text-yellow"><i class="fa fa-star-half-empty margin-r-5 text-yellow"></i> قيم</a>
                </li>
                <li class="pull-right">
                    <a href="#" class="link-black text-sm text-blue"><i class="fa fa-comments-o margin-r-5 text-blue"></i> تعليق</a></li>
            </ul>

            <input class="form-control input-sm" type="text" placeholder="Type a comment">
        </div>
        <!-- /.post -->

    </div>
@stop