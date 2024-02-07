<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style type="text/css" media="screen">
        body{
            margin:0;
            background-color: hsl(203, 79%, 77%);
            color:#333333;
            font:100% / npraml sans-serif;
        
        }
        #main{
            margin:center;
            padding: 10%;
            width: 90%;
            max-width: 60px;
        }
        
        form{
            box-sizing:border-box;
            padding:2px;
            border-radius:1px;
            border:4px solid hsl(123.0%,90%);
        
        }
        
    </style>   
    <title>Document</title>
</head>
<body>
    
    <form method="POST" action="{{url('login')}}" >
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