<x-layout>
    @include('partials._search')

    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

        @unless(count($recipes) == 0)

        @foreach($recipes as $recipe)
            <x-card-component :recipe="$recipe" />
        @endforeach

        @else 
        <p>no listings found </p>
        @endunless

    </div>


</x-layout>