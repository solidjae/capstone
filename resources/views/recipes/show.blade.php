<x-layout>
    <div class="mx-4">
        <x-card>
            <div class="flex flex-col items-center justify-center text-center">
                <h3 class="text-2xl mb-2">{{$recipes->title}}</h3>
                <div class="text-xl font-bold mb-4"></div>
                
                <x-ingredients-tags :ingredientsCsv="$recipes->ingredients"/>

            <div class="border border-gray-200 w-full mb-6 mt-6"></div>
                <div>
                    <h3 class="text-3xl font-bold mb-4">
                        Review
                    </h3>
                    <div class="text-lg space-y-6">
                        <p>
                            {{$recipes->review}}
                        </p>


                        <a href="{{$recipes->link}}" target="_blank" class="block bg-black text-white py-2 rounded-xl hover:opacity-80">
                            <i class="fa-solid fa-globe"></i> Visit Recipe Website</a
                        >
                    </div>
                </div>
            </div>
        </x-card>
            <x-card class="mt-4 p-2 flex space-x-6">
                <a href="/recipes/{{$recipes->id}}/edit">
                    <i class="fa-solid fa-pencil"></i> Edit
                </a>
            <form method="POST" action="/recipes/{{$recipes->id}}">
            @csrf
            @method('DELETE')
            <button class="text-red-500"><i class="fa-solid fa-trash"></i>Delete</button>
            </form>
        </x-card>
    </div>
</x-layout>