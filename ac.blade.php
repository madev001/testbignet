@extends('master')
@section('content')

 <link rel="stylesheet" href="css/styleAcceuil.css">
 <div class="container-fluid">
 <div class="row bg-dark text-white" style="padding-left: 20px;">
  <h2>Arrangement du chantier</h2>
</div>
<div class="container-fluid" style="padding-left: 10px; margin-left: 10px;" >

	</div>
	 <p style="font-family: Georgia, serif; font-size: 15px; background-color: #DCDCDC; border-left: 1rem solid ; padding-left: 20px;">
     	Le nettoyage de fin de chantier, intervenant après des travaux de construction ou de rénovation, est une opération de ménage très minutieuse qui, en règle générale, comprend :<br></p>
<div class="row "  >
		

    

    
     	
<div class="col-lg-4 ">
			
        <img src="img/services/ac.jpeg" alt="indisponible ! ressayez plutard" class="img-responsive" >
   </div>
   <div class="col-lg-8 ">
<ul style="font-family: Georgia, serif; font-size: 15px; background-color: 	#DCDCDC; border-left: 1rem solid ; padding-left: 20px;">

    <li> Le nettoyage/lessivage des murs,</li>

    <li> La désinfection des sanitaires et de la cuisine s’il y en a une,</li>

      <li>  L’évacuation des déchets et résidus (gravats, bris de plâtre, sciure de bois…) et le dépoussiérage/balayage/aspiration,</li>


     <li>   Le nettoyage des diverses salissures (traces de colles, de peinture…)</li>

      <li>  Le dégraissage/grattage/lavage des vitres et des rebords de fenêtres</li>

      <li>  La remise en état des sols (parquets, carrelages, sols PVC…)</li>

     <li>  Le dépoussiérage et le nettoyage des placards</li>

   <li>  L’aération du bâtiment</li>
</ul>
</div>

</div>

</div>
<div class="row text-center" style="margin-bottom: 10px;">
  
  <a href="{{ url("/services") }}" class="btn btn-secondary col-lg-2 offset-1  col-md-10 col-sm-10 "style="margin-bottom: 10px;">Liste des services</a>
  <a href="{{ url("/devis") }}" class="btn btn-success col-lg-2 offset-1  col-md-10 col-sm-10 "style="margin-bottom: 10px;">Devis gratuit</a>

</div>

</div>





@endsection