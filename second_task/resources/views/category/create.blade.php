

<!DOCTYPE html>
<html>
<head>
<title>Categories</title>
</head>
<body>


<form action="{{ route('category.store')}}" method="POST">
    @csrf
    <label>Name</label>
    <input type="text" name="name"  placeholder="Category name">
    <button type="submit" >Save</button>
</form>
<a href="{{url('category')}}">back</a>

</body>
</html>


