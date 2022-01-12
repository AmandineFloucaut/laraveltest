<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('home') }}">Accueil</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('tags') }}">Les catégories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('posts') }}">Les étapes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('posts.create') }}">Créer un nouveu tuto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('sources') }}">Les sources</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>