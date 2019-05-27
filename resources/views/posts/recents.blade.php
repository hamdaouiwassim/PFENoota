<!DOCTYPE html>
<html dir='rtl'>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NOOTA</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="/vendor/adminlte/vendor/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/vendor/adminlte/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/vendor/adminlte/vendor/Ionicons/css/ionicons.min.css">

            <!-- Select2 -->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css">
    
    <!-- Theme style -->
    <link rel="stylesheet" href="/vendor/adminlte/dist/css/AdminLTE.min.css">

            <!-- DataTables with bootstrap 3 style -->
        <link rel="stylesheet" href="//cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.css">
    
        <link rel="stylesheet"
          href="/vendor/adminlte/dist/css/skins/skin-black-light.min.css ">
    <link href="/css/custom.css" rel="stylesheet">
        
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-black-light sidebar-mini ">

    <div class="wrapper" style="direction: rtl">

        
       
        
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
             <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">

<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">

 <!-- Sidebar Menu -->
<ul class="sidebar-menu" data-widget="tree">
@if (Auth::check())
<li class="header">القائمة</li>
<li class="">
<a href="/"
       >
<i class="fa fa-fw fa-files-o text-blue"></i>
<span>الرئيسية</span>
        </a>
</li>
<li>
<a href="/recents"
       >
<i class="fa fa-fw fa-plus-square-o text-blue"></i>
<span>كلّ المنشورات </span>
        </a>
</li>
<li class="">
<a href="/profile">
<i class="fa fa-fw fa-user text-green"></i>
<span>حسابي </span>
        </a>
</li>
<li class="">
<a href="/new-story"
       >
<i class="fa fa-fw fa-plus-square-o text-blue"></i>
<span>اكتب</span>
        </a>
</li>
<li class="">
<a href="/logout"       > <i class="fa fa-fw fa-power-off"></i><span>الخروج</span> </a>
</li>
</ul>
</li>

@else
<li class="header">القائمة</li>
<li class="">
<a href="/"
       >
<i class="fa fa-fw fa-files-o text-blue"></i>
<span>الرئيسية</span>
        </a>
</li>
<li>
<a href="/recents"
       >
<i class="fa fa-fw fa-plus-square-o text-blue"></i>
<span>كلّ المنشورات </span>
        </a>
</li>


<li class="">
<a href="/login"       > <i class="fa fa-fw fa-sign-in"></i><span>الدخول</span> </a>
</li>
</ul>
</li>
@endif
    </ul>
    <!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
</aside>

            <!-- Main content -->
            <section class="content">

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



    <div class="box box-primary">
        <div class="box-header with-border">
            
            <h2 > <i class="fa fa-fw fa-files-o text-blue"></i> أخر المنشورات  </h2>
            <hr>
            <div class="posts rtl">
            @foreach($posts as $post)
              @foreach($users as $user )
                @if ($user->id == $post->Iduser)
                <div class="post col-md-12 well rtl" >
                        <div class="user_details col-md-4 rtl " style="text-align:right">
                            @if ($user->logo != "")               
                            <img src="images/{{ $user->logo }}" class="userlogo" >
                            @else
                            <img src="images/default.jpeg" class="userlogo" >
                            @endif
                            <br/>
                            <br/>
                            <span class="col-9username" style="margin-right: 15px;">
                                <a href="/user/{{ $user->id }}" > {{ $user->name }}</a>
                                </span>
                            <br/>
                            <br/>
                            <span class="description"> نشر {{ \Carbon\Carbon::parse($post->updated_at)->diffForHumans()  }}</span>
                        </div>
                    <div class="post_details col-md-8 rtl">    
                            <div class="title">
                                <h4>{{ $post->Title }}</h4>
                            </div>
                            <div class="description">
                            <p>{!! $post->Content  !!}</p>
                            </div>
                            <div class="details">
                            <a href="#" class="btn btn-primary" style="font-size:10px;"><i class="fa fa-comment margin-r-5"></i> {{ $comments[$post->Id] }} </a>
                            <a href="#" class="btn btn-default" style="font-size:10px;"><i class="fa fa-heart margin-r-5" style="color:red;"></i> {{ $reactions[$post->Id] }} </a>
                            <a href="/post/{{ $post->Id }}/favoris" class="btn btn-default" style="font-size:10px;"><i class="fa fa-star margin-r-5" style="color:orange;"></i>  </a>
                            
                            <a href="/post/{{ $post->Id }}" class="btn btn-success" style="font-size:10px;">شاهد المقال </a>
                            </div>
                    </div>
                </div>
                @endif
                @endforeach
            @endforeach
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
       

          
        </div>
      
        <!-- /.box-body -->
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
    <script type="text/javascript">
            $(document). ready(function(){
                $('input[type="file"]').change(function(e){
                    
                    $('#logodiv').attr("src",$('#logo').val());
                });
            });


            // Unflow Action 
            $('#unflow').mouseenter(function(){
               
                $('#unflow').text("إحذف المتابعة");  
            });
            $('#unflow').mouseleave(function(){
              
                $('#unflow').text("أنت تتابعني ");  
            });
        </script>
    
    </section>
            <!-- /.content -->
                    </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- ./wrapper -->

<script src="/vendor/adminlte/vendor/jquery/dist/jquery.min.js"></script>
<script src="/vendor/adminlte/vendor/jquery/dist/jquery.slimscroll.min.js"></script>
<script src="/vendor/adminlte/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Select2 -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

    <!-- DataTables with bootstrap 3 renderer -->
    <script src="//cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.js"></script>

    <!-- ChartJS -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js"></script>

    <script src="/vendor/adminlte/dist/js/adminlte.min.js"></script>
        
</body>
</html>
