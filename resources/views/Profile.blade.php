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
    <h2>Login Success</h2>

</div>

<div>

    <a href="{{url('/Logout')}}"> Logout</a>


    @foreach($profile_info as $p)

        name:{{$p->Name}};
        email:{{$p->Email}};
        Id: {{$p->Id}};
        Phone: {{$p->Phone}};
        User type:{{$p->User_Type}} ;
            <img src = {{$p->Photo_Path}} />
    @endforeach

</div>

</body>
</html>
