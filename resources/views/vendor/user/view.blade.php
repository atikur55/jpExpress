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
                        <h3 class="card-label">Customer List
                            <span class="d-block text-muted pt-2 font-size-sm">Customer management </span></h3>
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
                            <th>SL NO.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            {{-- <th>Role</th> --}}
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                        @foreach($customers as $user)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phone}}</td>
                                {{-- <td>
                                    @if($user->user_type == 'user')
                                    <span style="color: #fff;" class="badge bg-primary">User</span>  
                                    @elseif($user->user_type == 'vendor')
                                    <span style="color: #fff;"  class="badge bg-success">Vendor</span>
                                    @elseif($user->user_type == 'traveller')
                                    <span style="color: #fff;"  class="badge bg-dark">Traveller</span>
                                    @else
                                    <span style="color: #fff;"  class="badge bg-danger">Admin</span>
                                    @endif
                                </td> --}}
                                {{-- <td>
                                    <a href="{{url('approve_user')}}/{{$user->id}}">
                                        @if($user->isban==0)
                                        <span><i style="color: red;" class="fas fa-toggle-off icon-2x"></i></span>
                                       
                                        @else
                                        <span><i style="color: green;" class="fas fa-toggle-on icon-2x"></i></span>

                                        @endif
                                    </a>
                                    
                                </td> --}}
                                <td>
                                    <a href="#viewModal{{$user->id}}" data-toggle="modal" class="btn btn-dark"  ><i class="flaticon-eye icon-lg"></i> view
                                    </a>
                                    <a href="#editModal{{$user->id}}" data-toggle="modal" class="btn btn-warning"  ><i class="flaticon2-edit icon-lg"></i> Edit
                                    </a>
                                    <a href="#deleteModal{{$user->id}}" data-toggle="modal" class="btn btn-danger"><i class="flaticon2-rubbish-bin-delete-button icon-lg"></i> Delete
                                    </a>
                                </td>
                            </tr>
                             <!-- Delete -->
                             <div class="modal fade" id="deleteModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
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
                                            <a href="{{url('delete_user')}}/{{$user->id}}" class="btn btn-danger">Delete</a>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- View -->
                            <div class="modal fade " id="viewModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header state modal-primary">

                                            {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button> --}}
                                            <h5 class="modal-title" id="exampleModalLongTitle">Customer Information</h5>
                                            <button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fas fa-times"></i></button>
                                        </div>
                                        {{-- {{route('sliders.update',$slider->id) }} --}}
                                        <div class="modal-body">
                                            <form class="form-horizontal" action=""  method="post" enctype="multipart/form-data" id="kt_form_1" name="kt_form_1">
                                                @csrf
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label for="name" class=" control-label">Name</label>
                                                        <br>
                                                    <input type="text" class="form-control update" id="name" name="name" value="{{$user->name}}">
                                                    <input type="hidden" class="form-control update" id="id" name="id" value="{{$user->id}}">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="email" class=" control-label">Email</label>
                                                        <br>
                                                    <input type="text" class="form-control update" id="email" name="email" value="{{$user->email}}">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="phone" class=" control-label">Phone</label>
                                                        <br>
                                                    <input type="text" class="form-control update" id="email" name="phone" value="{{$user->phone}}">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="phone" class=" control-label">Company</label>
                                                        <br>
                                                    <input type="text" class="form-control update" id="email" name="phone" value="{{$user->company}}">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="phone" class=" control-label">Address</label>
                                                        <br>
                                                    <input type="text" class="form-control update" id="email" name="phone" value="{{$user->address}}">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="status" class="control-label">Status</label>
                                                        <br>
                                                        <select name="user_type" class="form-control">
                                                            <option value="user" {{$user->user_type == 'user' ? 'selected':''}}>User</option>
                                                            <option value="traveller" {{$user->user_type == 'traveller' ? 'selected':''}}>Traveller</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="status" class="control-label">Photo</label>
                                                        <br>
                                                        <img src="{{asset('uploads/vendor/customer/')}}/{{$user->image}}" alt="" width="200px;">
                                                    </div>
                                                </div>
                                            {{-- <div class="modal-footer">
                                                <button type="submit" class="btn btn-success" >Update</button>
                                                <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
                                            </div> --}}
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Edit -->
                            <div class="modal fade " id="editModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header state modal-primary">

                                            {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button> --}}
                                            <h5 class="modal-title" id="exampleModalLongTitle">Are you sure you want to Edit ?</h5>
                                            <button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fas fa-times"></i></button>
                                        </div>
                                        {{-- {{route('sliders.update',$slider->id) }} --}}
                                        <div class="modal-body">
                                            <form class="form-horizontal" action="{{url('update_user')}}"  method="post" enctype="multipart/form-data" id="kt_form_1" name="kt_form_1">
                                                @csrf
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label for="name" class=" control-label">Name</label>
                                                        <br>
                                                    <input type="text" class="form-control update" id="name" name="name" value="{{$user->name}}">
                                                    <input type="hidden" class="form-control update" id="id" name="id" value="{{$user->id}}">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="email" class=" control-label">Email</label>
                                                        <br>
                                                    <input type="text" class="form-control update" id="email" name="email" value="{{$user->email}}">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="phone" class=" control-label">Phone</label>
                                                        <br>
                                                    <input type="text" class="form-control update" id="email" name="phone" value="{{$user->phone}}">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="status" class="control-label">Status</label>
                                                        <br>
                                                        <select name="user_type" class="form-control">
                                                            <option value="user" {{$user->user_type == 'user' ? 'selected':''}}>User</option>
                                                            <option value="traveller" {{$user->user_type == 'traveller' ? 'selected':''}}>Traveller</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-success" >Update</button>
                                                <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @php
                                $i++;
                            @endphp
                        @endforeach
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif



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
