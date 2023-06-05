<!DOCTYPE html>
<html>
<head>
<title>Owners</title>
</head>
<body>
<form action="{{ route('storeProductToOwner')}}" method="POST">
    add product to {{$owner->name}}
    <br>
    @csrf
    <label >  Product Id</label>
    <input type="int" name="product_id"  placeholder="product id">
    <input type="int" name="owner_id" value='{{$owner->id}}' hidden >
    <button type="submit" >Save</button>
</form>
</body>
</html>


