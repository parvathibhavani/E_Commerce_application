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
    @if(Session::has('item_update'))
    <span>{{Session::get('item_update')}}</span>
    @endif
    <h2>E-commerce Inventory  </h2>
    <form method="post" action="{{route('update.item')}}">
        @csrf
        <input type="hidden" name="id"  value="{{$items->id}}">
        <label for="name">Product Name:</label><br>
        <input type="text"  name="name" value="{{$items->name}}" required ><br><br>

        <label for="category">Product Category:</label><br>
        <input type="text" value="{{$items->category}}" name="category" required><br><br>

        <label for="price">Product Price:</label><br>
        <input type="number" value="{{$items->price}}" name="price" required><br><br>

        <label for="quantity">Product Quantity:</label><br>
        <input type="number" value="{{$items->quantity}}" name="quantity" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>