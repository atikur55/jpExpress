@extends('layouts.master')
@section('css')
{{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" /> --}}
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
@endsection
@section('subheader')
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Details-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Book Online</h5>
                <!--end::Title-->
                <!--begin::Separator-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
                <!--end::Separator-->
                <!--begin::Search Form-->
                <div class="d-flex align-items-center" id="kt_subheader_search">


                </div>
                <!--end::Search Form-->
                <!--begin::Group Actions-->
                <div class="d-flex- align-items-center flex-wrap mr-2 d-none" id="kt_subheader_group_actions">
                    <div class="text-dark-50 font-weight-bold">
                        <span id="kt_subheader_group_selected_rows">23</span>Selected:
                    </div>
                    <div class="d-flex ml-6">
                        <div class="dropdown mr-2" id="kt_subheader_group_actions_status_change">
                            <button type="button"
                                    class="btn btn-light-primary font-weight-bolder btn-sm dropdown-toggle"
                                    data-toggle="dropdown">Update Status
                            </button>
                            <div class="dropdown-menu p-0 m-0 dropdown-menu-sm">
                                <ul class="navi navi-hover pt-3 pb-4">
                                    <li class="navi-header font-weight-bolder text-uppercase text-primary font-size-lg pb-0">
                                        Change status to:
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link" data-toggle="status-change" data-status="1">
																<span class="navi-text">
																	<span
                                                                        class="label label-light-success label-inline font-weight-bold">Approved</span>
																</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link" data-toggle="status-change" data-status="2">
																<span class="navi-text">
																	<span
                                                                        class="label label-light-danger label-inline font-weight-bold">Rejected</span>
																</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link" data-toggle="status-change" data-status="3">
																<span class="navi-text">
																	<span
                                                                        class="label label-light-warning label-inline font-weight-bold">Pending</span>
																</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link" data-toggle="status-change" data-status="4">
																<span class="navi-text">
																	<span
                                                                        class="label label-light-info label-inline font-weight-bold">On Hold</span>
																</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <button class="btn btn-light-success font-weight-bolder btn-sm mr-2"
                                id="kt_subheader_group_actions_fetch" data-toggle="modal"
                                data-target="#kt_datatable_records_fetch_modal">Fetch Selected
                        </button>
                        <button class="btn btn-light-danger font-weight-bolder btn-sm mr-2"
                                id="kt_subheader_group_actions_delete_all">Delete All
                        </button>
                    </div>
                </div>
                <!--end::Group Actions-->
            </div>
            <!--end::Details-->
            <!--begin::Toolbar-->
           
            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->
@endsection
@section('content')

    <!--begin::Row-->
    <div class="row">
        <div class="col-md-12">
            <div class="card card-custom mt-5">
                <div class="card-body">
                    <h3 class="card-title">
                        Get A Online Booking Here...
                    </h3>

                </div>


                <!--begin::Form-->
                <form class="form" action="{{url('online_booking_post')}}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">From</label>
                                    <select class="form-control" name="from" id="from_country">
                                        <option value="">-- Choose Country --</option>
                                        {{-- <input class="form-control autocomplete_txt" type='text' data-type="from" id='from' name='from' placeholder="Search Country"/> --}}
                                        @foreach ($all_country as $country)
                                            <option value="{{$country->country_name}}">{{$country->country_name}}</option>
                                        @endforeach
                                    </select>
                                    @error('from')
                                        <div class="alert alert-danger">
                                            <span>{{$message}}</span>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">To</label>
                                    <select class="form-control" name="to" id="to_country">
                                        <option value="">-- Choose Country --</option>
                                        {{-- <input class="form-control autocomplete_txt" type='text' data-type="to" id='to' name='to' placeholder="Search Country"/> --}}
                                        @foreach ($all_country as $country)
                                            <option value="{{$country->country_name}}">{{$country->country_name}}</option>
                                        @endforeach
                                    </select>
                                    @error('to')
                                        <div class="alert alert-danger">
                                            <span>{{$message}}</span>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleSelectd">Type</label>
                                    <select class="form-control" name="location" id="exampleSelectd">
                                        <option value="">-- Choose --</option>
                                        <option value="International">International</option>
                                        <option value="Local">Local</option>
                                    </select>
                                    @error('location')
                                        <div class="alert alert-danger">
                                            <span>{{$message}}</span>
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleSelectd">Service Type</label>
                                    <select class="form-control autocomplete_txt" name="service_type" id="service_type">
                                        <option value="">-- Choose --</option>
                                        <option value="Export">Export</option>
                                        <option value="Import">Import</option>
                                    </select>
                                    @error('service_type')
                                        <div class="alert alert-danger">
                                            <span>{{$message}}</span>
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleSelectd">Object Type</label>
                                    <select class="form-control" name="object_type" id="exampleSelectd">
                                        <option value="">-- Choose --</option>
                                        <option value="document1">Document 1</option>
                                        <option value="document2">Document 2</option>
                                        <option value="document3">Document 3</option>
                                    </select>
                                    @error('object_type')
                                        <div class="alert alert-danger">
                                            <span>{{$message}}</span>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleSelectd">Width</label>
                                    <input type="text" name="width" id="width" class="form-control form-control-sm" placeholder="Width"/>
                                    @error('width')
                                        <div class="alert alert-danger">
                                            <span>{{$message}}</span>
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleSelectd">Height</label>
                                    <input type="text" name="height" id="height" class="form-control form-control-sm" placeholder="Height"/>
                                    @error('height')
                                        <div class="alert alert-danger">
                                            <span>{{$message}}</span>
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleSelectd">Length</label>
                                    <input type="text" name="length" id="length" class="form-control form-control-sm" placeholder="Length"/>
                                    @error('length')
                                        <div class="alert alert-danger">
                                            <span>{{$message}}</span>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-md-4">
                                <label>Weight(kg)</label>
                                <input type="text" name="weight_kg" id="weight_kg" class="form-control form-control-sm autocomplete_txt" placeholder="Weight"/>
                                @error('weight_kg')
                                    <div class="alert alert-danger">
                                        <span>{{$message}}</span>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label>Shipment Details</label>
                                <input type="text" name="ship_details" class="form-control form-control-sm" placeholder="Shipment Details"/>
                                @error('weight_kg')
                                    <div class="alert alert-danger">
                                        <span>{{$message}}</span>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                {{-- <label>Value</label> --}}
                                <input type="hidden" name="price" id="price" class="form-control form-control-sm autocomplete_txt" placeholder="Value"/>
                                @error('price')
                                    <div class="alert alert-danger">
                                        <span>{{$message}}</span>
                                    </div>
                                @enderror
                            </div>

                        </div>
                    </div>

            </div>
        </div>
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="row">
        <div class="col-md-6">
            <div class="card card-custom mt-5">
                <div class="card-body">
                    <h3 class="card-title">
                        Shipper
                    </h3>
                </div>


                <!--begin::Form-->

                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleSelectd">Full Name</label>
                                    <input type="text" name="shipper_name" class="form-control form-control-sm" placeholder="Full Name"/>
                                    @error('shipper_name')
                                        <div class="alert alert-danger">
                                            <span>{{$message}}</span>
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleSelectd">Company Name</label>
                                    <input type="text" name="ship_com_name" class="form-control form-control-sm" placeholder="Company Name"/>
                                    @error('ship_com_name')
                                        <div class="alert alert-danger">
                                            <span>{{$message}}</span>
                                        </div>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleSelectd">Mobile</label>
                                    <input type="text" name="ship_mobile" class="form-control form-control-sm" placeholder="Mobile"/>
                                    @error('ship_mobile')
                                        <div class="alert alert-danger">
                                            <span>{{$message}}</span>
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleSelectd">Email</label>
                                    <input type="text" name="ship_email" class="form-control form-control-sm" placeholder="Email"/>
                                    @error('ship_email')
                                        <div class="alert alert-danger">
                                            <span>{{$message}}</span>
                                        </div>
                                    @enderror
                                </div>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleSelectd">Zip</label>
                                    <input type="text" name="ship_zip" class="form-control form-control-sm" placeholder="Zip"/>
                                    @error('ship_zip')
                                        <div class="alert alert-danger">
                                            <span>{{$message}}</span>
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleSelectd">City</label>
                                    <input type="text" name="ship_city" class="form-control form-control-sm" placeholder="City"/>
                                    @error('ship_city')
                                        <div class="alert alert-danger">
                                            <span>{{$message}}</span>
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleSelectd">State</label>
                                    <input type="text" name="ship_state" class="form-control form-control-sm" placeholder="State"/>
                                    @error('ship_state')
                                        <div class="alert alert-danger">
                                            <span>{{$message}}</span>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label>Address</label>
                                <textarea class="form-control" name="ship_address" rows="3" name="address" placeholder="Address"></textarea>
                                @error('ship_address')
                                    <div class="alert alert-danger">
                                        <span>{{$message}}</span>
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleSelectd">Country</label>
                                    <select class="form-control" name="ship_country" id="shipp_country">
                                        <option value="">-- Choose Country --</option>
                                        @foreach ($all_country as $country)
                                            <option value="{{$country->country_name}}">{{$country->country_name}}</option>
                                        @endforeach
                                    </select>
                                    @error('ship_country')
                                        <div class="alert alert-danger">
                                            <span>{{$message}}</span>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>


                    </div>

            </div>
        </div>


        <div class="col-md-6">
            <div class="card card-custom mt-5">
                <div class="card-body">
                    <h3 class="card-title">
                        Receiver
                    </h3>

                </div>


                <!--begin::Form-->

                <div class="card-body">


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleSelectd">Full Name</label>
                                <input type="text" name="receive_name" class="form-control form-control-sm" placeholder="Full Name"/>
                                @error('receive_name')
                                    <div class="alert alert-danger">
                                        <span>{{$message}}</span>
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleSelectd">Company Name</label>
                                <input type="text" name="receive_com_name" class="form-control form-control-sm" placeholder="Company Name"/>
                                @error('receive_com_name')
                                    <div class="alert alert-danger">
                                        <span>{{$message}}</span>
                                    </div>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleSelectd">Mobile</label>
                                <input type="text" name="receive_mobile" class="form-control form-control-sm" placeholder="Mobile"/>
                                @error('receive_mobile')
                                    <div class="alert alert-danger">
                                        <span>{{$message}}</span>
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleSelectd">Email</label>
                                <input type="text" name="receive_email" class="form-control form-control-sm" placeholder="Email"/>
                                @error('receive_email')
                                    <div class="alert alert-danger">
                                        <span>{{$message}}</span>
                                    </div>
                                @enderror
                            </div>
                        </div>

                    </div>


                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleSelectd">Zip</label>
                                <input type="text" name="receive_zip" class="form-control form-control-sm" placeholder="Zip"/>
                                @error('receive_zip')
                                    <div class="alert alert-danger">
                                        <span>{{$message}}</span>
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleSelectd">City</label>
                                <input type="text" name="receive_city" class="form-control form-control-sm" placeholder="City"/>
                                @error('receive_city')
                                    <div class="alert alert-danger">
                                        <span>{{$message}}</span>
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleSelectd">State</label>
                                <input type="text" name="receive_state" class="form-control form-control-sm" placeholder="State"/>
                                @error('receive_state')
                                    <div class="alert alert-danger">
                                        <span>{{$message}}</span>
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label>Address</label>
                            <textarea class="form-control" name="receive_address" rows="3" name="address" placeholder="Address"></textarea>
                            @error('receive_address')
                                <div class="alert alert-danger">
                                    <span>{{$message}}</span>
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleSelectd">Country</label>
                                <select class="form-control" name="receive_country" id="receive_country">
                                    <option value="">-- Choose Country --</option>
                                    @foreach ($all_country as $country)
                                        <option value="{{$country->country_name}}">{{$country->country_name}}</option>
                                    @endforeach
                                </select>
                                @error('receive_country')
                                    <div class="alert alert-danger">
                                        <span>{{$message}}</span>
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
<div class="row">
    <div class="col-md-12">
        <div class="card-footer mt-5">
            <button type="submit" class="btn btn-success mr-2">Next Step</button>
            <button type="reset" class="btn btn-secondary border-danger mr-2">Cancel</button>
        </div>
        </form>
        <!--end::Form-->
    </div>
</div>


    <!--end::Row-->

@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script>

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
<script>
    jQuery(document).ready(function(){
       jQuery('#ajaxSubmit').click(function(e){
          e.preventDefault();
          $.ajaxSetup({
             headers: {
                 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
             }
         });
          jQuery.ajax({
             url: "{{ url('/grocery/post') }}",
             method: 'post',
             data: {
                name: jQuery('#name').val(),
                type: jQuery('#type').val(),
                price: jQuery('#price').val()
             },
             success: function(result){
                console.log(result);
             }});
          });
       });
</script>

<script>
    @if(Session::has('success'))
        toastr.success("{{ Session::get('success') }}");
    @endif
</script>

{{-- <script>
    //autocomplete script
 $(document).on('focus','.autocomplete_txt',function(){
   type = $(this).data('type');
   
   if(type =='from' )autoType='from'; 
   if(type =='to' )autoType='to'; 
   if(type =='service_type' )autoType='service_type'; 
   if(type =='weight_kg' )autoType='weight_kg'; 
   if(type =='price' )autoType='price'; 
   
    $(this).autocomplete({
        minLength: 0,
        source: function( request, response ) {
             $.ajax({
                 url: "{{ route('searchajax') }}",
                 dataType: "json",
                 data: {
                     term : request.term,
                     type : type,
                 },
                 success: function(data) {
                     var array = $.map(data, function (item) {
                        return {
                            label: item[autoType],
                            value: item[autoType],
                            data : item
                        }
                    });
                     response(array)
                 }
             });
        },
        select: function( event, ui ) {
            var data = ui.item.data;           
            $('#from').val(data.from);
            $('#to').val(data.to);
            $('#service_type').val(data.service_type);
            $('#weight_kg').val(data.weight_kg);
            $('#price').val(data.price);
        }
    });    
 });
</script> --}}




@endsection
