@extends('layouts.app')

@section('content')
    <h1> Créer un nouveau tutoriel </h1>

    {{-- errors retrieve by $request->validate are automaticaly register in $errors var --}}
    @if($errors->any())

        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('posts.create')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Titre </label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Titre du tutoriel">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Contenu</label>
            <textarea type="text" name="content" class="form-control" id="exampleInputPassword1" placeholder="Contenu de l'article"></textarea>
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Enregistrer une image</label>
            <input class="form-control" type="file" name="image" id="image" accept="image/png, image/jpeg">
        </div>
        <button type="submit" class="btn btn-primary mt-4">Créer</button>
    </form>
@endsection
