<x-layout>
    <section>
        <h2 class="text-3xl">Welcome to Cool Friends!</h2>
        <p>Cool friends is a message board where friends can post messages together!</p>
    </section>
    <section class="mt-5">
        <h2 class="text-3xl"><i class="fa-solid fa-signs-post"></i> New Posts:</h2>
        {{--Loop Through Posts--}}
        @foreach($posts as $post)
        <x-post-comp :post="$post" />
        @endforeach
    </section>
</x-layout>