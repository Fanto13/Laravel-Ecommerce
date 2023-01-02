@extends('layouts.app')

@section('content')

<form action="{{URL::action('OrderController@store')}}" method="POST"enctype="multipart/form-data">
  @csrf
  <div class="form-group">
  <label for="id">id</label>
      <input type="text" class="form-control" id="id" name="id" placeholder="id">
  </div>
  <div class="form-group">
    <label for="user_id">user_id</label>
    <input type="text" class="form-control" id="user_id" name="user_id" placeholder="user_id">
  </div>
 
  </div>
  <button type="submit" class="btn btn-primary">INVIO</button>
</form>



@endsection
