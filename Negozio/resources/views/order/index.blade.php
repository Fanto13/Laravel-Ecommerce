@extends('layouts.app')

@section('content')





<br>
<table class="table table-hover">
 
    <thead>
      <tr>
        <th scope="col">titolo</th>
        <th scope="col">categoria</th>
        <th scope="col">prezzo</th> 
        <th scope="col">quantità magazzino</th>
       
      </tr>
    </thead>
    <tbody>
        
      @foreach($ as $order)
        <tr> 
             $collection->first()->id
          <td scope="col">{{(\App\Item::find($order->id))->title}} </td>
          <td scope="col">{{(\App\Item::find($order->id))->category}}</td>
          <td scope="col">{{(\App\Item::find($order->id))->price}} &euro;</td>
          <td scope="col">{{(\App\Basket::find($basket->id))->quantity}}</td>
          <td>

          </td>
        </tr>
      @endforeach

    </tbody>
  </table>



  
  

@endsection