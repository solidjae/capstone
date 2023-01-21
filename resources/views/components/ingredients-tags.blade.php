@props(['ingredientsCsv'])

@php
    $ingredients = explode(',', $ingredientsCsv);
@endphp

<ul class="flex">
    @foreach($ingredients as $ingredient)
        <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
            <a href="/?ingredient={{$ingredient}}">{{$ingredient}}</a>
        </li>
    @endforeach
</ul>

