<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1>Hello about</H1>
    @php
        $a ="Ram";
        $arr=[1,2,3,4,5];
        echo $a;
    @endphp

    @if($a=="Manish")
        {{'Ram'}}
    @elseif($a=="Rani")
        {{'Rani'}}
    @else
        {{'Manish'}}
    @endif

    @for ($i = 0; $i < count($arr); $i++)
        {{$arr[$i]}}
    @endfor

    @foreach ($arr as $item)
        {{$item}}
    @endforeach
</body>
</html>