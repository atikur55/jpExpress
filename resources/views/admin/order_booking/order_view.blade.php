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
                        Order :{{$order_info->track_id}}
                    </h3>
                    <h6 class="card-title">
                        Order Date  :{{$order_info->created_at->format('d-m-Y h:i:s A')}}
                    </h6>
                </div>


                <!--begin::Form-->
                <div class="row">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <b>From : </b>
                                    {{$order_info->from}}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <b>To : </b>
                                    {{$order_info->to}}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <b>Type : </b>
                                    {{$order_info->location}}
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <b>Service Type : </b>
                                    {{$order_info->service_type}}
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <b>Object Type : </b>
                                    {{$order_info->object_type}}
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <b>Width : </b>
                                    {{$order_info->width}}
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <b>Height : </b>
                                    {{$order_info->height}}
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <b>Length : </b>
                                    {{$order_info->length}}
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-md-4">
                                <b>Weight(kg) : </b>
                                {{$order_info->weight}}
                            </div>

                            <div class="col-md-4">
                                <b>Shippment Details : </b>
                                {{$order_info->ship_details}}
                            </div>

                            <div class="col-md-4">
                                <b>Value : </b>
                                {{$order_info->price}}
                            </div>

                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-custom">
                <div class="card-body">
                    <h3 class="card-title">
                        Shipper
                    </h3>

                </div>


                <!--begin::Form-->
                <div class="row">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Shipper Name :</b>
                                {{$order_info->shipper_name}}
                            </div>
                            <div class="col-md-6">
                                <b>Shipper Name :</b>
                                {{$order_info->ship_com_name}}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <b>Shipper Mobile :</b>
                                {{$order_info->ship_mobile}}
                            </div>

                            <div class="col-md-6">
                                <b>Shipper Email :</b>
                                {{$order_info->ship_email}}
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-4">
                                <b>Shipper Zip :</b>
                                {{$order_info->ship_zip}}
                            </div>

                            <div class="col-md-4">
                                <b>Shipper City :</b>
                                {{$order_info->ship_zip}}
                            </div>

                            <div class="col-md-4">
                                <b>Shipper State :</b>
                                {{$order_info->ship_state}}
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-md-6">
                                <b>Shipper Address :</b>
                                {{$order_info->ship_address}}
                            </div>

                            <div class="col-md-6">
                                <b>Shipper Country :</b>
                                {{$order_info->ship_country}}
                            </div>

                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-custom">
                <div class="card-body">
                    <h3 class="card-title">
                        Receiver
                    </h3>

                </div>


                <!--begin::Form-->
                <div class="row">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <b>Receiver Name :</b>
                                {{$order_info->receive_name}}
                            </div>
                            <div class="col-md-6">
                                <b>Receiver Company Name :</b>
                                {{$order_info->receive_com_name}}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <b>Receiver Mobile :</b>
                                {{$order_info->receive_mobile}}
                            </div>

                            <div class="col-md-6">
                                <b>Receiver Email :</b>
                                {{$order_info->receive_email}}
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-4">
                                <b>Receiver Zip :</b>
                                {{$order_info->receive_zip}}
                            </div>

                            <div class="col-md-4">
                                <b>Receiver City :</b>
                                {{$order_info->receive_zip}}
                            </div>

                            <div class="col-md-4">
                                <b>Receiver State :</b>
                                {{$order_info->receive_state}}
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-md-6">
                                <b>Receiver Address :</b>
                                {{$order_info->receive_address}}
                            </div>

                            <div class="col-md-6">
                                <b>Receiver Country :</b>
                                {{$order_info->receive_country}}
                            </div>

                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div> 

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
