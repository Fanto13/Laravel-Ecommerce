@extends('layouts.app')

@section('content')

<form action="{{URL::action('BasketController@store')}}" method="POST"enctype="multipart/form-data">
  @csrf
  <div class="form-group">
  <label for="user_id">user id</label>
      <input type="text" class="form-control" id="user_id" name="user_id" placeholder="user_id">
  </div>
  <div class="form-group">
    <label for="item_id">item_id</label>
    <input type="text" class="form-control" id="item_id" name="item_id" placeholder="item_id">
  </div>
  <div class="form-group">
    <label for="quantita">quantità</label>
    <input type="text" class="form-control" id="quantity" name="quantity" placeholder="quantità carrello">
  </div>
    <div class="form-group">

  <button type="submit" class="btn btn-primary">INVIO</button>
</form>
 
<a href="{{ URL::action('OrderController@destroy',$basket->item_id)}}"><button type="button" class="btn btn-primary">DISTRUGGI</button></a>
@endsection
