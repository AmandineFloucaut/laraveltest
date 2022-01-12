@extends('layouts.app')

@section('content')
<div class="container-fluid mx-auto">
    <h1> Tutoriel Laravel 8 </h1>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h6 class="card-subtitle mb-2 text-muted">Introduction</h6>

            @foreach($homeData as $data)
                <p class="card-text"> {{ $data }} </p>
            @endForeach
        </div>
    </div>
</div>
@endsection

