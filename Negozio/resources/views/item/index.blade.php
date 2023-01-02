@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
  <div class="col-xs-8">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">foto</th>
          <th scope="col">id</th>
          <th scope="col">titolo</th>
          <th scope="col">descrizione</th>
          <th scope="col">categoria</th>
          <th scope="col">quantità magazzino</th>
          <th scope="col">prezzo</th>
        </tr>
      </thead>
      <tbody>
        <section id="divoggetto" className="container-fluid">
          <div className="row justify-content-center">
            @foreach($items as $item)
            <tr>
              <td> <img height="250px" width="250px" src={{url($item->image)}}></td>
              <td>{{   $item->id  }}</td>
              <td>{{   $item->title   }}</td>
              <td>{{   $item->description  }}</td>
              <td>{{   $item->category  }}</td>
              <td>{{   $item->n_warehouse  }}</td>
              <td>{{   $item->price  }}</td>
              @auth
              <td> <button id="{{$item->id}}" type="button" class="btn btn-danger delete">Elimina</button></td>
              @endauth
            </tr>
            @endforeach
      </tbody>
  
    </table>
  </div>
</div>

<div id="confirm" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Conferma eliminazione dell'oggetto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Sei sicuro di voler eliminare l'oggetto?</p>
      </div>
      <div class="modal-footer">
        <button type="button" name="ok" id="ok" class="btn btn-danger">Elimina</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annulla</button>
      </div>
    </div>
  </div>
</div>
{{-- @else
<p>non posso vedere</p> --}}
@if (Auth::user()->IsAdmin)
<td><a class="btn btn-primary " href="{{route('dashboard')}}" role="button">Admin control panel</a> </center>
  @endif
  <br>
  <center> <a class="btn btn-primary" href="{{route('home')}}" role="button">Torna a<br> Home </a> </center>


  @endsection

  @section('script')

  <script>
    var IdOggetto;
   $('.delete').on('click', function() {
     IdOggetto=$(this).attr('id');
     $('#confirm').modal('show');

   });
     $('#ok').on('click', function () {

     $.ajax({
       dataType: "json",
               type: "GET",
       url: "/item/destroy/" + IdOggetto,  
       beforeSend: function () {
           $('#ok').text('Sto eliminando...');
       },
       success: function (data) {
           setTimeout(function () {
               $('#confirm').modal('hide');
           
           }, 500);
           location.reload($('#divoggetto'));
           console.log(data['response']);
           

       },
       error: function (richiesta, stato) {
           
       }
       });
   });


  </script>
  @endsection