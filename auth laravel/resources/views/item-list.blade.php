<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ URL::asset('css/list.css') }}" rel="stylesheet">
    <style>
        
        body{
        margin: 0;
        background-color: hsl(189, 62%, 70%);
        color:#333333;
        font:100% / npraml sans-serif;

        }
        table{
            border-collapse:collapse;
            width:90%;
            border:4px solid hsl(123.0%,90%);
            background-color:rgb(178, 207, 234);
            text-align:center;
            margin-left: auto;  
            margin-right: auto;
        }
        td,th{
            padding:5px;
            border:1px solid;
            text-align:center;
        }
        h2{
            text-align:center;

        }
        .right{
            text-align:center;
        }
        </style>
    <title>Document</title>
    
</head>
<body>
    @if(Session::has('item_delete'))
    <span>{{Session::get('item_delete')}}</span>
    @endif
    <h2>E-Commerce Inventory</h2>
    <div class="right">
    <a href="{{route('item.add')}}">Add item</a><br><br>
    </div>
    <table>
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>category</th>
            <th>price</th>
            <th>quantity</th>
            <th>action</th>
        </tr>
        @foreach($items as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->category}}</td>
            <td>{{$item->price}}</td>
            <td>{{$item->quantity}}</td>
            <td>
                <a href="edit-item/{{$item->id}}">Edit</a>
                <a href="delete-item/{{$item->id}}">delete</a>
        </tr>
        @endforeach
    </table>

</body>
</html>