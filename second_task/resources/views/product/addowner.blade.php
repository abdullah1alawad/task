<!DOCTYPE html>
<html>
<head>
<title>Products</title>
</head>
<body>
<form action="{{ route('storeOwnerToProduct')}}" method="POST">
    add owner to {{$product->name.$product->id}}
    <br>
    @csrf
    <label>Owner Id</label>
    <input type="int" name="owner_id"  placeholder="owner id">
    <input type="int" name="product_id" value='{{$product->id}}' hidden>
    <button type="submit">Save</button>
</form>
<a href="{{url('owner')}}">back</a>
</body>
</html>


