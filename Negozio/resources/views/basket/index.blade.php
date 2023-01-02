@extends('layouts.app')

@section('content')





<br>
<table class="table table-hover">
 
    <thead>
      <tr>
        <th scope="col">titolo</th>
        <th scope="col">categoria</th>
        <th scope="col">prezzo</th> 
        <th scope="col">quantità magazzino</th>
        <th scope="col">azioni</th>
      </tr>
    </thead>
    <tbody>
      @foreach($basket as $basket)
        <tr>
          <td scope="col">{{(\App\Item::find($basket->item_id)) ->title}} </td>
          <td scope="col">{{(\App\Item::find($basket->item_id))->category}}</td>
          <td scope="col">{{(\App\Item::find($basket->item_id))->price}} &euro;</td>
          <td scope="col">{{$basket->quantity}}</td>
          <td>
            <a class="btn btn-danger align-items-center" href="{{ URL::action('BasketController@destroy',$basket->id)}}">Elimina dal carrello</a>
          </td>
        </tr>
      @endforeach

    </tbody>
  </table>



  
  

<div class='row justify-content-md-center'>
  <div class='col-xs-6'>
    <div class="msgBox justify-content-md-center align-items-center"  style="margin-top: 5px; padding: 5px;">
      <table cellpadding="4" cellspacing="5" border="2" style="align: center; text-align: center;">
        <tbody>
          <tr>
            <td>Totale parziale</td>
            <td>{{$tot}}</td>
          </tr>
          <tr>
            <td>Spedizione</td>
            <td>€12,99</td>
          </tr>
          <tr>
            <td>Totale da pagare</td>
            <td>
              <?php
              if ($tot == 0) echo "non c'è alcun articolo!";
              ?>
              <font color="red">{{$tot != 0 ? $tot+=12.99 : '0'}}</font>
            </td>
          </tr>
        </tbody>
      </table>
      </div>
    </div>
</div>
<div class='row justify-content-md-center'>
  <div class='col-xs-6'>
    <h7>Costo di spedizione fisso di 12.99€</h7><br>
    <a href="{{ URL::action('CardController@create')}}"><button type="button" <button type="button"
      class="btn btn-info ri">Prosegui con il pagamento</button></a>
      
    <center> <a class="btn btn-primary" href="{{route('home')}}" role="button">Torna a<br> Home </a> </center>
  </div>
</div>
{{-- <div id="confirm" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Conferma eliminazione oggetto nel carrello</h5>
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

  @section('script')


  <script>
    var Idoggetto;
    $('.delete').on('click', function() {
      Idoggetto=$(this).attr('id');
      $('#confirm').modal('show');

    });
      $('#ok').on('click', function () {

      $.ajax({
        dataType: "json",
                type: "GET",
        url: "/basket/destroy/" + Idoggetto,  
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

@endsection --}}
@endsection