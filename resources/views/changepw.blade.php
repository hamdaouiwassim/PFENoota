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
        @isset($msg)
        @if ($type == "success")
         <div class="alert alert-success">
         @else
         <div class="alert alert-warning">
         @endif
            {{ $msg }}
         </div>
        @endisset
    
    
    <form  action='/user/changepw' method="post">
    @csrf
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">تغيير كلمة المرور </h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
        

            <strong><i class="fa fa-key margin-r-5"></i> كلمة السرّ الجديدة</strong>

            <p class="text-muted">
            
               <input name="newpw" type="password" placeholder="************" class="form-control width60 inputstyle">
               <label style="font-size:10px;margin-top:5px;">  * كلمة السرّ تتكون من 8 حروف على الأقل  </label>
            </p>

            <hr>

            <strong><i class="fa fa-key margin-r-5"></i> تأكيد كلمة المرور الجديدة</strong>

            <p class="text-muted">
            
               <input name="rnewpw" type="password" placeholder="************" class="form-control width60 inputstyle">
               <label style="font-size:10px;margin-top:5px;">  * كلمة السرّ تتكون من 8 حروف على الأقل</label>
            </p>
        </div>
        <input type="submit" value="حفظ التغييرات" class="btn btn-success margin bottomleft">
        </form>
        <!-- /.box-body -->
    </div>

@stop