@extends('master')
@section('content')

 <link rel="stylesheet" href="css/styleAcceuil.css">
 <div class="container-fluid">
 <div class="row bg-dark text-white" style="padding-left: 20px;">
	<h2>Le nettoyage de fin de chantier</h2>
</div>
<div class="container-fluid" style="padding-left: 10px; margin-left: 10px;" >
	
<div class="row "  >
		

    <div class="col-lg-8 col-md-8 col-sm-8">

     <p style="font-family: Georgia, serif; font-size: 15px; background-color: #DCDCDC; border-left: 1rem solid ; padding-left: 20px;">
     	Le nettoyage après travaux ou de fin de chantier est une spécialité à part entière qui doit être réalisée par un professionnel du nettoyage.<br>

En effet, le grattage de peinture, l'élimination du voile de ciment, la poussière et parfois l'enlèvement de gravats nécessitent de l'expérience et des équipements pros. Le nettoyage après travaux demande des facultés d'adaptation et une bonne connaissance des matériaux afin de ne pas endommager les surfaces nettoyer avec un grattage ou des produits inadaptés.<br>

Veuillez à ce que les entreprises qui interviennent sur votre chantier protègent les sols et murs afin que votre devis de nettoyage soit le plus bas possible.<br>

</p></div>
<div class="col-lg-4 col-md-4 col-sm-4" ">
			
        <img src="img/services/fc.jpeg" alt="indisponible ! ressayez plutard" class="img-responsive" >
   </div>
</div>
<div class="row">

     <div class="col-lg-1">
     	
     </div>
	<div class="col-lg-9 col-md-12 col-sm-12">
<p style="font-family: Georgia, serif; font-size: 15px; background-color: 	#DCDCDC; border-left: 1rem solid ; padding-left: 20px;">
<a style="font-weight: bold;">Astuce:</a> Le nettoyage après travaux est souvent programmé trop tôt et nos équipes doivent nettoyer alors que les travaux ne sont pas tout à fait finis. Afin d'assurer un nettoyage de qualité, veillez à ce que les travaux soient terminés et qu'il ny ait plus de passage de personnel pendant le nettoyage.<br>

Les chantiers et l'état de propreté sont à chaque fois différents selon les professionnels qui ont réalisé les travaux et un devis de nettoyage de fin de chantier sera adapté à chaque situation.<br>

Un nettoyage après travaux de qualité permet d'occuper les lieux immédiatement. Il comprend généralement le nettoyage des sols, vitres, salle de bais, cuisine, placards, wc, portes, interrupteurs, luminaires, prises etc... 
 <br>    </p></div>
</div>
</div>

<div class="row text-center" style="margin-bottom: 10px;">
  
  <a href="{{ url("/services") }}" class="btn btn-secondary col-lg-2 offset-1  col-md-10 col-sm-10 "style="margin-bottom: 10px;">Liste des services</a>
  <a href="{{ url("/devis") }}" class="btn btn-success col-lg-2 offset-1  col-md-10 col-sm-10 "style="margin-bottom: 10px;">Devis gratuit</a>

</div>
</div>





@endsection