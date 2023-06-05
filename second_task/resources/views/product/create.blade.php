<!DOCTYPE html>
<html>
<head>
<title>Products</title>
</head>
<body>
<form action="{{ route('product.store')}}" method="POST">
    @csrf
    <label>Name</label>
    <input type="text" name="name"  placeholder="product name">
    <label>Category name</label>
    <label >Choose a category:</label>
    <select name="category_id">
        @foreach($category as $row)
            <option value="{{$row->id}}">{{$row->name}}</option>
        @endforeach
    </select>
    <button type="submit">Save</button>
</form>
<a href="{{url('product')}}">back</a>
</body>
</html>
