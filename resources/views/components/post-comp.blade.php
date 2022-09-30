<div class="my-2 mt-4 p-4 h-auto rounded-3xl bg-gradient-to-l from-white to-minionyellow">
    <div class="flex">
        <h2 class="text-3xl"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
        <ul class="flex ml-2 flex-row">
            {{--Loop through tags--}}

            @php
                $tags = explode(',', $post->tags);
            @endphp
            @foreach($tags as $tag)
                <x-tag-comp :tag="$tag" />
            @endforeach
        </ul>
    </div>
    <p><a class="italic" href="user.html">Username</a> - 9/27/22</p>
    <p class="break-words sm:w-3/4">{{$post->content}}</p>
</div>