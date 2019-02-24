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

    @foreach ($posts as $post)

    <div class="tab-pane active well" id="activity">
        <!-- Post -->
        <div class="post ">
            <div class="user-block rtl row">

                {{--<img class="col-xs-3 img-circle img-bordered-sm" src="" alt="user image">--}}
                <i class="fa fa-user-circle fa-4x "></i>
                <span class="col-9username" style="margin-right: 15px;">
                          <a href="#">{{\App\User::findOrFail($post->Iduser )->name}}</a>
                        </span>
                <br/>
                <br/>
                <span class="description">نشر {{ \Carbon\Carbon::parse($post->updated_at)->diffForHumans()  }}</span>
            </div>

            <!-- /.user-block -->
            <div>
                {!! $post->Content  !!}
            </div>
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

    @endforeach
    {!! $posts->render() !!}
@stop