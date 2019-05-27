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

                    <p>التعليقات</p>
                </div>
                <div class="icon">
                    <i class="fa ion-edit"></i>
                </div>
                <a href="/comments/manage" class="small-box-footer">تصفح التعليقات<span>  </span><i class="fa fa-arrow-circle-left"></i></a>

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

<form class="form" action="/user/changeinfo" method="post"  enctype='multipart/form-data'>
                @csrf

    <div class="box-body box-profile">
        @if ($user->logo != NULL)
        <img class="profile-user-img img-responsive img-circle" id="logodiv" src="/images/{{ $user->logo }}" alt="User profile picture">
        @else
        <img class="profile-user-img img-responsive img-circle" src="/user.png" id="logodiv" alt="User profile picture">
        
        @endif
        <div class="divfile">
        <div class="upload-btn-wrapper">
            <button class="btnchange">تغيير الشعار</button>
            <input type="file" name="logo" id="logo"/>
        </div>
    </div>
        <h3 class="profile-username text-center">{{ $user->name }}</h3>

        <p class="text-muted text-center">مسجل {{   \Carbon\Carbon::parse(Auth::user()->created_at)->diffForHumans()}} </p>
        <div class="row">
            <div class="col-md-8">
<p class="description well" style="direction: rtl">
@if ($user->description != NULL )
<textarea name="intro" class="form-control formintro">{{ $user->intro }}</textarea>
@else
<textarea name="intro" class="form-control formintro" placeholder="أكتب مقدمة عنك هنا ..."></textarea>
@endif
</p>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>عدد المتابعين</b> <a class="">{{ $nbrflws }}</a>
                        </li>
                        <li class="list-group-item">
                            <b> عدد التقييمات</b> <a class="">{{ $nbrcmts }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>عدد الكتابات</b> <a class="">{{ $nbrpsts }}</a>
                        </li>
                    </ul>
                    
                </div>
        </div>
        </div>
    </div>
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"> حول الكاتب </h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
        <strong><i class="fa fa-map-marker margin-r-5"></i> العنوان </strong>

            <p class="text-muted">
                @if ($user->adresse != NULL)
               <input type="text" name="adresse" value="{{ $user->adresse }}" class="form-control formadresse">
                @else
               <input type="text" name="adresse" placeholder="عنوانك ..." class="form-control formadresse">
               @endif
            </p>

            <hr>

            <strong><i class="fa fa-pencil margin-r-5"></i> أبرز المواهب </strong>

            <p>
            @foreach($talents as $talent)
                <span class="label label-danger">{{ $talent }}</span>
            @endforeach  
            </p>

            <hr>

            <strong><i class="fa fa-file-text-o margin-r-5"></i> من انا؟ </strong>
            @if ($user->adresse != NULL)
            <textarea class="form-control formdescription" name="description">{{ $user->description }}</textarea>
            @else
            <textarea class="form-control formdescription" name="description" placeholder="أكتب وصف دقيق عنك هنا ..."></textarea>            
            @endif
        </div>
        <input type="submit" value="حفظ التغييرات" class="btn btn-success margin bottomleft">
        </form>
        <!-- /.box-body -->
    </div>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript">
            $(document). ready(function(){
                $('input[type="file"]').change(function(e){
                    
                    $('#logodiv').attr("src",$('#logo').val());
                });
            });
        </script>
    
@stop
