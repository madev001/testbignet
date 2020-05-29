@extends('master')
@section('content')
	 <link rel="stylesheet" href="css/style404.css">
<div id="notfound">
		<div class="notfound">
			<div class="notfound-404">
				<h1>Oops!</h1>
				<h2>404 - Page non trouvée</h2>
			</div>
			<a href="{{url('/acceuil')}}">Page d'acceuil</a>
		</div>
	</div>
@endsection