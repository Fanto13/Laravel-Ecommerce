@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
<form action="{{URL::action('ItemController@store')}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="titolo">Titolo</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="titolo">
  </div>
  <div class="form-group">
    <label for="category">Categoria</label>

    <div class="col">
      <div class="custom-control custom-radio">
        <input class="custom-control-input" id="custom-radio-1-1" type="radio" name="category" value="laptop" checked=""
          size="w-auto">
        <label class="custom-control-label" for="custom-radio-1-1">Laptop </label>
      </div>
      <div class="custom-control custom-radio">
        <input class="custom-control-input" id="custom-radio-1-2" type="radio" name="category" value="desktop">
        <label class="custom-control-label" for="custom-radio-1-2">Computer fissi </label>
      </div>
      <div class="custom-control custom-radio">
        <input class="custom-control-input" id="custom-radio-1-3" type="radio" name="category" value="tablet">
        <label class="custom-control-label" for="custom-radio-1-3">Tablet</label>
      </div>
      <div class="custom-control custom-radio">
        <input class="custom-control-input" id="custom-radio-1-4" type="radio" name="category" value="printer">
        <label class="custom-control-label" for="custom-radio-1-4">Stampanti</label>
      </div>
      <div class="custom-control custom-radio">
        <input class="custom-control-input" id="custom-radio-1-5" type="radio" name="category" value="telefonia">
        <label class="custom-control-label" for="custom-radio-1-5">Telefonia</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="price">prezzo</label>
    <input type="float" class="form-control" id="price" name="price" placeholder="prezzo">
  </div>
  
<label for="description">descrizione</label>
  <div class="form-group">
    

    <textarea type="text" id="description" placeholder="descrizione" name="description" class="form-group" rows="5"
      cols="60"></textarea>
  </div>
 
  </div>
  <div class="form-group">
    <label for="n_warehouse">quantità</label>
    <input type="text" class="form-control" id="n_warehouse" name="n_warehouse" placeholder="quantità_magazzino">
  </div>
  <div class="form-group">

    <label for="image">Immagine</label>
    <input type="file" class="form-data" id="tmp_image" name="tmp_image" placeholder="image">

  </div>
  </div>
  <button type="submit" class="btn btn-primary">INVIO</button>
  
</form>

          @auth
					@if (Auth::user()->IsAdmin)
					<center><a class="btn btn-primary " href="{{route('dashboard')}}" role="button">Torna alla dashboard</a> </center>
					@endif
					@endauth
<br>
<center> <a class="btn btn-primary" href="{{route('home')}}" role="button">Torna a<br> Home </a> </center>

@endsection