<!DOCTYPE html>
<html>
<head>
<title>Products</title>
</head>
<body>
<form action="{{route('product.update',$product->id)}}" method="POST">
    @csrf
    @method('PUT')
    <label>Name</label>
    <input type="text" name="name"  placeholder="product name" value="{{$product->name}}">
    <label >  Category name</label>
    <label >Choose a category:</label>
    <select name="category_id">
        @foreach($category as $row)
            <option value="{{$row->id}}">{{$row->name}}</option>
        @endforeach
    </select>
    <label>owner name</label>
    <label>Choose a owners:</label>
    <select name="owners_id[]"  multiple>
        @foreach($owner as $row)
            <option value="{{$row->id}}">{{$row->name}}</option>
        @endforeach
    </select>
    <input type="submit" value="update">
</form>
</body>
</html>
