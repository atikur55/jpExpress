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
                        <h3 class="card-label">Message List
                            <span class="d-block text-muted pt-2 font-size-sm">Customer Message </span></h3>
                    </div>
                    <div class="card-toolbar">
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body">
                    <!--begin: Datatable-->
                    <table id="usertable" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>SL No.</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Message</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                        @foreach($messages as $message)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$message->name}}</td>
                                <td>{{$message->phone}}</td>
                                <td>{{$message->message}}</td>
                                <td>
                                    <a href="#deleteModal{{$message->id}}" data-toggle="modal" class="btn btn-danger"><i class="flaticon2-rubbish-bin-delete-button icon-lg"></i> Delete
                                    </a>
                                </td>
                                <!-- Delete -->
                                <div class="modal fade" id="deleteModal{{$message->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header state modal-primary">
    
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
    
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i></button>
                                            </div>
                                            <div class="modal-body">
                                                <h5 class="modal-title" class="text-center" id="exampleModalLongTitle">Are you sure you want to delete ?</h5>
                                                {{-- <form action=""  method="post">
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger" >Parmanent Delete</button>
                                                </form> --}}
                                                {{-- {{route('sliders.delete',$slider->id) }} --}}
                                            </div>
                                            <div class="modal-footer">
                                                <a href="{{url('delete_message')}}/{{$message->id}}" class="btn btn-danger">Delete</a>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </tr>
                            @php
                                $i++;
                            @endphp
                        @endforeach


     


   

                        </tbody>

                    </table>
                    <!--end: Datatable-->
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


        {{--$('.toggle-class').on('change', function () {--}}
        {{--    var isban = $(this).prop('checked') === true ? 1 : 0;--}}
        {{--    var user_id = $(this).data('id');--}}

        {{--    $.ajax({--}}
        {{--        type: "GET",--}}
        {{--        dataType: "json",--}}
        {{--        url: '{{ route('admin.userChangeStatus') }}',--}}
        {{--        data: {'isban': isban, 'user_id': user_id},--}}
        {{--        success: function (data) {--}}
        {{--            console.log(data.success)--}}
        {{--        }--}}
        {{--    });--}}
        {{--});--}}


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
