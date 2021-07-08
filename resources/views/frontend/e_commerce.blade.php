@extends('layouts.frontend')
@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<style>
    .pd-0 {
        padding: 0;
    }
    .ecommerce-section a {
        text-decoration: none;
    }
    .inside_country,
    .international_country {
        padding-top: 150px;
    }
</style>
@endsection
@section('content')
<section class="ecommerce-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6 pd-0">
                    <div class="inside_country text-center"
                        style="background:-webkit-linear-gradient(#0000006c,#0000006d), url({{ asset('frontend_assets/img/flagmap.png') }});background-size: cover;height: 100vh;">
                        <h1 class="pt-5 mb-5 text-white">Bangladesh</h1>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-light" data-bs-toggle="modal"
                            data-bs-target="#insideCountryModal">
                            See More
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="insideCountryModal" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">E-commerce in Bangladesh</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                        	@foreach($bd_company as $company)
                                            <div class="col-md-3 col-sm-6 col-6 pb-2">
                                                <a target="_blank" href="{{$company->url}}">
                                                    <div class="card">
                                                        <img src="{{ asset('ecommerce_section/bd_ecommerce/') }}/{{$company->image}}" class="card-img-top" alt="..." height="200px;">
                                                        <div class="card-body">
                                                            <p class="card-text text-dark">Ecommerce</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                           @endforeach
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 pd-0">
                    <div class="international_country text-center"
                        style="background: -webkit-linear-gradient(#0000006c,#0000006d),url({{ asset('frontend_assets/img/world.png') }});background-size: cover;height: 100vh;">
                        <h1 class="text-center pt-5 text-white">International</h1>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-light mt-5" data-bs-toggle="modal"
                            data-bs-target="#internationalModal">
                            See More
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="internationalModal" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">List of countries</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                        	@foreach($countries as $country)
                                            <div class="col-md-3 col-sm-6 col-6 pb-2">
                                                <a href="{{ url('international/e-commerce') }}/{{$country->id}}">
                                                    <div class="card">
                                                        <img src="{{ asset('frontend_assets/img/country_bd.jpg') }}" class="card-img-top" alt="...">
                                                        <div class="card-body">
                                                            <p class="card-text text-dark"> {{$country->name}}</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                          @endforeach
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
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

@endsection