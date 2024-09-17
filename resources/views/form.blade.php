<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="form-post" method="post">
    @csrf
        Name : <input type="text" name="name"/>
        @error('name')
        <span>{{$message}}</span>
        @enderror
        Email : <input type="text" name="email"/>
        @error('email')
        <span>{{$message}}</span>
        @enderror
        <button type="submit">Save</button>
    </form>
</body>
</html>