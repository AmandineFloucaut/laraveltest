@extends('layouts.app')

@section('content')

    <h1> Les articles  </h1>

        @if ($posts->count() > 0)

            @foreach ($posts as $post)
                <div type="button">
                    <a href="{{ route('posts.onePost', ['id' => $post->id])}}"> {{ $post->title }} </a>
                </div>
            @endforeach

        @else
            <span> Aucun article à afficher </span>
        @endif

@endsection
