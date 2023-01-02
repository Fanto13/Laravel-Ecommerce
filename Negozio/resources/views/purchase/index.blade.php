@extends('layouts.app')

@section('content')
<table class="table table-hover">
  <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">order_id</th>
        <th scope="col">quantity</th>
        <th scope="col">item_id</th>
    </tr>
  </thead>
  <tbody>
    @foreach($purchase as $purchase)
    <tr>
        <td>{{   $purchase->id  }}</td>
        <td>{{   $purchase->order_id    }}</td>
        <td>{{   $purchase->quantity    }}</td>
        <td>{{   $purchase->item_id    }}</td>
      
      
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
