@extends('layouts.app')

@section('content')

<form action="{{URL::action('PurchaseController@store')}}" method="POST"enctype="multipart/form-data">
  @csrf
  <div class="form-group">
  <label for="id">id</label>
      <input type="text" class="form-control" id="id" name="id" placeholder="id">
  </div>
  <div class="form-group">
    <label for="order_id">user_id</label>
    <input type="text" class="form-control" id="order_id" name="order_id" placeholder="order_id">
  </div>
  <div class="form-group">
      <label for="order_id">item_id</label>
      <input type="text" class="form-control" id="item_id" name="item_id" placeholder="item_id">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">INVIO</button>
</form>



@endsection
