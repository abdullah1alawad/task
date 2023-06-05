<!DOCTYPE html>
<html>
<head>
<title>Categories</title>
</head>
<body>
<center>
    <h2>Categories</h2>
    <br><br>
    <table border=1>
        <tr>
            <td>Name</td>
{{--            <td>choose</td>--}}
        </tr>
            @foreach($category as $row)
                <tr>
                    <td>{{$row->name}}</td>
{{--                    <td> <a href="{{url('edit/'.$row->id)}}">  edit </a>||<a href="{{route('category.destroy', $row->id)}}">delete</a></td>--}}
                </tr>
            @endforeach
    </table>
    <a href="{{url('category/create')}}"><h3>add</h3></a>
    <a href="{{url('/')}}"><h3>Home Page</h3></a>
    <br><br>
    </center>
</body>
</html>


