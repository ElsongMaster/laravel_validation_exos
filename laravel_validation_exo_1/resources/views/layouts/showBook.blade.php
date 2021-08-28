@extends('template.main')






@section('content')
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">ID:{{$book->id}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">Nom:{{$book->nom}}</h6>
    <p class="card-text">Texte auteur: {{$book->texte_auteur}}</p>
    <p class="card-text">Note: {{$book->note}}</p>
    <form action="{{route('delete', $book->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <a href="{{route('edit', $book->id)}}" class="btn btn-warning">EDIT</a>
        <button type="submit" class="btn btn-danger">DELETE</button>
    </form>
  </div>
</div>
@endsection