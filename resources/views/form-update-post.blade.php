@extends('layouts.app')

@section('content')

   <h1> Modifier le tutoriel </h1>

   <form method="POST" action="{{ route('posts.update', ['id' => $post->id])}}">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Titre </label>
      <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Titre du tutoriel" value="{{$post->title}}">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Contenu</label>
      <textarea type="text" name="content" class="form-control" id="exampleInputPassword1" placeholder="Contenu de l'article" value="">{{$post->content}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary mt-4">Créer</button>
  </form>

@endsection
