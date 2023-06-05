<!DOCTYPE html>
<html>
<head>
<title>Products</title>
</head>
<body>
<center>
    <h2>Products</h2>
    <br><br>
    <table border=1>
        <tr>
            <td>Name</td>
            <td>add owner</td>
            <td>choose</td>
        </tr>
        @foreach($product as $row)
            <tr>
                <td>{{$row->name}}</td>
                <td><a href="{{url('addOwnerToProduct/'.$row->id)}}">add Owner</a></td>
                <td>
                    <form action="{{route('product.edit',$row->id)}}" method="GET">
                        @csrf
                        <input type="submit" value="edit">
                    </form>
                    <form action="{{route('product.destroy', $row->id)}}" method="POST">
                        @csrf @method('DELETE')
                        <input type="submit" value="delete">
                    </form>
                </td>
             </tr>
        @endforeach
    </table>
    <a href="{{url('product/create')}}"><h3>add</h3></a>
    <a href="{{url('/')}}"><h3>Home Page</h3></a>
    <br><br>
</center>
</body>
</html>


