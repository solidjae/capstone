<x-layout>

<div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
<header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-10">
        Post your Recipes
    </h2>

</header>

<form method="POST" action="/recipes">
    @csrf
    <div class="mb-6">
        <label
            for="title"
            class="inline-block text-lg mb-2"
            >Food name
        </label>
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="title"/>

    </div>



    <div class="mb-6">
        <label
            for="link"
            class="inline-block text-lg mb-2">
            Website/Application URL
        </label>
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="link"/>
    </div>

    <div class="mb-6">
        <label for="ingredients" class="inline-block text-lg mb-2">
            Ingredients (Comma Separated)
        </label>
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="ingredients">
    </div>

    <div class="mb-6">
        <label
            for="review"
            class="inline-block text-lg mb-2">
            Review
        </label>
        <textarea
            class="border border-gray-200 rounded p-2 w-full"
            name="review"
            rows="10">
        </textarea>
    </div>

    <div class="mb-6">
        <button
            class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
        >
            Create Recipe
        </button>

        <a href="/" class="text-black ml-4"> Back </a>
    </div>
</form>
</div>

</x-layout>