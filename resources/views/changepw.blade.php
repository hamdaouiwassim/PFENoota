@extends('adminlte::page')

@section('title', 'NOOTA')


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
    <form  action='/user/changepw' method="post">
    @csrf
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">تغيير كلمة المرور </h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
        <strong><i class="fa fa-key margin-r-5"></i> كلمة السرّ القديمة</strong>

            <p class="text-muted">
               <input type="text" placeholder="************" class="form-control width60 inputstyle">
            </p>

            <hr>

            <strong><i class="fa fa-key margin-r-5"></i> كلمة السرّ الجديدة</strong>

            <p class="text-muted">
               <input type="text" placeholder="************" class="form-control width60 inputstyle">
            </p>

            <hr>

            <strong><i class="fa fa-key margin-r-5"></i> تكرار كلمة المرور الجديدة</strong>

            <p class="text-muted">
               <input type="text" placeholder="************" class="form-control width60 inputstyle">
            </p>
        </div>
        <input type="submit" value="حفظ التغييرات" class="btn btn-success margin bottomleft">
        </form>
        <!-- /.box-body -->
    </div>

@stop