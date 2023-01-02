@extends('layouts.app')

@section('content')

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">immagine</th>
      <th scope="col">categoria</th>
      <th scope="col">descrizione</th>
      <th scope="col">quantità</th>
      <th scope="col">titolo</th>
      <th scope="col">prezzo</th>

      {{-- <th scope="col"></th> --}}
    </tr>
  </thead>
  <tbody>
    <tr>
      {{-- //form --}}
      <form action="{{URL::action('BasketController@add')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <td> <img height="250px" width="250px" src={{url($item->image)}}></td>
        <td>{{   $item->category    }}</td>
        <td>{{   $item->description    }}</td>
        <td>{{   $item->n_warehouse  }}</td>
        <td>{{   $item->title   }}</td>
        <td>{{   $item->price   }}&euro;</td>
        <td>
          @auth
          {{-- <button class="btn btn-primary"data-toggle="popover" title="Popover title" data-content=""></button></form> </td>  --}}
          <input type="number" min="1" max="100" step="1" name="quantity" placeholder="1" value="1" />
          <input type="hidden" name="item_id" value="{{ $item->id }}">
          <button type="submit" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm"> Aggiungi
            al carrello </button>
          @endauth
        </td>
      </form>
    </tr>
  </tbody>
</table>

<a class="btn btn-primary" href="{{ URL::action('BasketController@index')}}"role="button">Vai al carrello</a>
<center> <a class="btn btn-primary" href="{{route('home')}}" role="button">Torna a<br> Home </a> </center>



@if(session('message'))

<script>
  $(document).ready(function () {
                $("#message").modal();
            });

</script>

<div class="modal fade" id="message" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Carrello</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{session('message')}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Continua
        </button>
      </div>
    </div>
  </div>
</div>

@endif


@endsection