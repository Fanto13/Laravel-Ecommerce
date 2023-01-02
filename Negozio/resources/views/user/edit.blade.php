@extends('layouts.app')

@section('content')

<p style="text-align: center;"><span style="color: red;"><em>Modifica utente</em></span></p>
<section className="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
     
      

        
        <tbody>
          @foreach($user as $utente)
          
          <form action="{{URL::action('UserController@update', $utente->id)}}" method="POST"enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            {{-- <a class="btn btn-primary" href="{{URL::action('UserController@update', $user->id)}}" role="button">Metti
              nel carrello<br> e dettagli</a></td> --}}
          <div class="form-group row">
            

              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>
              <input name="name" type="text" value="{{$utente->name}}">
              <br>
              <br>
          </div>
          <div class="form-group row">
            <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Cognome') }}</label>
            <input name="surname" type="text" value="{{$utente->surname}}">
            <br>
            <br>
          </div>
          <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>
            <input name="email" type="text" value="{{$utente->email}}">
            <br>
            <br>
          </div>
       
          <div class="form-group row">
            <label for="birth_date" class="col-md-4 col-form-label text-md-right">{{ __('Data di nascita') }}</label>
            <input name="birth_date" type="text" value="{{$utente->birth_date}}">
            <br>
            <br>
          </div>
          <div class="form-group row">
            <label id="sex" for="sex" class="col-md-4 col-form-label text-md-right">{{ __('Sesso') }}</label>
            <input name="sex" type="text" value="{{$utente->sex}}">
            <br>
            <br>
          </div>
          <div class="form-group row">
            <label for="IsAdmin"
              class="col-md-4 col-form-label text-md-right">{{ __('Dai amministratore (0 o 1)') }}</label>
            <input name="IsAdmin" type="text" value="{{$utente->IsAdmin}}">
          </div>



         
          

 <div class="form-group login-row row mb-0">
            <div class="col-md-8 offset-md-2">
              <button type="submit" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm"> Salva modifiche </button>
              </form> 
  
 </tbody>
      </div>
    </div>
  </div>
</section>

@endforeach



@auth
@if (Auth::user()->IsAdmin)
<center><a class="btn btn-primary " href="{{route('dashboard')}}" role="button">Admin control
    panel</a> </center>
@endif
@endauth

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
        <h5 class="modal-title" id="exampleModalLabel">Utenti</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{session('message')}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">OK
        </button>
      </div>
    </div>
  </div>
</div>
</section>
@endif

<br>
<center> <a class="btn btn-primary" href="{{route('home')}}" role="button">Torna a<br> Home </a> </center>
@endsection