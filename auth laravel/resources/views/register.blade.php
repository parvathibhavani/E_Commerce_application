<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet"  type="text/css" href="{{url('css/style.css')}}"  >
</head>
<body>
    @if(Session::has('add_user'))
    <span>{{Session::get('add_user')}}</span>
    @endif
    <form method="POST" action="{{route('save.user')}}" >
    @csrf
    <label for="name">Name</label><br>
    <input type="text"  name="name" id="name" required ><br><br>
    <label for="email">email</label><br>
    <input type="text"  name="email" id="email" required ><br><br>

        <label for="password">Password</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <label for="remember">Remember Me</label>
        <input type = "checkbox" name="remember" id="remember"><br><br>

        <input type="submit" value="Submit">

    </form>
</body>
</html>