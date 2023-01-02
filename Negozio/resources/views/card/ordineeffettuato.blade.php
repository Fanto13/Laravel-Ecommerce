@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>	

<head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>il mio ordine</title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>


<h2 style="color: #2e6c80;"><img style="display: block; margin-left: auto; margin-right: auto;" src="https://serving.photos.photobox.com/33368577452aa607abe706db539344f468bcd345a2d49f053ad61eb6437dfb2aec6f32ed.jpg" alt="logo" width="512" height="230" /></h2>
<h1 style="color: #5e9ca0; text-align: center;">&nbsp;</h1>
<h1 style="color: #5e9ca0; text-align: center;">Ordine effttuato!</h1>
<h2 style="color: #2e6c80;">&nbsp;</h2>
<h2 style="color: #2e6c80 ;"><strong>&nbsp;</strong></h2>
<p><strong>Se hai dubbi o domande</strong><strong>&nbsp;puoi telefonarci al numero 0532.568745 oppure una mail a&nbsp;<span style="color: #0000ff; text-align: center;"><em><a href="mailto:nuovaelettronica@ferrara.it,">nuovaelettronica@ferrara.it </a></em></span></strong><strong>!</strong></p>
<p style="text-align: center;"><strong>Saremo lieti di fornirti la mglior assistenza possibile.</strong></p>
<br>


</body><center> <a class="btn btn-primary" href="{{route('home')}}" role="button">Torna a<br> Home </a> </center>
</html>
@endsection