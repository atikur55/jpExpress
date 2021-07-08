@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
@endsection
@section('subheader')

@endsection
@section('content')
    
    <div class="container">
        <!--begin::Advance Table Widget 10-->
        <div class="card card-custom gutter-b">
            <!--begin::Header-->
            <div class="card-header border-0 py-5">
                <h3 class="card-title align-items-start flex-column">
                  
                    <span class="card-label font-weight-bolder text-dark">Order List</span>
                   
                </h3>
                <div class="card-toolbar">
                    {{-- <a href="countrys" class="btn btn-info font-weight-bolder font-size-sm">Create New Country</a> --}}
                </div>
            </div>
            <!--end::Header-->
        <div class="card-body py-0">
            <!--begin::Table-->
            {{-- <div class="table-responsive"> --}}
                <table id="usertable" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>SL NO.</th>
                        <th>ORDER ID</th>
                        <th>TITLE</th>
                        <th>DESCRIPTION</th>
                        <th>DELIVERY DATE</th>
                        <th>ACTION</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                    @foreach($tracks as $track)
                        <tr>
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$i}}</span>                            
                            </td>
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$track->track_id}}</span>                            
                            </td>
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$track->title}}</span>                            
                            </td>
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$track->description}}</span>                            
                            </td>
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$track->delivery_date}}</span>                            
                            </td>
                            <td>
                                <a href="#editModal{{$track->id}}" data-toggle="modal" class="btn btn-warning"  ><i class="flaticon2-edit icon-lg"></i> Update
                                </a>
                                <a href="#deleteModal{{$track->id}}" data-toggle="modal" class="btn btn-danger"><i class="flaticon2-rubbish-bin-delete-button icon-lg"></i> Delete
                               </a>
                            </td>
                        </tr>
                        
                        @php
                            $i++;
                        @endphp
                        <!-- Delete -->
                        <div class="modal fade" id="deleteModal{{$track->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
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
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <a href="{{url('delete_track')}}/{{$track->id}}" class="btn btn-danger">Delete</a>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Edit -->
                        <div class="modal fade " id="editModal{{$track->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header state modal-primary">

                                        <h5 class="modal-title" id="exampleModalLongTitle">{{$track->track_id}}</h5>
                                        <button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fas fa-times"></i></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" action="{{url('update_track')}}"  method="post" enctype="multipart/form-data" id="kt_form_1" name="kt_form_1">
                                            @csrf
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="name" class=" control-label">Track ID</label>
                                                        <br>
                                                    <input type="text" class="form-control update" id="track_id" name="track_id" value="{{$track->track_id}}">
                                                    </div>
                                                <div class="col-md-12">
                                                <label for="name" class=" control-label">Track Title</label>
                                                    <br>
                                                <input type="text" class="form-control update" id="title" name="title" value="{{$track->title}}">
                                                <input type="hidden" class="form-control update" id="id" name="id" value="{{$track->id}}">
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="email" class=" control-label">Description</label>
                                                    <br>
                                                <textarea name="description" class="form-control" id="" cols="6" rows="4">{{$track->description}}"</textarea>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="email" class=" control-label">Estimated Delivery Date</label>
                                                    <br>
                                                <input type="date" name="delivery_date" class="form-control" value="{{$track->delivery_date}}">
                                                </div>
                                            </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success" >Add Track</button>
                                            <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
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


                    <!-- Button trigger modal-->


                    <!-- Modal-->
                    <div class="modal fade" id="exampleModalCenter" data-backdrop="static" tabindex="-1"
                         role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <form class="form">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Full Name:</label>
                                            <input type="email" class="form-control" placeholder="Enter full name"/>
                                            <span class="form-text text-muted">Please enter your full name</span>
                                        </div>

                                        <div class="separator separator-dashed my-5"></div>

                                        <div class="form-group">
                                            <label>Email address:</label>
                                            <input type="email" class="form-control" placeholder="Enter email"/>
                                            <span
                                                class="form-text text-muted">We'll never share your email with anyone else</span>
                                        </div>

                                        <div class="separator separator-dashed my-5"></div>

                                        <div class="form-group">
                                            <label>Subscription</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span
                                                        class="input-group-text">$</span></div>
                                                <input type="text" class="form-control" placeholder="99.9"/>
                                            </div>
                                        </div>

                                        <div class="separator separator-dashed my-5"></div>

                                        <div class="form-group">
                                            <label>Communication:</label>
                                            <div class="checkbox-list">
                                                <label class="checkbox">
                                                    <input type="checkbox"/>
                                                    <span></span>
                                                    Email
                                                </label>
                                                <label class="checkbox">
                                                    <input type="checkbox"/>
                                                    <span></span>
                                                    SMS
                                                </label>
                                                <label class="checkbox">
                                                    <input type="checkbox"/>
                                                    <span></span>
                                                    Phone
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light-primary font-weight-bold"
                                            data-dismiss="modal">Close
                                    </button>
                                    <button type="button" class="btn btn-primary font-weight-bold">Save changes
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>


                    </tbody>

                </table>
            {{-- </div> --}}
            <!--end::Table-->
        </div>
    </div>
    </div>



@endsection
@section('js')
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script>
<script src="admintemplate/assets/plugins/custom/datatables/datatables.bundle.js"></script>
<script src="admintemplate/assets/js/pages/crud/datatables/basic/paginations.js"></script>
<script>
    $(function () {
            $("#usertable").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
    });
</script>
<script>
    @if(Session::has('success'))
  		toastr.success("{{ Session::get('success') }}");
    @endif
</script>
<script>
    @if(Session::has('delete'))
  		toastr.success("{{ Session::get('delete') }}");
    @endif
</script>
<script>
    @if(Session::has('update'))
  		toastr.success("{{ Session::get('update') }}");
    @endif
</script>

@endsection
