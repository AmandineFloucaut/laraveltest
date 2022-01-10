@extends('layouts.app')

@section('content')

    <h1> {{ $post->title }} </h1>

        <p> {{ $post->content }} </p>
        <span> {{ $post->created_at }} </span>

    <a href="{{ route('posts.update', ['id' => $post->id]) }}"> Modifier l'article </a>

@endsection

