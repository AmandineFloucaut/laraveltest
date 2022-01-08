@extends('layouts.app')

@section('content')

    <h1> Tutoriel Laravel 8 </h1>

    @foreach($homeData as $data)
        <p> {{ $data }} </p>
    @endForeach

@endsection

