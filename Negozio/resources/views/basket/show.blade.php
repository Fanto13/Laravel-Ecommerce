@extends('layouts.app')

@section('content')

 <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">user_id</th>
      <th scope="col">item_id</th>
      <th scope="col">quantity</th>
      {{-- <th scope="col"></th> --}}
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>{{   $basket->user_id  }}</td>
      <td>{{   $basket->item_id    }}</td>
      <td>{{   $basket->quantity    }}</td>
    </tr>
  </tbody>
</table>

<p>@endsection</p>
<p>
  <center> <a class="btn btn-primary" href="{{route('home')}}" role="button">Torna a<br> Home </a> </center>
</p>
<p>&nbsp;</p>
