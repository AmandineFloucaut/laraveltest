@extends('layouts.app')

@section('content')

    <h1> Tutoriel Laravel 8 </h1>

    @if ($tags->count() > 0)

        <ul>
            @foreach($tags as $tag)
            <li><a href=""> {{ $tag->name }} </a></li>

            @endForeach
        </ul>

    @else
        <span> Pas de catégorie </span>
    @endif

@endsection