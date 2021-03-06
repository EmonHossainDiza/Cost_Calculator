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
                <li><img src=" {{$p->Photo_Path}}" height="100" weight="100"/>
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
            @foreach($get_cat_id as $g)
            <div class="row" id="main">
                <div class="col-sm-12 col-md-12 well" id="content">
                    <div class="col-sm-6 col-md-6 well2 " >
                        <h2>Category: {{$g->category_name}} </h2>
                        <p>{{$g->date}} </p>
                    </div>
                    <div class="col-sm-6 col-md-6 well3 " >
                        <button  class="btn btn-default btn-sm"  data-panel-id="{{$g->id}}" onclick="add_sub_category(this)"><i class="fa fa-plus" aria-hidden="true"></i>
                        Add Sub Category</button>
                    </div>
                </div>
            </div>
        @endforeach
            @foreach($get_sub_cat as $s_cat)
            <div class="row" id="main">
                <div class="col-sm-12 col-md-12 sub_cat_bottom_line" id="content">
                    <a href="{{url('/sub_category/'.$s_cat->id)}}">
                        <div class="col-sm-8 col-md-8 well2 " >
                        <h2>{{$s_cat->name}}</h2>
                        <p>{{$s_cat->type}}</p>
                        <p>{{$s_cat->date}} </p>
                    </div>
                    <div class="col-sm-4 col-md-4 well3 " >

                    </div>
                    </a>
                </div>
            </div>
        @endforeach
        <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div><!-- /#wrapper -->




<div class="footer">
    <div class="container-fluid" >
        <div class="row">
            <div class="footer_area_text">
                <h2>All rights reserved by <a href="http://ehdiza.com">Emon Hossain Diza</a>  </h2>
            </div>
        </div>
    </div>

</div>


{{--//pop up modal for add category--}}
<div id="myModal1" class="modal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>

                <div id="txtHint"></div>


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

{{--//pop up modal for add category--}}
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


<script>

    var modal1 = document.getElementById('myModal1');

    var span1 = document.getElementsByClassName("close")[0];

    function add_sub_category(x) {
        modal1.style.display = "block";
        btn = $(x).data('panel-id');

        //alert(btn);

        $.ajax({
            type:'GET',
            url:'{{url('/add_sub_category_modal')}}',
            data:{'id':btn},
            cache: false,
            success:function(data)
            {
                //alert("Restaurant request accepted");
                //alert(data);
                $('#txtHint').html(data);
                //$('#txtHint').value(data);
            }

        });


    }


    //modal 1 span 1
    span1.onclick = function() {
        modal1.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal1) {
            modal1.style.display = "none";
        }
    }



</script>

{{--<script>--}}

{{--var modal1 = document.getElementById('myModal2');--}}

{{--var span1 = document.getElementsByClassName("close")[0];--}}

{{--function selectid(x) {--}}
{{--modal1.style.display = "block";--}}
{{--btn = $(x).data('panel-id');--}}

{{--//alert(btn);--}}

{{--$.ajax({--}}
{{--type:'POST',--}}
{{--url:'{{url('/edit_category')}}'+btn,--}}
{{--data:{'id':btn},--}}
{{--cache: false,--}}
{{--success:function(data)--}}
{{--{--}}
{{--//alert("Restaurant request accepted");--}}
{{--//alert(data);--}}
{{--$('#txtHint').html(data);--}}
{{--//$('#txtHint').value(data);--}}
{{--}--}}

{{--});--}}


{{--}--}}
{{--span1.onclick = function() {--}}
{{--modal1.style.display = "none";--}}
{{--}--}}

{{--// When the user clicks anywhere outside of the modal, close it--}}
{{--window.onclick = function(event) {--}}
{{--if (event.target == modal1) {--}}
{{--modal1.style.display = "none";--}}
{{--}--}}
{{--}--}}


{{--</script>--}}

</body></html>

{{--<div>--}}

{{--<a href="{{url('/Logout')}}"> Logout</a>--}}


{{--@foreach($profile_info as $p)--}}

{{--name:{{$p->Name}};--}}
{{--email:{{$p->Email}};--}}
{{--Id: {{$p->Id}};--}}
{{--Phone: {{$p->Phone}};--}}
{{--User type:{{$p->User_Type}} ;--}}
{{--<img href="{{$p->Photo_Path}} " />--}}
{{--<img src=" {{ $p->Photo_Path }}" height="100" weight="100">--}}

{{--@endforeach--}}

{{--</div>--}}