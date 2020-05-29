@extends('master')
@section('content')

 <link rel="stylesheet" href="css/styleAcceuil.css">
 <div class="container-fluid">
 <div class="row bg-dark text-white" style="padding-left: 20px;">
	<h2>Nettoyage des maisons et appartements</h2>
</div>
<div class="container-fluid" style="padding-left: 10px; margin-left: 10px;" >
	
<div class="row "  >
		

    <div class="col-lg-8 col-md-8 col-sm-8">

     <p style="font-family: Georgia, serif; font-size: 15px; background-color: #DCDCDC; border-left: 1rem solid ; padding-left: 20px;">
     	Pour le nettoyage complet de votre appartement ou de votre maison, nous commençons par un état des lieux complet afin d’estimer l’ampleur de la tâche à accomplir, puis une fois le devis signé, nous venons chez vous afin d’effectuer le grand nettoyage de votre appartement ou de votre maison en commençant par lessiver entièrement toutes vos surfaces en carrelage, marbre, moquette, tissus, bois, aluminium, etc. Sans oublier vos sanitaires, robinetterie, cuisine, balcons, etc. Rien ne sera laissé au hasard

</p></div>
<div class="col-lg-4 col-md-4 col-sm-4" ">
			
        <img src="img/services/nma.jpeg" alt="indisponible ! ressayez plutard" class="img-responsive" >
   </div>
</div>

</div>
<div class="row text-center" style="margin-bottom: 10px;">
  
  <a href="{{ url("/services") }}" class="btn btn-secondary col-lg-2 offset-1  col-md-10 col-sm-10 "style="margin-bottom: 10px;">Liste des services</a>
  <a href="{{ url("/devis") }}" class="btn btn-success col-lg-2 offset-1  col-md-10 col-sm-10 "style="margin-bottom: 10px;">Devis gratuit</a>

</div>
</div>

</div>





@endsection