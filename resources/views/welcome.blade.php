<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
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
        <link rel="stylesheet" href="{{url('/js/bootstrap_min_css.js')}} ">
        <!-- FONT AWESOME CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
        <!-- ALL GOOGLE FONTS -->
        <link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
        <!-- MAIN STYLE CSS -->
        <link rel="stylesheet" href="{{url('/css/welcome.css')}} ">
        <!-- ANIMATE CSS -->
        <link rel="stylesheet" href="{{url('/css/responsive.css')}} ">
        <!-- RESPONSIVE CSS -->
        <link rel="stylesheet" href="{{url('/css/animate.css')}} ">

        <!--search-->
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="http://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


    </head>

    <body>
    <div class="header">
        <div class="container ">
            <div class="row">
                <div class="header_content_area col-md-12">
                    <div class="header_logo_area col-md-2">
                        <a href="{{"/"}}" ><img src="{{url('/images/background.png')}}"/></a>
                    </div>
                    <div class="header_text_area col-md-10">
                        <h2>Cost Calculator</h2>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <div class="login_content">
        <div class="container login_content_area">
            <div class="login">
                <div class="row">
                    <div class="login_section col-md-4 col-md-offset-4 col-md-offset-right-4 ">
                        <form class="form-group" action="{{url('/logincheck')}}" method="post" >
                            {{csrf_field()}}
                            <input type="text" class="form-control loguname" name="email" placeholder="Enter your Email Here"   />
                            <input type="password" class="form-control loguname"  name="pass" placeholder="Enter your Password Here "  />

                            <button  class="btn btn-default btn-sm" type="submit" name="login">Sign in</button>
                        </form>
                        <a href="{{"/Registration"}}" class="btn btn-default btn-sm">Registration</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="footer">
        <div class="container-fluid" >
            <div class="row">
                <div class="footer_area_text col-md-12">
                    <h2>All rights reserved by <a href="http://ehdiza.com">Emon Hossain Diza</a>  </h2>
                </div>
            </div>
        </div>

    </div>



    <!-- LATEST JQUERY

    <script type="text/javascript" src="{{url('/js/jquery-3.1.1.min.js')}}"></script>
	-->
    <!-- BOOTSTRAP JS -->
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


    </body>
</html>


