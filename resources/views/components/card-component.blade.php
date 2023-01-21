@props(['recipe'])

<x-card>
    <div class="flex">
        <div>
            <h3 class="m-5 text-2xl">
                <a href="/recipes/{{$recipe->id}}">{{$recipe->title}}</a>
            </h3>
                <x-ingredients-tags :ingredientsCsv="$recipe->ingredients"/>
            <div class="text-xl font-bold mb-4"></div>
        </div>
    </div>
</x-card>