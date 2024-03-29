
<!DOCTYPE html>
<html>
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

    <!-- Main Header -->
    <header class="main-header">
        <!-- Logo -->
        <a href="/profile" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>ن</b>ت</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>نو</b>ته</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">القائمة الجانبية</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">

                <ul class="nav navbar-nav">
                    <li>
                        <a href="#"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        >
                            <i class="fa fa-fw fa-power-off"></i> تسجيل خروج
                        </a>
                        <form id="logout-form" action="/logout" method="POST" style="display: none;">
                            <input type="hidden" name="_token" value="zU0N836O5wGFn7TPjNIKunRYT2nfCwV8CHZFXDQn">
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">الاساسيات</li>
                <li class="">
                    <a href="/mywritings"
                    >
                        <i class="fa fa-fw fa-files-o text-blue"></i>
                        <span>كتاباتي</span>
                    </a>
                </li>
                <li class="">
                    <a href="/new-story"
                    >
                        <i class="fa fa-fw fa-plus-square-o text-blue"></i>
                        <span>اكتب</span>
                    </a>
                </li>
                <li class="header">حسابي الشخصي</li>
                <li class="">
                    <a href="/profile"
                    >
                        <i class="fa fa-fw fa-user text-green"></i>
                        <span>معلوماتي الشخصية</span>
                    </a>
                </li>
                <li class="">
                    <a href="/changepassword"
                    >
                        <i class="fa fa-fw fa-lock "></i>
                        <span>تغيير كلمة العبور</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#"
                    >
                        <i class="fa fa-fw fa-share "></i>
                        <span>تصفح</span>
                        <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="">
                            <a href="/recents"
                            >
                                <i class="fa fa-fw fa-circle-o text-blue"></i>
                                <span>قائمة المنشورات</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/posts/favoris"
                            >
                                <i class="fa fa-fw fa-circle-o text-blue"></i>
                                <span>المفضّلة</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/comments/manage"
                            >
                                <i class="fa fa-fw fa-circle-o text-blue"></i>
                                <span>التعليقات </span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/favourit-writers"
                            >
                                <i class="fa fa-fw fa-circle-o text-red"></i>
                                <span>كتابي المفضلون</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/top-writers"
                            >
                                <i class="fa fa-fw fa-circle-o text-orange"></i>
                                <span>اشهر الكتاب</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/monthly-writing-contest"
                            >
                                <i class="fa fa-fw fa-circle-o text-yellow"></i>
                                <span>كتابات الشهر</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/statistics"
                            >
                                <i class="fa fa-fw fa-circle-o text-blue"></i>
                                <span>احصائيات</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">


        </section>

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



    <div class="box-body box-profile">
        @if ($user->logo != NULL)
        <img class="profile-user-img img-responsive img-circle userlogo"  id="logodiv" src="/images/{{ $user->logo }}" alt="User profile picture">
        @else
        <img class="profile-user-img img-responsive img-circle userlogo" src="/user.png" id="logodiv" alt="User profile picture">
        
        @endif
       
        <h3 class="profile-username text-center">{{ $user->name }}</h3>

        <p class="text-muted text-center">مسجل {{   \Carbon\Carbon::parse(Auth::user()->created_at)->diffForHumans()}} </p>
        <div class="row">
            <div class="col-md-8">
                <div class="description well" style="direction: rtl">
                        @if ($user->description != NULL )
                            {{ $user->intro }}

                        @endif
                        <hr>
                        <div class="box-body">
                        

                        <p class="text-muted">
                        <strong><i class="fa fa-map-marker margin-r-5"></i>  </strong> : 
                            @if ($user->adresse != NULL)
                            {{ $user->adresse }}
                        
                            @endif
                        </p>
                        <hr>

                        

                        <p>
                        <strong><i class="fa fa-pencil margin-r-5"></i> </strong> :
                        @foreach($talents as $talent)
                            <span class="label label-danger">{{ $talent }}</span>
                        @endforeach  
                        </p>

                        <hr>

                        
                       
                        <p><strong><i class="fa fa-file-text-o margin-r-5"></i>  </strong> : 
                        @if ($user->description != NULL)
                        {{ $user->description }}
                        @endif
                        </p>
                        
                        </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                @if($followed == 0 )
                        <div class="row" style="text-align:center;margin-bottom:20px;">
                            <div class="col-md-4 col-md-offset-6">
                                <a href="/user/{{ $user->id }}/follow/valide" class="btn btn-primary btn-block"><b>تابعني</b></a>
                            </div>
                        </div>
                @else
                        <div class="row" style="text-align:center;margin-bottom:20px;">
                            <div class="col-md-4 col-md-offset-6">
                                <a id="unflow" href="/user/{{ $user->id }}/unflow" class="btn btn-success btn-block"><b>أنت تتابعني</b></a>
                            </div>
                        </div>
                @endif
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
            <h2 >إقرأ لي </h2>
            <hr>
            <div class="posts">
            @foreach($posts as $post)
                <div class="post">
                    <div class="title">
                        <h4>{{ $post->Title }}</h4>
                    </div>
                    <div class="description">
                    <p>{!! $post->Content  !!}</p>
                    </div>
                    <div class="details">
                    <a href="#" class="btn btn-success" style="font-size:10px;"><i class="fa fa-comment margin-r-5"></i>  </a>
                    <a href="#" class="btn btn-default" style="font-size:10px;"><i class="fa fa-comment margin-r-5"></i>  </a>
                    <a href="#" class="btn btn-primary" style="font-size:10px;">شاهد المقال ...</a>
                    </div>
                    
                </div>
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
