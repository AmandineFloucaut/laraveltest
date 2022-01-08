@extends('layouts.app')

@section('content')

    <h1> Listes des sources utilisées </h1>

    @foreach($sources as $nameSource => $source)
    <p>

        <a href="{{$source}}" traget="_blank"> {{ $nameSource }} </a>
    </p>
    @endforeach

@endsection