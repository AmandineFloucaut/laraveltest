@extends('layouts.app')

@section('content')

    <h1> {{ $post->title }} </h1>

        <p> {{ $post->content }} </p>
        <span> Créé le {{ $post->created_at->format('d/m/Y') }} </span>

    <div>
        <button>
            <a href="{{ route('posts.update', ['id' => $post->id]) }}"> Modifier l'article </a>
        </button>

        <button>
            <a href="{{ route('posts.delete', ['id' => $post->id]) }}"> Supprimer l'article </a>
        </button>
    </div>

    <h2> Vos commentaires : </h2>

    @forelse($post->comments as $comment)
        <p>{{ $comment->content }}</p>
        <span> Créé le {{ $comment->created_at->format('d/m/Y') }} </span>
    @empty
        <p> Aucun commentaire </p>
    @endforelse

@endsection

