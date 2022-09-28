<x-layout>
    <section>
        <x-search-comp />
    </section>
    <section class="mt-5">
        <h2 class="text-3xl"><i class="fa-solid fa-signs-post"></i>All Posts:</h2>
        @foreach($posts as $post)
            <x-post-comp :post="$post" />
        @endforeach
    </section>
</x-layout>