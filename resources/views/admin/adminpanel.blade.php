
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
          href="/vendor/adminlte/dist/css/skins/skin-red.min.css ">
    <link href="/css/custom.css" rel="stylesheet">
        
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-red sidebar-mini ">

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
            <i class="fa fa-fw fa-files-o text-red"></i>
            <span>التبليغات</span>
                    </a>
            </li>
<li class="">
        <a href="/new-story"
                   >
            <i class="fa fa-fw fa-users text-red"></i>
            <span>المستعملون المحضورين</span>
                    </a>
</li>
    </ul>
                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>
        
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">


            <!-- Main content -->
<section class="content">

<div>
            <h5 style="direction:rtl">قائمة المقالات المبلّغ عنها <i class="fa fa-exclamation-circle" aria-hidden="true"></i> </h5>
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">عنوان المقال </th>
                    <th scope="col">صاحب المقالة </th>
                   
                    <th scope="col">تاريخ النشر  </th>
                    <th scope="col">عدد مرّات التبليغ </th>
                    <th scope="col">الإجراءات  </th>
                    </tr>
                </thead>
                <tbody>
                <?php $i=0; ?>
                @foreach( $signaledposts as $post)
                <?php $i++; ?>
                    <tr>
                        <th scope="row">{{ $i }}</th>
                        <td>{{ $post->Title }}</td>
                        <td>{{ $users[$post->Iduser] }}</td>
                        
                        
                        <td>{{ $post->created_at }}</td>
                        <td>{{ $nbrsignales[$post->Id][0] }}</td>
                        <td>
                            <a class="btn btn-primary" data-toggle="modal" data-target="#post{{$post->Id}}">
                            <i class="fa fa-info" style="color:white" aria-hidden="true"></i>
                            </a>
                        </td>
                        
                    </tr>
                  
                    @endforeach
                </tbody>
                </table>
            </div>
    @foreach($signaledposts as $post)
        
        <div class="modal" tabindex="-1" role="dialog" id="post{{$post->Id}}" >
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">الإجراءات</h5>
                                    <button type="button" style="margin-left: 0;" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                
                                    <div class="modal-body">
                                       @if( $nbrsignales[$post->Id][1] == "Blocked" )
                                       <p class="alert alert-success"> تمّ حظر المستخدم </p> 
                                       @else
                                       <a class="btn btn-danger" href="/user/{{ $post->Iduser }}/bloque">تعليق المستخدم</a>
                                       
                                        @endif
                                       @if ( $post->State == "Blocked" )
                                       <p class="alert alert-success" > تمّ حظر المقال  </p> 
                                       @else
                                       <a class="btn btn-danger" href="/post/{{ $post->Id }}/bloque">تعليق المقال</a>
                                       @endif
                                    </div>
                                                           
                                </div>
                            </div>
                            </div>
    
    @endforeach
    

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

    