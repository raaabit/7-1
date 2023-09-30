<x-app-layout>
    <x-slot name="header">
        <h1>Blog Name</h1>
    </x-slot>
    <x-slot name="slot">
        <a href='/posts/create'>create</a>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <a href="/posts/{{ $post->id }}"><h2 class='title'>{{ $post->title }}</h2></a>
                    <p class='body'>{{ $post->body }}</p>
                    <form action="/posts/{{ $post->id}}" id="form_{{ $post->id}}"method="post">
                        @csrf
                        @method("DELETE")
                    <button type="button" onclick="deletePost({{ $post->id}})">delete</button>
                </div>
                <br>
            @endforeach
        </div>
                    {{ Auth::user()->name }}
        <div>
            @foreach($questions as $question)
                <div>
                    <a href="https://teratail.com/questions/{{ $question['id'] }}">
                        {{ $question['title'] }}
                    </a>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        <script>
            function deletePost(id) {
                'use strict'
                
                if(confirm('消去すると復元できません。\n本当に消去しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </x-slot>
</x-app-layout>