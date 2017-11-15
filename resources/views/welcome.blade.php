<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cost Calculator</title>


    </head>
    <body>
    <div class="login-wrap">
        <form class="form-signin" action="{{url('/logincheck')}}" method="post">
        {{csrf_field()}}
        <input type="text" class="form-control" name="email" placeholder="User Email" autofocus>
        <input type="password" class="form-control" name="pass" placeholder="Password">

        <button class="btn btn-lg btn-login btn-block" type="submit" name="login">Sign in</button>

    </div>



    </body>
</html>
