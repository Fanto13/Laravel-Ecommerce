@extends('layouts.app')

@section('content')
{{-- @if (Auth::user()) --}}
@guest
<p style="text-align: center;"><span style="color: #ff9900;"><em>Fai il login per inserire articoli nel carrello</em></span></p>
@endguest

<table class="table table-hover">

  <thead>
    <tr>
      <th scope="col">titolo</th>
      <th scope="col">categoria</th>
      <th scope="col">immagine</th>
      <th scope="col">descrizione</th>
      <th scope="col">quantità magazzino</th>
      <th scope="col">prezzo</th>
    </tr>
  </thead>
  <tbody>
    @foreach($items as $item)
    <section className="container-fluid">
      <div className="row justify-content-center">

        <article className="d-flex flex-column justify-content-center align-items-center vh-100">
          <tr>
            <td>{{   $item->title   }}</td>
            <td>{{   $item->category  }}</td>
            <td> <img height="250px" width="250px" src={{url($item->image)}}></td>
            <td>{{   $item->description  }}</td>
            <td>{{   $item->n_warehouse  }}</td>
            <td>{{  $item->price  }}&euro;</td>
            {{ csrf_field() }}

            @auth
            <td><a class="btn btn-primary" href="{{URL::action('ItemController@show', $item->id)}}" role="button">Metti
                nel carrello<br> e dettagli</a></td>
            @endauth

          </tr>
        </article>

      </div>
    </section>

    @endforeach
    
  </tbody>
</table>

{{-- @else
<p>non posso vedere</p>
@endif --}}
@auth
<a class="btn btn-primary float-right" href="{{ URL::action('BasketController@index')}}"role="button">Vai al carrello</a>
@endauth
<center> <a class="btn btn-primary" href="{{route('home')}}" role="button">Torna a<br> Home </a> </center>
{{-- @if (Auth::has('user'))
  {{ Auth::user()->IsAdmin ? 'sono Admin' : 'sono client'}}
@endif --}}

@endsection