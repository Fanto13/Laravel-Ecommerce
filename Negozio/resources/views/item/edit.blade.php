@extends('layouts.app')

@section('content')
<p style="text-align: center;"><span style="color: red;"><em>Modifica item</em></span></p>
<section className="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <thead>

        
        <tbody>
          @foreach($item as $item)
          
          <form action="{{URL::action('ItemController@update', $item->id)}}" method="POST"enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            {{-- <a class="btn btn-primary" href="{{URL::action('UserController@update', $user->id)}}" role="button">Metti
              nel carrello<br> e dettagli</a></td> --}}
              <div class="form-group row">
                <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('title') }}</label>
                <input name="title" type="text" value="{{$item->title}}">
                <br>
                <br>
              </div>

              <div class="form-group row">
            

              <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Categoria') }}</label>
              <input name="category" type="text" value="{{$item->category}}">
              <br>
              <br>
          </div>
          <div class="form-group row">
            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Cognome') }}</label>
            <input name="description" type="text" value="{{$item->description}}">
            <br>
            <br>
          </div>
          <div class="form-group row">
            <label for="n_warehouse" class="col-md-4 col-form-label text-md-right">{{ __('quantità magazzino') }}</label>
            <input name="n_warehouse" type="text" value="{{$item->n_warehouse}}">
            <br>
            <br>
          </div>
       
          
          <div class="form-group row">
            <label id="sex" for="sex" class="col-md-4 col-form-label text-md-right">{{ __('immmagine') }}</label>
            <input name="image" type="text" value="{{$item->image}}">
            <br>
            <br>
          </div>
       




          <div class="form-group login-row row mb-0">
            <div class="col-md-8 offset-md-2">
              <button type="submit" class="btn btn-primary">
                {{ __('Invia') }}
              
              </button>
</section>
</form>

@endforeach
</tbody>
</table>
</div>
 </thead>

@auth
@if (Auth::user()->IsAdmin)
<center><a class="btn btn-primary " href="{{route('dashboard')}}" role="button">Admin control
    panel</a> </center>
@endif
@endauth

<center> <a class="btn btn-primary" href="{{route('home')}}" role="button">Torna a<br> Home </a> </center>
