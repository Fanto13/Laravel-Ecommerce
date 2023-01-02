@extends('layouts.app')




@section('content')
<div class="container py-2">
  <div class="row">
      <div class="col">
       
<title>il mio ordine</title>
<link rel="stylesheet" type="text/css" href="css.css">

<h1><center>Seleziona gli articoli che desideri acquistare, dunque aggiungili al carrello</center></h1>
<center><div class="msgBox" style="width:17%;"><a href="HOME_PAGE.php">Torna indietro</a></div><br>
<form action="Carrello.php" method="post"><input type="submit" value="Visualizza il tuo Carrello"></form></center>
<h2 style="color: #2e6c80;"><img style="display: block; margin-left: auto; margin-right: auto;" src="https://ibb.co/8PMGr22" alt="logo" width="512" height="230" /></h2>
<h1 style="color: #5e9ca0; text-align: center;">&nbsp;</h1>
<h1 style="color: #5e9ca0; text-align: center;">Ordine effttuato!</h1>
<h2 style="color: #2e6c80;">&nbsp;</h2>
<h2 style="color: #2e6c80;"><strong>&nbsp;</strong></h2>
<p><strong>Se hai dubbi o domande</strong><strong>&nbsp;puoi telefonarci al numero 0532.568745 oppure una mail a&nbsp;<span style="color: #0000ff;"><em><a href="mailto:nuovaelettronica@ferrara.it,">nuovaelettronica@ferrara.it </a></em></span></strong><strong>!</strong></p>
<p style="text-align: center;"><strong>Saremo lieti di fornirti la mglior assistenza possibile.</strong></p>
<br>


      </div>
  </div>
</div>

 {{-- <table class="table table-hover">
  <thead>
    <tr>
      <td>{{   $order->id  }}</td>
      <td>{{   $order->user_id    }}</td>
      {{-- <th scope="col"></th> --}}
    {{-- </tr>
  </thead>
  <tbody>
    <tr>
        <td>{{   $order->id  }}</td>
        <td>{{   $order->user_id    }}</td>
    </tr>
  </tbody>
</table> --}} 

@endsection
