@extends('template.main')






@section('content')
<h1 class="text-center">Creation d'un nouvelle avis</h1>
<div class="container-fluid d-flex justify-content-center align-items-center mb-5">
    <div class="container w-50 mb-5">

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error )
                  <li>{{$error}}</li>  
                @endforeach
            </ul>
        </div>
        @endif
        
        
        <form action="{{route('store')}}" method="post" class="d-flex flex-column">
        @csrf

        
        <div class="form-line d-flex flex-column">
            <label for="nom">Nom:</label>
             <input type="text" value="{{old('nom')}}" name="nom">
        </div>
        <div class="form-line d-flex flex-column">
            <label for="texte_auteur">Texte auteur:</label>
            <textarea name="texte_auteur" value="{{old('texte_auteur')}}" id="" cols="50" rows="20"></textarea>
        {{-- <input type="text" value="{{old('texte_auteur')}}" name="texte_auteur"> --}}
        </div>
        
        <div class="form-line d-flex flex-column w-20">
            <label for="note">Note:</label>
         <input type="number"  min="1" max="5" value="{{old('note')}}" name="note">
        </div>
        
        <button class="btn btn-warning  mt-5">Submit</button>
        </form>    
    </div>

</div>
@endsection