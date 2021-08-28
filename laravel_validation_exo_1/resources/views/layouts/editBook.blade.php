@extends('template.main')






@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error )
          <li>{{$error}}</li>  
        @endforeach
    </ul>
</div>
@endif


<form action="{{route('update',$book->id)}}" method="post">
@csrf
@method('PUT')

Nom: <input type="text" value="{{old('nom')}}" name="nom">
Texte auteur: <input type="text" value="{{old('texte_auteur')}}" name="texte_auteur">
Note: <input type="number"  min="1" max="5" value="{{old('note')}}" name="note">

<button class="btn btn-warning text-light">Submit</button>
</form>   
@endsection