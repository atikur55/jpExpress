@extends('layouts.master')
@section('css')
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
@endsection
@section('subheader')

@endsection
@section('content')
    <div class="d-flex flex-column-fluid">
        <div class="container ">
            {{-- @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif --}}

            @if (session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
        @endif
    <!--begin::Row-->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-custom mt-5">
                <div class="card-body">
                    <h3 class="card-title">
                        Set Price
                    </h3>
                    <h5 class="card-title"></h5>
                </div>


                <!--begin::Form-->
                <form class="form" action="/pricecreate" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleSelectd">From</label>

                                    <select class="form-control form-control-lg" name="from" id="from_country">
                                        <option value="">-- Choose --</option>
                                        @foreach($countrys as $country)
                                            <option
                                                value="{{$country->country_name}}">{{$country->country_name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleSelectd">To</label>
                                    <select class="form-control form-control-lg" name="to" id="to_country">
                                        <option value="">-- Choose --</option>
                                        @foreach($countrys as $country)
                                            <option
                                                value="{{$country->country_name}}">{{$country->country_name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleSelectd">Service Type</label>
                                    <select class="form-control" name="service_type" id="exampleSelectd">
                                        <option value="Export">Export</option>
                                        <option value="Import">Import</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
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


                        <div class="row">
                            <div class="col-md-6">
                                <label>Weight(kg)</label>
                                <input  class="form-control form-control-sm" name="weight_kg" placeholder="Weight"/>
                            </div>

                            <div class="col-md-6">
                                <label>Price</label>
                                <input  class="form-control form-control-sm" name="price" placeholder="Price"/>
                            </div>


                        </div>


                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                        <button type="reset" class="btn btn-secondary border-danger mr-2">Cancel</button>
                    </div>
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>
    <!--end::Row-->
        </div>
    </div>
@endsection
@section('js')
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script>
    @if(Session::has('status'))
        toastr.success("{{ Session::get('status') }}");
    @endif
</script>
<script type="text/javascript">	
	$(document).ready(function() { 
		$("#from_country").select2({
			placeholder:"search here",
			allowClear:true,
		}); 
	});
</script>
<script type="text/javascript">	
	$(document).ready(function() { 
		$("#to_country").select2({
			placeholder:"search here",
			allowClear:true,
		}); 
	});
</script>
@endsection
