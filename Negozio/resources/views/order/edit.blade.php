@extends('layouts.app')

@section('content')
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">user_id</th>
        {{-- <th scope="col"></th> --}}
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{   $order->id  }}</td>
        <td>{{   $order->user_id    }}</td>
      </tr>
    </tbody>
  </table>
  
<p>@endsection</p>
<p>
  <input name="torna a inserisci" type="button" autofocus="autofocus" id="torna a inserisci" title="torna a inserisci" value="Torna a inserisci">
</p>