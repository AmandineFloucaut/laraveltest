@extends('layouts.app')

@section('content')
   <h1> EEtes vous sur de vouloir supprimer l'article ci dessous : </h1>

   <h1> {{ $post->title }} </h1>

   <p> {{ $post->content }} </p>
   <span> {{ $post->created_at }} </span>

    <a href="{{ route('posts.update', ['id' => $post->id]) }}"> Modifier l'article </a>

   <form method="POST" action="{{ route('posts.delete', ['id' => $post->id])}}">
    @csrf
    <button type="submit" class="btn btn-primary">Je confirme vouloir supprimer l'article ci dessous </button>
  </form>

  <a href=""> Supprimer l'article </a>
@endsection