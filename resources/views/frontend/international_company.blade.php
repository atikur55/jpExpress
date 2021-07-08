@extends('layouts.frontend')
@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<style>
    .international_countries a {
            text-decoration: none;
        }
</style>
@endsection
@section('content')
<section class="international_countries">
    <div class="container">
        <h2 class="text-dark mb-3">List of E-commerce in {{$country_name->name}}</h2>
        <div class="row">
            @foreach($company as $data)
            <div class="col-md-3 col-sm-6 col-6 pb-2 text-center">
                <a target="_blank" href="{{$data->url}}">
                    <div class="card">
                        <img src="{{asset('ecommerce_section/international_ecommerce/')}}/{{$data->image}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text text-dark"> {{$data->company_name}}</p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
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

@endsection