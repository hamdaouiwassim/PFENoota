
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

    

    <div class="box box-primary">
        <div class="box-header with-border">
        @if(Session::get('msg') != null )
            <div id="deletesuccess" class="alert alert-success">
            {{ Session::get('msg') }} 
            يمكنك تصفح المفضلة  <a class="btn btn-primary" href="/posts/favoris"> من هنا </a>
            </div>
            @endif
        <div style="display:flex;">
            <h2 style="width:80%;"> <i class="fa fa-fw fa-files-o text-blue"></i> {{ $post->Title }}  </h2>
            <a href="/recents" class="btn btn-primary" style="margin-top:30px;"><i class="fa fa-home"></i> كلّ المنشورات </a>
        </div>
            <hr>
            <div class="posts bg-info rtl" style="padding-top:20px;">
            
              
                    <div class="user_details col-md-12 rtl " style="text-align:right">
                            @if ($user->logo != "")               
                            <img src="../images/{{ $user->logo }}" class="userlogo" >
                            @else
                            <img src="../images/default.jpeg" class="userlogo" >
                            @endif
                            <br/>
                            <br/>
                            <span class="col-9 username" style="margin-right: 15px;">
                                <a href="/user/{{ $user->id }}" > {{ $user->name }}</a>
                                </span>
                            <br/>
                            <br/>
                            <span class="description"> نشر {{ \Carbon\Carbon::parse($post->updated_at)->diffForHumans()  }}</span>
                            <br/>
                        </div>
                <div class="post col-md-12 well rtl" style="margin-top:10px;margin-bottom:10px;">
                        
                    <div class="post_details col-md-12 rtl">    
                            <div class="title">
                                <h4>{{ $post->Title }}</h4>
                            </div>
                            <div class="description">
                                <p>{!! $post->Content  !!}</p>
                            </div>
                            <div class="details">
                            <div class="col-md-6"  style="text-align:left">
                            <a href="/post/{{ $post->Id }}/favoris" class="btn btn-default" style="font-size:10px;"><i class="fa fa-bookmark margin-r-5" style="color:orange;"></i> </a>
                                
                                <a href="#" class="btn btn-warning" style="font-size:10px;" data-toggle="modal" data-target="#signalepost"><i class="fa fa-exclamation-circle margin-r-5" ></i> بلّغ عن هذا المقال </a>
                             
                            </div>
                            
                            <div class="col-md-6">
                           @if( count($reactions) != 0  ) 
                                    @if ($reactions[0]->idreact == 1 )
                                        <a href="/post/{{ $post->Id }}/reaction/heart" class="btn btn-primary" style="font-size:10px;"><i class="fa fa-heart margin-r-5" style="color:red;"></i>  </a>
                                        <a href="/post/{{ $post->Id }}/reaction/up" class="btn btn-default" style="font-size:10px;"><i class="fa fa-thumbs-up margin-r-5" style="color:blue;"></i>  </a>
                                        <a href="/post/{{ $post->Id }}/reaction/down" class="btn btn-default" style="font-size:10px;"><i class="fa fa-thumbs-down margin-r-5"></i>  </a>

                                    @elseif ($reactions[0]->idreact == 2 )
                                        <a href="/post/{{ $post->Id }}/reaction/heart" class="btn btn-default" style="font-size:10px;"><i class="fa fa-heart margin-r-5" style="color:red;"></i>  </a>
                                        <a href="/post/{{ $post->Id }}/reaction/up" class="btn btn-primary" style="font-size:10px;"><i class="fa fa-thumbs-up margin-r-5" style="color:blue;"></i>  </a>
                                        <a href="/post/{{ $post->Id }}/reaction/down" class="btn btn-default" style="font-size:10px;"><i class="fa fa-thumbs-down margin-r-5"></i>  </a>
                          
                                    @elseif ($reactions[0]->idreact == 3 )
                                        <a href="/post/{{ $post->Id }}/reaction/heart" class="btn btn-default" style="font-size:10px;"><i class="fa fa-heart margin-r-5" style="color:red;"></i>  </a>
                                        <a href="/post/{{ $post->Id }}/reaction/up" class="btn btn-default" style="font-size:10px;"><i class="fa fa-thumbs-up margin-r-5" style="color:blue;"></i>  </a>
                                        <a href="/post/{{ $post->Id }}/reaction/down" class="btn btn-primary" style="font-size:10px;"><i class="fa fa-thumbs-down margin-r-5"></i>  </a>
                          
                                    @endif
                            @else
                            <a href="/post/{{ $post->Id }}/reaction/heart" class="btn btn-default" style="font-size:10px;"><i class="fa fa-heart margin-r-5" style="color:red;"></i>  </a>
                            <a href="/post/{{ $post->Id }}/reaction/up" class="btn btn-default" style="font-size:10px;"><i class="fa fa-thumbs-up margin-r-5" style="color:blue;"></i>  </a>
                            <a href="/post/{{ $post->Id }}/reaction/down" class="btn btn-default" style="font-size:10px;"><i class="fa fa-thumbs-down margin-r-5"></i>  </a>
                          
                          @endif
                                
                            </div>
                            
                            </div>
                        
                        
            
                    </div>
                            
                </div>

                    <div class="bg-info" style="padding:20px;margin-top:10px;">
                        <hr>
                        <h5><i class="fa fa-comments margin-r-5"></i> التعليقات </h5>
                        <hr>

                            <div class="col-md-12" style="margin-bottom:10px;">
                                    <form method="post" class="commentform" action="/new-comment">
                                        @csrf
                                        <input name="postid" type="hidden" value="{{$post->Id}}">
                                            <div class="col-md-2">
                                                    <input type="submit" value="علّق" class="btn btn-success" style="width:100%;margin-bottom:5px;">
                                            </div>
                                            <div class="col-md-10">
                                                    <input name="commentvalue" class="form-control" type="text" placeholder="أضف تعليق ">
                                            
                                            </div>
                                        
                                        
                                    </form>
                            </div>
                    </div>
                        <div class="comments rtl " style="margin-top:15px;">
                            @foreach($comments as $comment)
                            
                            <div class="singlecomment col-md-12 rtl ">
                            <blockquote class="blockquote">
                                <p class="mb-0">{{ $comment->Content }} .</p>
                                <footer class="blockquote-footer"> @foreach($users as $usr) @if ($usr->id == $comment->Iduser )<span>{{ $usr->name }}</span> @endif @endforeach</footer>
                            </blockquote>
                                
                                

                            </div>
                            
                             @foreach($replays as $replay)
                            
                                <?php $exist = 0; ?>
                                @if($replay->Idcomment == $comment->Id)
                                <div class="replaycomment col-md-8 rtl">
                                <?php  $exist = 1; ?>
                                <blockquote class="blockquote">
                                <p class="mb-0">{{ $replay->Content }} .</p>
                                <footer class="blockquote-footer"> @foreach($users as $usr) @if ( $usr->id == $post->Iduser ) <span>{{ $usr->name }}</span> @endif @endforeach</footer>
                            </blockquote>  
                            </div>   
                                @endif
                                @if (Auth::user()->id == $post->Iduser)
                               
                                <?php if ( $exist == 0 ){ ?>
                                    <div class="replaycomment col-md-8 rtl" style="background: transparent !important;">
                                        <form method="POST" action="/new-replay">
                                        @csrf
                                            <input type="hidden" name="commentid" value="{{ $comment->Id }}">
                                            <input type="text" name="replayContent" style="color: black;width: 80%;border-radius: 5px;padding: 10px;border:1px solid black">
                                            <input type="hidden" name="postid" value="{{ $post->Id }}">
                                            <input type="submit" style="width:18%;padding: 10px;border-radius: 10px;background-color: green;border: none;" value="أضف الردّ">
                                        </form>
                                        </div>
                                <?php } ?>
                                @endif
                              
                             @endforeach
                             @if (count($replays) == 0)
                            
                                    <div class="replaycomment col-md-8 rtl">
                                        <form method="POST" action="/new-replay">
                                        @csrf
                                        <input type="hidden" name="commentid" value="{{ $comment->Id }}">
                                            <input type="text" name="replayContent" style="color: black;width: 80%;border-radius: 5px;padding: 10px;border:1px solid black">
                                            <input type="hidden" name="postid" value="{{ $post->Id }}">
                                            <input type="submit" style="width:18%;padding: 10px;border-radius: 10px;background-color: green;border: none;" value="أضف الردّ">
                                        </form>
                                        </div>
                              
                             @endif
                             
                                
                            
                            
                            @endforeach
                            </div>
                    
                    
                
               
               
           
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
       

          
        </div>
      
        <!-- /.box-body -->
    </div>
    <!-- Model Signaler -->
    <div class="modal" tabindex="-1" role="dialog" id="signalepost">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">التبليغ عن هذه المقالة </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>إن كنت تريد التبليغ عن أنّ هذا المحتوى منقول  من غير تصريح أو محتوى مسروق من أعمالك فالرجاء تأكيد التبليغ و ستنظر الإدارة في المسألة في القريب العاجل .</p>
            </div>
            <div class="modal-footer">
                <a href="/post/{{ $post->Id }}/signaler"  class="btn btn-primary">تأكيد التبليغ</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
            </div>
            </div>
        </div>
    </div>

    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript">
            $(document). ready(function(){
                $('input[type="file"]').change(function(e){
                    
                    $('#logodiv').attr("src",$('#logo').val());
                });
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
<script>
    $(document).ready( function() {
        $('#deletesuccess').delay(3000).fadeOut();
    });
</script>
        
</body>
</html>
