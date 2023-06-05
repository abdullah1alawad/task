<!DOCTYPE html>
<html>
<head>
<title>Owners</title>
</head>
<body>
<form action="{{ route('owner.store')}}" method="POST">
@csrf
    <label>Name</label>
    <input type="text" name="name"  placeholder="owner name">
    <button type="submit">Save</button>
</form>
<a href="{{url('owner')}}">back</a>
</body>
</html>


