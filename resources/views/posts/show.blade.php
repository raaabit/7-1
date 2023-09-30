<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<x-app-layout>
    <x-slot name="header">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"
        
    </head>
    </x-slot>
    <body class="antialiased">
        <h1 class='title'>
            {{ $post->title }}
        </h1>
        <div class='content'>
            <div class='content_post'>
                <h3>本文</h3>
                <p class='body'>{{ $post->body }}</p>
            </div>
        </div>
        <a href="">{{ $post->category->name }}</a>
        <div class='footer'>
            <a href="/posts/{{ $post->id }}/edit">edit</a>
        <div class='footer'>
            <a href="/">戻る</a>
        </div>
    </body>
</x-app-layout>
</html>