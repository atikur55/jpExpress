@extends('layouts.master')
@section('css')

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

    <link href="admintemplate/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
@endsection
@section('subheader')
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
      
    </div>
    <!--end::Subheader-->
@endsection
@section('content')
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <!--begin::Card-->
            <div class="card card-custom">
                <!--begin::Header-->
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">Booking List
                        <span class="d-block text-muted pt-2 font-size-sm">Booking management </span></h3>
                    </div>
                    <div class="card-toolbar">
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body">
                    <div class="table-responsive">
                                            <!--begin: Datatable-->
                    <table id="usertable" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Track_ID</th>
                            <th>FROM</th>
                            <th>TO</th>
                            <th>SERVICE TYPE</th>
                            <th>STATUS</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                        @foreach($orders as $order)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$order->track_id}}</td>
                                <td>{{$order->from}}</td>
                                <td>{{$order->to}}</td>
                                <td>{{$order->service_type}}</td>
                                <td>
                                    @if($order->status == 0)
                                    <span style="color: #fff;" class="badge bg-primary">Pending</span>  
                                    @elseif($order->status == 1)
                                    <span style="color: #fff;"  class="badge bg-success">Processing</span>
                                    @elseif($order->status  == 2)
                                    <span style="color: #fff;"  class="badge bg-dark">On Going</span>
                                    @elseif($order->status  == 3)
                                    <span style="color: #fff;"  class="badge bg-dark">Completed</span>
                                    @else
                                    <span style="color: #fff;"  class="badge bg-danger">Cancel</span>
                                    @endif
                                </td>
                                <td>
                                    <a style="padding-left: 10px;" href="{{url('view-order')}}/{{$order->id}}"><i style="color: black;" class="
                                        flaticon-eye icon-2x"></i></a>
                                    <a href="{{url('user_order_report')}}/{{$order->id}}"><i style="color: black;" class="flaticon2-download icon-2x"></i></a>
                                    
                                </td>

                            </tr>
                            @php
                                $i++;
                            @endphp
                        @endforeach

                        </tbody>

                    </table>
                    <!--end: Datatable-->
                    </div>
                </div>
                <!--end::Body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->

    

@endsection
@section('js')

    <!--begin::Page Vendors(used by this page)-->
    <script src="admintemplate/assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="admintemplate/assets/js/pages/crud/datatables/basic/paginations.js"></script>
    <!--end::Page Scripts-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script>

    <script>
        $(function () {
            $("#usertable").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });



        function submitform() {
            document.getElementById("isban").submit();
            alert("your form submitted");
        }


    </script>
    <script>
        @if(Session::has('success'))
              toastr.success("{{ Session::get('success') }}");
        @endif
    </script>
    <script>
        @if(Session::has('update'))
              toastr.success("{{ Session::get('update') }}");
        @endif
    </script>



@endsection
