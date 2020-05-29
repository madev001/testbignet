@extends('master')
@section('content')

 <link rel="stylesheet" href="css/styleAcceuil.css">
 <div class="container-fluid">
 <div class="row bg-dark text-white" >
  <h2>Nettoyage avant chape</h2>
</div>
<div class="container-fluid">

<div class="row" >
		

    <div class="col-lg-8 col-md-8 col-sm-8">

     <p style="font-family: Georgia, serif; font-size: 15px; background-color: #DCDCDC; border-left: 1rem solid ; padding-left: 20px;">
     	Lorsque vous entreprenez une construction ou une rénovation, vous voulez que les travaux avancent ! Il est essentiel de passer de bons accords avec votre entrepreneur. Aussi, nous avons dressé pour vous la liste des points à régler avant la réalisation de votre chape de nivellement. Pour que votre chapiste puisse entamer le travail dans les meilleures conditions ! Et que vous obteniez le meilleur résultat pour votre argent.

</p></div>
<div class="col-lg-4 col-md-4 col-sm-4" ">
			
        <img src="img/services/nac.jpeg" alt="indisponible ! ressayez plutard" class="img-responsive" >

   </div>
</div>
<div class="row">

     <div class="col-lg-1">
     	
     </div>
	<div class="col-lg-7 col-md-12 col-sm-12"style="font-family: Georgia, serif; font-size: 15px; background-color: #DCDCDC; border-left: 1rem solid ; padding-left: 20px; margin-bottom: 20px;">
<p >
  <ul>
  	<li>Demandez des éclaircissements !</li>
  	<li>Prévoyez de l'eau</li>
  	<li>Débarrassez le chantier</li>
  	<li>Réalisez des coffrages</li>
  	<li>Fixez tous les câbles</li>
  	<li>Remplissez les trous</li>
  	<li> Brossez !</li>
  	<li>Prévoyez une place de stationnement</li>
  </ul>
</p></div>
</div>
</div>

<div class="row text-center" style="margin-bottom: 10px;">
  
  <a href="{{ url("/services") }}" class="btn btn-secondary col-lg-2 offset-1  col-md-10 col-sm-10 "style="margin-bottom: 10px;">Liste des services</a>
  <a href="{{ url("/devis") }}" class="btn btn-success col-lg-2 offset-1  col-md-10 col-sm-10 "style="margin-bottom: 10px;">Devis gratuit</a>

</div>
</div>



</div>

@endsection