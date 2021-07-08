@extends('layouts.frontend')
@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

@endsection
@section('content')
 <section class="board_of_directors_jpex pt-5 pb-5">
      <div class="container">
        <div class="row">
          <h2>Board of Directors</h2>
          <div class="col-md-3 col-6">
            <div class="card mb-4">
              <img src="https://images.pexels.com/photos/3778876/pexels-photo-3778876.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Dr. Anwarul Abedin</h5>
                <p class="card-text">Founder Chairman, Board of Directors</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="card mb-4">
              <img src="https://images.pexels.com/photos/3778876/pexels-photo-3778876.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Dr. Anwarul Abedin</h5>
                <p class="card-text">Founder Chairman, Board of Directors</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="card mb-4">
              <img src="https://images.pexels.com/photos/3778876/pexels-photo-3778876.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Dr. Anwarul Abedin</h5>
                <p class="card-text">Founder Chairman, Board of Directors</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="card mb-4">
              <img src="https://images.pexels.com/photos/3778876/pexels-photo-3778876.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Dr. Anwarul Abedin</h5>
                <p class="card-text">Founder Chairman, Board of Directors</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="card mb-4">
              <img src="https://images.pexels.com/photos/3778876/pexels-photo-3778876.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Dr. Anwarul Abedin</h5>
                <p class="card-text">Founder Chairman, Board of Directors</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="card mb-4">
              <img src="https://images.pexels.com/photos/3778876/pexels-photo-3778876.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Dr. Anwarul Abedin</h5>
                <p class="card-text">Founder Chairman, Board of Directors</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="card mb-4">
              <img src="https://images.pexels.com/photos/3778876/pexels-photo-3778876.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Dr. Anwarul Abedin</h5>
                <p class="card-text">Founder Chairman, Board of Directors</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6">
            <div class="card mb-4">
              <img src="https://images.pexels.com/photos/3778876/pexels-photo-3778876.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Dr. Anwarul Abedin</h5>
                <p class="card-text">Founder Chairman, Board of Directors</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script>
  $('#width, #height, #length').keyup(function(){
  var width = parseFloat($('#width').val());
  var height = parseFloat($('#height').val());
  var length = parseFloat($('#length').val());
  var total = (width * height * length)/1000;
  var fixed_value = total.toFixed(1);
  $('#weight_kg').val(fixed_value);
});
</script>
<script type="text/javascript">	
	$(document).ready(function() { 
		$("#shipp_country").select2({
			placeholder:"search here",
			allowClear:true,
		}); 
	});
</script>

<script type="text/javascript">	
	$(document).ready(function() { 
		$("#receive_country").select2({
			placeholder:"search here",
			allowClear:true,
		}); 
	});
</script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
   
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>
<script>
  function showPosition(position) {
  var latlon = position.coords.latitude + "," + position.coords.longitude;

  var img_url = "https://maps.googleapis.com/maps/api/staticmap?center="+latlon+"&zoom=14&size=400x300&sensor=false&key=AIzaSyCmk0JiD0QiKHxJsgv9_eWXucmCQWQX9G4";

  document.getElementById("mapholder").innerHTML = "<img src='"+img_url+"'>";
}
</script>
@endsection