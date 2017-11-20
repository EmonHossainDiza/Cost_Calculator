<!DOCTYPE html>
<html lang="en"><head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Cost Calculator">
    <meta name="keywords" content="Cost Calculator">
    <meta name="author" content="MD.EMON HOSSAIN DIZA">

    <!-- PAGE TITLE -->
    <title>Cost Calculator</title>

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="{{url('/css/bootstrap.css')}}" rel="stylesheet" id="bootstrap-css">
    <!-- FONT AWESOME CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- ALL GOOGLE FONTS -->
    <link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
    <!-- MAIN STYLE CSS -->
    <link rel="stylesheet" href="{{url('/css/profile.css')}} ">

    <script src="{{url('/js/jquery-1.js')}}"></script>
    <script src="{{url('/js/bootstrap.js')}}"></script>


</head>
<body>
<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{"/"}}">
                <img src="{{url('/images/background.png')}}"/>
            </a><h4>Track your income & expense</h4>

        </div>
    @foreach($profile_info as $p)
        <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li><img src=" {{ $p->Photo_Path }}" height="100" weight="100"/>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{$p->Name}} <b class="fa fa-angle-down"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('/profile_edit')}}"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li>
                        <li><a href="{{url('/change_password')}}"><i class="fa fa-fw fa-user"></i> Change Password</a></li>
                        <li class="divider"></li>
                        <li><a href="{{url('/Logout')}}"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
    @endforeach
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="{{url('/profile')}}"><i class="fa fa-tachometer"></i> DASHBOARD</a>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-search"></i> MENU 1 <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-1" class="collapse">
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.1</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.2</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.3</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa-star"></i>  MENU 2 <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-2" class="collapse">
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.1</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.2</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.3</a></li>
                    </ul>
                </li>
                <li>
                    <a href="https://s.bootsnipp.com/iframe/investigaciones/favoritas"><i class="fa fa-fw fa-user-plus"></i>  MENU 3</a>
                </li>
                <li>
                    <a href="https://s.bootsnipp.com/iframe/sugerencias"><i class="fa fa-fw fa-paper-plane-o"></i> MENU 4</a>
                </li>
                <li>
                    <a href="https://s.bootsnipp.com/iframe/faq"><i class="fa fa-fw fa fa-question-circle"></i> MENU 5</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main">
                <div class="col-sm-12 col-md-12 well" id="content">
                    <div class="row" id="main">
                        <div class="col-sm-12 col-md-offset-3 col-md-6 col-md-offset-right-3 well" id="content">
                            <div class="col-sm-12 col-md-offset-3 col-md-6 col-md-offset-right-3 well_photo " >
                                <img src=" {{ $p->Photo_Path }}" height="50px" weight="50%"/>
                            </div>

                            <div class="col-sm-12 col-md-12 well_profile_edit_input " >
                                <form class="form-group" action="{{url('/profile_edit_done')}}" enctype="multipart/form-data" method="post">
                                    {{csrf_field()}}
                                <input type="text" class="form-control loguname" name="phone" value="{{$p->Phone}}" required>
                                <input type="file" class="form-control loguname" name="photo_file" placeholder="Selecet a Image File" >
                                <button class="btn btn-default btn-sm" type="submit" name="Reg">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>





<div class="footer">
    <div class="container-fluid" >
        <div class="row">
            <div class="footer_area_text">
                <h2>All rights reserved by <a href="http://ehdiza.com">Emon Hossain Diza</a>  </h2>
            </div>
        </div>
    </div>

</div>


<script type="text/javascript" src="{{url('/js/bootstrap.min.js')}}"></script>
<!-- SCRIPT js -->
<script type="text/javascript" src="{{url('/js/main.js')}}"></script>
<!-- WOW JS -->
<script type="text/javascript" src="{{url('/js/wow.min.js')}}"></script>
<!-- STCICK JS -->
<script type="text/javascript" src="{{url('/js/jquery.sticky.js')}}"></script>
<!-- PARALLAX JS -->
<script type="text/javascript" src="{{url('/js/jquery.scrolly.js')}}"></script>
<!--SRCOLL  JS -->
<script type="text/javascript" src="{{url('/js/jquery.easing.min.js')}}"></script>

//pop up modal for add category
<script type="text/javascript">
    $(function(){
        $('[data-toggle="tooltip"]').tooltip();
        $(".side-nav .collapse").on("hide.bs.collapse", function() {
            $(this).prev().find(".fa").eq(1).removeClass("fa-angle-right").addClass("fa-angle-down");
        });
        $('.side-nav .collapse').on("show.bs.collapse", function() {
            $(this).prev().find(".fa").eq(1).removeClass("fa-angle-down").addClass("fa-angle-right");
        });
    })

</script>


</body></html>

