@extends('master')
@section('content')

 <link rel="stylesheet" href="css/styleAcceuil.css">
 <div class="contenair-fluid">
 <div class="row bg-dark text-white" style="padding-left: 20px;">
	<h2>Nettoyage des escaliers</h2>
</div>
<div class="contenair-fluid" style="padding-left: 10px; margin-left: 10px;" >
	
<div class="row "  >
		

    <div class="col-lg-8 col-md-8 col-sm-8">

     <p style="font-family: Georgia, serif; font-size: 15px; background-color: #DCDCDC; border-left: 1rem solid ; padding-left: 20px;">
     	Brut et intemporel, le béton est un matériau qui sait se faire élégant dans les intérieurs de style industriel et discret sur les terrasses contemporaines. Facile d’entretien, il peut pourtant se fissurer, s’effriter. Il est également sensible à certaines taches, qui le marquent durablement. Afin d’éviter que votre escalier en béton ne se ternisse, nous avons fait le point sur les différentes questions que vous vous posez et nous y apportons des réponses simples pour que l’entretien de vos marches reste aussi aisé qu’é<conomique class=""></conomique>

</p></div>
<div class="col-lg-4 col-md-4 col-sm-4" ">
			
        <img src="img/services/ne.jpeg" alt="indisponible ! ressayez plutard" class="img-responsive" >
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