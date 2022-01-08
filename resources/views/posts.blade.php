@extends('layouts.app')

@section('content')

    <h1> Les articles  </h1>

        @foreach ($posts as $post)
            <div type="button">
                <a href=""> {{ $post }} </a>
            </div>
        @endforeach

@endsection
