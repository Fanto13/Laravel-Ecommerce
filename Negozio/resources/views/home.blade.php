@extends('layouts.app')
@section('content')

<center>
	<div id="titolo" class="row justify-content-center col-xs-12">
		<header><img class="img-fluid" src="images/mockup/logo.png" alt="Responsive image" srcset="image_2x.jpg 2x">
		</header>
	</div>
</center>

<div id="centrale" class="row">
	<div class="col-2">
		<div class="w-auto p-2" style="background-color: #eee;">

			<h2 class="fal fa-h2 justify-content-center col-xs-12">Visualizza articoli <br> per categoria:</h2>
			<div class="row justify-content-center col-xs-12">
				<div class="col">
					<form method="post" action="{{URL::action('ItemController@visualizzacategorie')}}">
						{{ csrf_field() }}

						<div class="custom-control custom-radio">
							<input class="custom-control-input" id="custom-radio-1-1" type="radio" name="categoria"
								value="laptop" checked="">
							<label class="custom-control-label" for="custom-radio-1-1">Laptop </label>
						</div>
						<div class="custom-control custom-radio">
							<input class="custom-control-input" id="custom-radio-1-2" type="radio" name="categoria"
								value="desktop">
							<label class="custom-control-label" for="custom-radio-1-2">Computer fissi </label>
						</div>
						<div class="custom-control custom-radio">
							<input class="custom-control-input" id="custom-radio-1-3" type="radio" name="categoria"
								value="tablet">
							<label class="custom-control-label" for="custom-radio-1-3">Tablet</label>
						</div>
						<div class="custom-control custom-radio">
							<input class="custom-control-input" id="custom-radio-1-4" type="radio" name="categoria"
								value="printer">
							<label class="custom-control-label" for="custom-radio-1-4">Stampanti</label>
						</div>
						<div class="custom-control custom-radio">
							<input class="custom-control-input" id="custom-radio-1-5" type="radio" name="categoria"
								value="telefonia">
							<label class="custom-control-label" for="custom-radio-1-5">Telefonia</label>
						</div>
						<div class="custom-control custom-radio">
							<input class="custom-control-input" id="custom-radio-1-6" type="radio" name="categoria"
								value="tutto">
							<label class="custom-control-label" for="custom-radio-1-6">Visualizza tutti i
								prodotti</label>
						</div>
						<center><input class="" type="submit" value="Visualizza"></center>
						<br><br><br>


					</form>
					<form action="{{URL::action('ItemController@cercatitolodescrizione')}}" method="post">
						{{ csrf_field() }}
						<div class="stilericerca">
							<input type="text" name="barra_ricerca" placeholder="Cerca prodotto..." size="w-auto">
							<input type="submit" value="Vai"><input type="reset" value="Clear">
						</div>
					</form>
					<br><br><br>
					<div class="form-group" id="credit_cards">
						<img src="images/assets/visa.jpg" id="visa">
						<img src="images/assets/mastercard.jpg" id="mastercard">
						<img src="images/assets/amex.jpg" id="amex">
						<br>
						<img class="img-fluid" src="images/assets/paypal-prova.png" alt="Responsive image"
							srcset="image_2x.jpg 2x" id="paypal">
					</div>
					@auth
					@if (Auth::user()->IsAdmin)
					<center><a class="btn btn-primary " href="{{route('dashboard')}}" role="button">Admin control
							panel</a> </center>
					@endif
					@endauth

					@guest
					<center><a class="btn btn-primary " href="{{url('user/register')}}" role="button">registrati</a>
					</center>
					@endguest

				</div>

			</div>
		</div>
	</div>

	<div class="col-10">
		<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-13" src="images/mockup/image3721.png" alt="First slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-13" src="images/mockup/manworking.png" alt="Second slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-13" src="images/mockup/logo3.png" alt="Third slide">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>

</div>






<!--Carousel Wrapper-->
<div class="col-12" id="video">
	<div id="video-carousel-example2" class="carousel slide carousel-fade" data-ride="carousel">
		<!--Indicators-->
		<ol class="carousel-indicators">
			<li data-target="#video-carousel-example2" data-slide-to="0" class="active"></li>
			<li data-target="#video-carousel-example2" data-slide-to="1"></li>

		</ol>
		<!--/.Indicators-->
		<!--Slides-->
		<div class="carousel-inner" role="listbox">
			<!-- First slide -->
			<div class="carousel-item active">
				<!--Mask color-->
				<div class="view">
					<!--Video source-->
					<video class="video-fluid" autoplay loop muted>
						<source src="https://mdbootstrap.com/img/video/Lines.mp4" type="video/mp4" />
					</video>
					<div class="mask rgba-indigo-light"></div>
				</div>

				<!--Caption-->
				<div class="carousel-caption">
					<div class="animated fadeInDown">
						<h1 class="h1-responsive"> <span style="color: 0000ff;">Veniteci a
								trovare!</span></h1>

					</div>
				</div>
				<!--Caption-->
			</div>
			<!-- /.First slide -->

			<!-- Second slide -->
			<div class="carousel-item">
				<!--Mask color-->
				<div class="view">
					<!--Video source-->
					<video class="video-fluid" autoplay loop muted>
						<source src="https://mdbootstrap.com/img/video/animation-intro.mp4" type="video/mp4" />
					</video>
					<div class="mask rgba-purple-slight"></div>
				</div>

				<!--Caption-->
				<div class="carousel-item active">
					<div class="carousel-caption">
						<h1 class="h1-responsive">Troverai quello che cerchi</h1>
							<h2>al prezzo più competitivo di sempre</h2>

					</div>
				</div>


				<!-- /.Second slide -->
			</div>
			<!--/.Slides-->
			<!--Controls-->
			<a class="carousel-control-prev" href="#video-carousel-example2" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#video-carousel-example2" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<!--/.Controls-->
	</div>
	<!--Carousel Wrapper-->


	@if (session('status'))
	<div class="alert alert-success" role="alert">
		{{ session('status') }}
	</div>
	@endif
	<div id="footer">
		<center>
			<p>Ordina online e risparmia il 10% su
				tutto il catalogo! Oppure vieni a trovarci a Ferrara (FE) in Via delle prove
				27/c.</p>
		</center>
	</div>
	@endsection