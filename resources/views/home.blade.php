@includeif('layout.header1')
@includeWhen(true,'layout.header')
@includeUnless(false,'layout.header')
<div>
    <a href="{{route('ram')}}">Hello Ram </a>
    {{-- {{$name}} --}}
    @php
        print_r($name);
    @endphp
</div>
@include('layout.footer',['name'=>'Ram'])

@php
    $arr =[1,2,3,4,5];
@endphp
@forelse ($arr as $item)
    {{-- {{$item}} --}}
    {{$loop->index}}<br/>
    {{$loop->iteration}}<br/>
    {{$loop->remaining}}<br/>
    {{$loop->count}}<br/>
    {{$loop->first}}<br/>
    {{$loop->last}}<br/>
    {{$loop->even}}<br/>
    {{$loop->odd}}<br/>
    {{$loop->depth}}<br/>
@empty
    <h2>No Data Found</h2>
@endforelse