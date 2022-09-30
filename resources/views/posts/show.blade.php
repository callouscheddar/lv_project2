<x-layout>
    <a href="/"><i class="fa-solid fa-arrow-left"></i> Back</a>
    <section>
        <x-post-comp :post="$post" />
    </section>
    <section class="mt-5">
        <x-comment-comp />
    </section>
</x-layout>