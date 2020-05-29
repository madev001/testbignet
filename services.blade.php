@extends('master')
@section('content')
 <link rel="stylesheet" href="css/styleService.css">
<div class="row bg-dark text-white" style="padding-left: 20px;">
	<h2>Services</h2>
</div>
<div class="container-fluid">
	<div class="row" style="padding-top: 50px;">
		<div class="col-lg-2">
			
		</div>
		<div class="col-lg-8 col-md-12 col-sm-12 text-center">
			<table class="table table-borderless">
                  
                  <tbody>
                    <tr>
                      
                      <td>
                     <a href="{{ url("/vitres") }}">
                      
                      <img src="img/services/nv1.jpeg" alt="nettoyage vitre" class="img-thumbnail">
                       
                      <br>
                          <div class="caption text-center">Nettoyage vitre</div></a>
                      </td>
                      <td>
                      <a href="{{ url("/fin_de_chantier") }}">
                         <img src="img/services/fc1.jpeg" alt="Fin de chantier" class="img-thumbnail"><br>
                          <div class="caption text-center">Fin de chantier</div></a>
                      </td>
                    </tr>
                    <!-- __________________________________________________ -->
                    <tr>
                      
                      <td>
                      	<a href="{{ url("/avant_chape") }}"><img src="img/services/nac.jpeg" alt="Nettoyage avant chape" class="img-thumbnail"><br>
                          <div class="caption text-center">Nettoyage avant chape</div></a>
                      </td>
                      <td>
                       <a href="{{ url("/escalier") }}">  <img src="img/services/ne.jpeg" alt="Nettoyage des escaliers" class="img-thumbnail"><br>
                         <div class="caption text-center">Nettoyage des escaliers</div></a>
                      </td>
                    </tr>
                     <!-- _________________________________________________ -->
                    <tr>
                      
                      <td>
                     <a href="{{ url("/maison_appart") }}"> 	<img src="img/services/nma.jpeg" alt="Nettoyage des maisons et appartements" class="img-thumbnail"><br>
                          <div class="caption text-center">Nettoyage des maisons et appartements</div></a>
                      </td>
                      <td>
                      <a href="{{ url("/arrangement_chantier") }}">   <img src="img/services/ac.jpeg" alt="Arrangement du chantier" class="img-thumbnail"><br>
                        <div class="caption text-center">Arrangement du chantier</div></a>
                      </td>
                    </tr>
                                     </tbody>
             </table>
		</div>


	</div>
	
</div>

@endsection