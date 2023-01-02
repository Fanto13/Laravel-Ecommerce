@extends('layouts.app')

@section('content')
{{-- @if (Auth::user()->IsAdmin()) --}}
<table class="table table-hover">

  <thead>
    <tr>
      <th scope="col">nome</th>
      <th scope="col">cognome</th>
      <th scope="col">email</th>
      <th scope="col">sesso</th>
      <th scope="col">admin</th>
      <th scope="col">modifica</th>
      <th scope="col">elimina</th>
    </tr>
  </thead>
  <tbody>


    <section id="divutente" className="container-fluid">
      <div className="row justify-content-center">
        @foreach($user as $utente)
        <article className="d-flex flex-column justify-content-center align-items-center vh-100">
          <tr>
            <td>{{ $utente->name }}</td>
            <td>{{ $utente->surname }}</td>
            <td>{{ $utente->email }}</td>
            <td>{{ $utente->sex }}</td>
            <td>{{ $utente->IsAdmin }}</td>
            <td> <a href="{{URL::action('UserController@edit',$utente->id)}}"><button type="button"
                  class="btn btn-primary">Modifica</button></a></td>
            <td> <button id="{{$utente->id}}" type="button" class="btn btn-danger delete">Elimina</button></td>

            {{-- <td><a class="btn btn-primary" href="{{URL::action('UserController@show', $utente->id)}}"
            role="button">ulteriori dettagli</a></td>
          </tr> --}}
        </article>

      </div>
    </section>
    @endforeach
  </tbody>
</table>
<div id="confirm" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Conferma eliminazione utente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Sei sicuro di voler eliminare l'utente?</p>
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
  <center> <a class="btn btn-primary" href="{{route('home')}}" role="button">Torna a<br> Home </a> </center>



  @endsection

  @section('script')


  <script>
    var IdUtente;
    $('.delete').on('click', function() {
      IdUtente=$(this).attr('id');
      $('#confirm').modal('show');

    });
      $('#ok').on('click', function () {

      $.ajax({
        dataType: "json",
                type: "GET",
        url: "/user/destroy/" + IdUtente,  
        beforeSend: function () {
            $('#ok').text('Sto eliminando...');
        },
        success: function (data) {
            setTimeout(function () {
                $('#confirm').modal('hide');
            
            }, 500);
            location.reload($('#divutente'));
            console.log(data['response']);
            

        },
        error: function (richiesta, stato) {
            
        }
        });
    });



  

  </script>
  @endsection