@extends('template.main')






@section('content')
<section class="mb-5">

  <table class="table">
    <thead>
      <tr>
        <th scope="col">Nom</th>
        <th scope="col">text_auteur</th>
        <th scope="col">Show</th>
  
      </tr>
    </thead>
    <tbody>
        @foreach ( $datas as $data )  
        <tr>
          <th scope="row">{{$data->id}}</th>
          <td>{{$data->nom}}</td>
          <td><a href="{{route('show',$data->id)}}" class="btn btn-info">SHOW</a></td>
        </tr>
        @endforeach
     
    </tbody>
  </table> 
  
      <form action="{{route('deleteAll')}}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">DeleteAll</button>
      </form>
</section>
    
@endsection