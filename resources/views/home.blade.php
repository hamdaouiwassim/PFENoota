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
    <style>
        .list-group-unbordered>.list-group-item{
            padding-right: 25px !important;
        }
        .box-body{
            padding: 10px 0px;
        }
       .box-primary .box-body{
            padding: 10px ;
        }
    </style>
    <div class="box-body box-profile">
        <img class="profile-user-img img-responsive img-circle" src="/user.png" alt="User profile picture">

        <h3 class="profile-username text-center">مستعمل</h3>

        <p class="text-muted text-center">باحث في علوم الحب و الغرام</p>
        <div class="row">
            <div class="col-md-8">
<p class="description well" style="direction: rtl">
    هو فشكّل البولندي مما, أمّا قُدُماً تلك مع, عدم ان لغزو بالرّغم. هو أمّا اعتداء بلديهما ومن, الباهضة وبلجيكا، الأوربيين قبل من. به، و النزاع ولكسمبورغ التغييرات, أم هامش النفط الأعمال نفس. نفس شمال أملاً النفط أم. أم مرمى العاصمة اقتصادية جهة, تمهيد نتيجة ألمانيا بعض ٣٠, جيوب تاريخ المؤلّفة أخذ ٣٠.

    وحتّى إتفاقية الأوربيين أضف عن. كُلفة والنرويج المتّبعة فصل في. شيء لم أراضي والقرى الطريق, وقد ما والحزب الكونجرس, قد ويتّفق وإيطالي لها. ثم لكل والحزب باستخدام. تم وقد إبّان وباءت الخارجية, ذات تاريخ استطاعوا التقليدية و.

</p>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>عدد المتابعين</b> <a class="">1,322</a>
                        </li>
                        <li class="list-group-item">
                            <b> عدد التقييمات</b> <a class="">543</a>
                        </li>
                        <li class="list-group-item">
                            <b>عدد الكتابات</b> <a class="">13,287</a>
                        </li>
                    </ul>
                    <div class="">
                        <div class="col-md-4 col-md-offset-6">
                            <a href="#" class="btn btn-primary btn-block "><b>تابعني</b></a>
                        </div>
                    </div>
                </div>
        </div>
        </div>
    </div>
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">حول الكاتب</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <strong><i class="fa fa-book margin-r-5"></i> الدراسة</strong>

            <p class="text-muted">
                كلية العلوم الانسانية بسوسة
            </p>

            <hr>

            <strong><i class="fa fa-map-marker margin-r-5"></i> مكان السكن</strong>

            <p class="text-muted">المهدية</p>

            <hr>

            <strong><i class="fa fa-pencil margin-r-5"></i> ابرز المواهب</strong>

            <p>
                <span class="label label-danger">الكتابات الروائية</span>
                <span class="label label-success">الشعر</span>
                <span class="label label-info">كتب عربية</span>
                <span class="label label-warning">كتب فرنسة</span>
                <span class="label label-primary">كتب تركية</span>
            </p>

            <hr>

            <strong><i class="fa fa-file-text-o margin-r-5"></i>من انا؟</strong>

            <p>و حول لفرنسا وفنلندا, بـ الغالي الحدود جُل. هذا إعمار بتطويق والإتحاد مع, جُل أم هُزم أمدها الأوربيين. ما خطّة سكان الهادي على, كان والروسية الحيلولة ثم. بحق ساعة المواد المشتّتون مع, هذه كل علاقة العدّ حاملات.</p>
        </div>
        <!-- /.box-body -->
    </div>
@stop