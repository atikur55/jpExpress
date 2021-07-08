@extends('layouts.master')
@section('css')

@endsection
@section('subheader')

@endsection
@section('content')

    <!--begin::Row-->
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-custom">
                <div class="card-body">
                    <h3 class="card-title">
                        Get A Quick Shipping Rate
                    </h3>
                    <h5 class="card-title">Competitive shipping rates designed for your needs</h5>
                </div>
                <div>
                    @if (session('price'))
                    <div style="text-align: center">
                        Your Rate : <span class="badge bg-dark text-white">{{session('price')}} TK</span>
                    </div>
                    @endif
                    @if (session('noprice'))
                    <div style="text-align: center">
                        <span class="badge bg-danger text-white">{{session('noprice')}}</span>
                    </div>
                    @endif
                </div>




                <!--begin::Form-->
                <form action="{{url('show_price_value')}}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleSelectd">From</label>

                            <select class="form-control form-control-lg" name="from" id="shipp_country">
                                <option value="">-- Choose Country --</option>
                                @foreach($countrys as $country)
                                <option value="{{$country->country_name}}">{{$country->country_name}}</option>
                                @endforeach
                            </select>

                        </div>

                        <div class="form-group">
                            <label for="exampleSelectd">To</label>
                            <select class="form-control form-control-lg" name="to" id="receive_country">
                                <option value="">-- Choose Country --</option>
                                @foreach($countrys as $country)
                                    <option value="{{$country->country_name}}">{{$country->country_name}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleSelectd">Type</label>
                                    <select class="form-control" name="area_type" id="exampleSelectd">
                                        <option value="International">International</option>
                                        <option value="Local">Local</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleSelectd">Service Type</label>
                                    <select class="form-control" name="service_type" id="exampleSelectd">
                                        <option value="Export">Export</option>
                                        <option value="Import">Import</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleSelectd">Width</label>
                                    <input type="text" name="width" id="width" class="form-control form-control-sm"  placeholder="Width"/>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleSelectd">Height</label>
                                    <input type="text" name="height" id="height" class="form-control form-control-sm"  placeholder="Height"/>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleSelectd">Length</label>
                                    <input type="text" name="length" id="length" class="form-control form-control-sm"  placeholder="Length"/>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-5">
                                <label>Weight(kg)</label>
                                <input type="text" class="form-control form-control-sm" name="weight" id="weight"  placeholder="Click & Show Weight"/>
                            </div>

                            <div class="col-md-7">
                                <div class="form-group">
                                    <label for="exampleSelectd">Object Type</label>
                                    <select class="form-control" name="object_type" id="exampleSelectd">
                                        <option value="document1">Document 1</option>
                                        <option value="document2">Document 2</option>
                                        <option value="document3">Document 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-success mr-2">Check Rates</button>
                            </form>
                                <button type="reset" class="btn btn-secondary border-danger mr-2">Cancel</button>
                            </div>
                
                            <div class="col-md-6">
                               
                                {{-- @if (session('price'))
                                    <div>
                                        <span class="badge bg-dark text-white">{{session('price')}} TK</span>
                                    </div>
                                @endif
                                @if (session('noprice'))
                                <div>
                                    <span class="badge bg-danger text-white">{{session('noprice')}}</span>
                                </div>
                                @endif --}}
                            </div>
                        </div>
                        
                        {{-- <button type="reset" class="btn btn-secondary ">Price Show Here</button> --}}
                        
                    </div>
                
                <!--end::Form-->
            </div>
        </div>
    </div>
    <!--end::Row-->

@endsection
@section('js')
{{-- <script>
    $('#width, #height, #length').change(function(){
    var width = parseFloat($('#width').val()) || 0;
    var height = parseFloat($('#height').val()) || 0;
    var length = parseFloat($('#length').val()) || 0;
    var total = (width * height * length)/1000;
    var fixed_value = total.toFixed(1);
    $('#weight').val(fixed_value);  
});
</script> --}}
<script>
    $('#width, #height, #length').keyup(function(){
    var width = parseFloat($('#width').val());
    var height = parseFloat($('#height').val());
    var length = parseFloat($('#length').val());
    var total = (width * height * length)/1000;
    var fixed_value = total.toFixed(1);
    $('#weight').val(fixed_value);
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
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




@endsection
