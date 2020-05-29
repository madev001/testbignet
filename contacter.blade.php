
@extends('master')
@section('content')
 <link rel="stylesheet" href="css/styleContacter.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<div class="content">
<div class="row " style="background-image: url('img/nc.jpg');background-repeat:no-repeat; background-position:center center; ">
  <div class="col-lg-3 col-md-0 col-sm-0 " >
  </div>

<div class="col-lg-6 col-md-12 col-sm-12 " >
  <div class="col-lg-12 col-md-12 col-sm-12 " >
<p class=" " style="padding-left: 20px; margin-top: 30px; font-size: 18px; background-color: #DCDCDC;border-left: 1rem solid ; ">N'hésitez pas à nous laisser votre message ici, notre équipe se fera un plaisir de vous répondre dans les plus brefs délais.</p>
     </div><br>
      @if(count($errors) >0)
       <div class="alert alert-danger alert-block col-lg-12 col-md-12 col-sm-12" id="alert">
    	<button type="button" class="close" data-dimiss="alert">x</button><br>
    	@foreach($errors->all() as $error)
        <ul> <li>{{$error}}</li></ul>
    	@endforeach
    </div>
   @endif


   @if($message =Session::get('success'))
    <div class="alert alert-success alert-block col-lg-12 col-md-12 col-sm-12" >
    	<button type="button" class="close" data-dimiss="alert">x</button><br>
    	<strong>{{$message}}</strong>
    </div>
   @endif

   
<div class="col-lg-12 col-md-12 col-sm-12  "  style="margin-top: 30px; margin-bottom: 30px; ">
<form method ="post" action="contacter">
  
{{csrf_field()}}

<div class="input-group " style="margin-bottom: 10px;">
    <span class="input-group-addon"><i class="fas fa-user"></i></span>
    <input id="Nom" type="text" class="form-control " name="nom" placeholder="Nom et prenom *" >
  </div>

  



  <div class="input-group" style="margin-bottom: 10px;">
    <span class="input-group-addon"><i class="fas fa-at"></i></span>
    <input id="email *" type="text" class="form-control " name="email" placeholder="Email *" >
  </div>
  <div class="input-group" style="margin-bottom: 10px;">
    <span class="input-group-addon"><i class="fas fa-phone"></i></span>
    <input id="tel" type="tel" class="form-control " name="gsm" placeholder="GSM *" >
  </div>
  
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 ">
    <div class="form-group" >
  	
     
    <textarea class="form-control " id="msg" rows="10" name="message"  placeholder="Message" ></textarea>
  </div>
</div>
</div>
  
   <div class="row">
   	<div class="col-lg-12 col-md-12 col-sm-12 text-center">
  <div class="form-group " style="margin-bottom: 10px;">
  <button class="btn btn-success " name="send" type="submit">Envoyer</button>
</div>
</div>
</div>
</form>
</div>
    </div>
       <div class="col-lg-3 col-md-0 col-sm-0 " >
        </div>

</div>

</div><!--div content-->




<script type="text/javascript">

$(document).ready(function () {
    
window.setTimeout(function() {
       $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
           $(this).remove(); 
       });
}, 3000);
    
});
</script>
@endsection