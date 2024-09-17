<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Form Data Fill</h2>
    <form action="form-post" method="post">
        @csrf
            First Name : <input type="text" name="fname"/>
            @error('fname')
            <span>{{$message}}</span>
            @enderror
            Last Name : <input type="text" name="lname"/>
            @error('lname')
            <span>{{$message}}</span>
            @enderror
            Sur Name : <input type="text" name="surname"/>
            @error('surname')
            <span>{{$message}}</span>
            @enderror
            Date of Birth : <input type="text" name="dob"/>
            @error('dob')
            <span>{{$message}}</span>
            @enderror
            Address Name : <input type="text" name="address"/>
            @error('address')
            <span>{{$message}}</span>
            @enderror
            Father Name : <input type="text" name="fathername"/>
            @error('fathername')
            <span>{{$message}}</span>
            @enderror
            Mother Name : <input type="text" name="mothername"/>
            @error('mothername')
            <span>{{$message}}</span>
            @enderror
            Mobile Number : <input type="text" name="mob"/>
            @error('mob')
            <span>{{$message}}</span>
            @enderror
            Last Qualifiction : <input type="text" name="lq"/>
            @error('lq')
            <span>{{$message}}</span>
            @enderror
            <button type="submit">Save</button>
    </form>
</body>
</html>

{{-- http://127.0.0.1:8000/form-post?firstname=ram&lastname=lal&surname=gupta&address=belghat&dob=5/7/2002&fathername=rajendra&mothername=intrawati&mob=77686545676 --}}