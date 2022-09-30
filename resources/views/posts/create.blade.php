<x-layout>
    <section class="mt-10 mx-auto w-96 border-2 border-black rounded-xl bg-gradient-to-t from-white to-minionyellow">
        <div class="m-auto p-10">
            <h2 class="text-3xl">Create a Post</h2>
            <form class="mt-2" method="POST" action="/posts/create">
                @csrf
                <div class="flex sm:flex-auto flex-wrap items-center">
                    <label for="title">Post Title:</label>
                    <input
                        class="border-2 focus:outline-none focus:border-androidgreen border-black rounded-xl p-1 w-full"
                        name="title" id="title" type="text">
                    @error('title')
                    <p class="text-red-600">{{$message}}</p>
                    @enderror
                </div>
                <div class="flex mt-2 sm:flex-auto flex-wrap items-center">
                    <label for="content">Content:</label>
                    <textarea
                        class="border-2 focus:outline-none focus:border-androidgreen border-black rounded-xl p-1 w-full"
                        name="content" id="content"></textarea>
                    @error('content')
                    <p class="text-red-600">{{$message}}</p>
                    @enderror
                </div>
                <div class="flex mt-2 sm:flex-auto flex-wrap items-center">
                    <label for="tags">Tags (Comma Seperated):</label>
                    <input
                        class="border-2 focus:outline-none focus:border-androidgreen border-black rounded-xl p-1 w-full"
                        name="tags" id="tags" type="text">
                    @error('tags')
                    <p class="text-red-600">{{$message}}</p>
                    @enderror
                </div>
                <input type="submit" value="Create Post"
                    class="border-2 mt-2 hover:border-androidgreen cursor-pointer border-black rounded-xl p-1">
            </form>
        </div>
    </section>
</x-layout>