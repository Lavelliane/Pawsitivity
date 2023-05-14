@props(['breedsCsv'])

@php
    $breeds = explode(',', $breedsCsv);
@endphp


<ul class="flex">
    @foreach ($breeds as $breed)
    <li
    class="flex items-center justify-center bg-indigo-500 text-white rounded-xl py-1 px-3 mr-2 text-xs"
>
    <a href="/?tag={{$breed}}">{{$breed}}</a>
</li>
    @endforeach
    
</ul>