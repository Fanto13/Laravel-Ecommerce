@extends('layouts.app')
@section('content')

<span class="badge badge-pill badge-secondary">Prodotti</span>
<div class="card-group">
  <div class="card text-center" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Aggiungi prodotto</h5>
      <p class="card-text">Aggiungi un nuovo prodotto al database</p>
      <a href="{{ URL::action('ItemController@create')}}"><button type="button"
          class="btn btn-primary">Aggiungi</button></a>
    </div>
  </div>

  <div class="card text-center" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Visualizza i prodotti</h5>
      <p class="card-text">Visualizza ed elimina prodotti</p>
      <a href="{{ URL::action('ItemController@index')}}"><button type="button"
          class="btn btn-primary">Aggiungi</button></a>
    </div>
  </div>
</div>



<br><span class="badge badge-pill badge-secondary">Utenti</span>


<div class="card-group">
  <div class="card text-center" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Visualizza utenti</h5>
      <p class="card-text">Visualizza utenti e dai privilegi di amministrazione</p>
      <a href="{{ URL::action('UserController@index')}}"><button type="button"
          class="btn btn-primary">Aggiungi</button></a>
    </div>
  </div>

  
  </div>
 
</div>
 <center> <a class="btn btn-info" href="{{route('home')}}" role="button">Torna a<br> Home </a> </center>
@endsection