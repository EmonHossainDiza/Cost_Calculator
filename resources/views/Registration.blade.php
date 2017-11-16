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
    <form class="form-signin" action="{{url('/Reg_save')}}" enctype="multipart/form-data" method="post">
        {{csrf_field()}}
        <input type="text" class="form-control" name="name" placeholder="User Name" autofocus>
        <input type="text" class="form-control" name="email" placeholder="Email">
        <input type="text" class="form-control" name="phone" placeholder="Phone" autofocus>
        <input type="password" class="form-control" name="pass" placeholder="Password">
        <input type="password" class="form-control" name="con_pass" placeholder="Confirm Password" autofocus>
        <input type="file" class="form-control" name="photo_file" placeholder="Selecet a Image File">



        <button class="btn btn-lg btn-login btn-block" type="submit" name="Reg">Save</button>

</div>




</body>
</html>
