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

    @foreach ($comments as $comment)

          <div class="singleComment">
            <div class="userAdedComment">
                <div class="logoUserAdedComment"><img src=""></div>
                <div class="nameUserAdedComment"></div>
                <div class="dateUserAdedComment"></div>
                <p class="CommentContent"></p>
            </div>
            <div class="replyComment">
                <div>
                <form  method="POST" action="">
                        <input type="hidden" value="">
                        <input type="text" name="replayContent">
                        <input type="submit" name="replaybtn" value="أضف الردّ">
                </form>
                </div>
                 
            </div>
          </div>

    @endforeach
    @stop