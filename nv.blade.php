@extends('master')
@section('content')

 <link rel="stylesheet" href="css/styleAcceuil.css">
 <div class="container-fluid">
 <div class="row bg-dark text-white" style="padding-left: 20px;">
	<h2>Nettoyage des vitres</h2>
</div>
<div class="container-fluid"  >
	
<div class="row "  >
		

    <div class="col-lg-8 col-md-8 col-sm-8">

     <p style="font-family: Georgia, serif; font-size: 15px; background-color: #DCDCDC; border-left: 1rem solid ; padding-left: 20px;">
     	Les vitres de votre domicile ou de vos locaux professionnels se salissent régulièrement. Sans qu’on s’en rende vraiment compte, cela entraîne une baisse de luminosité à l’intérieur du bâtiment. Et cela donne souvent un air négligé quand on commence à voir la crasse au travers des fenêtres.

</p></div>
<div class="col-lg-4 col-md-4 col-sm-4" ">
			
        <img src="img/services/nv.jpeg" alt="indisponible ! ressayez plutard" class="img-responsive" >
   </div>
</div>
<div class="row">

     <div class="col-lg-1">
     	
     </div>
	<div class="col-lg-7 col-md-12 col-sm-12" style="margin-bottom: 5px; font-family: Georgia, serif; font-size: 15px; background-color: 	#DCDCDC; border-left: 1rem solid ; padding-left: 20px;">

  <h3>Le nettoyage de vitres pose trois problèmes récurrents :</h3>
       <ul>
       <li> Il est très chronophage </li>
       <li> Il demande un équipement complet et onéreux</li>
       <li>  Il peut être dangereux si vos vitres sont difficiles d’accès</li>
        </ul>

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