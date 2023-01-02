@extends('layouts.app')

@section('content')
<table class="table table-hover">  
  <thead>      
  <tr>
    <th scope="col">id</th>
    <th scope="col">numero carta</th>
    <th scope="col">ccv</th>
    <th scope="col">user id</th>
    <th scope="col">creato il</th>
    <th scope="col">modificato il</th>
  </tr>
  </thead>
  <tbody>
    
    @foreach ($cards as $card)
    <tr>
        <td>{{   $card->id   }}</td>
        <td>{{   $card->n_card    }}</td>
        <td>{{   $card->ccv  }}</td>
        <td>{{   $card->user_id   }}</td>
        <td>{{   $card->created_at   }}</td>
        <td>{{   $card->updated_at  }}</td>
      </tr>
    @endforeach
    
  </tbody>
</table>
<center> <a class="btn btn-primary" href="{{route('home')}}" role="button">Torna a<br> Home </a> </center>
@endsection