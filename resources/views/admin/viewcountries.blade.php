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
                    @php
                        $total_country = App\Country::count();
                    @endphp
                    <span class="card-label font-weight-bolder text-dark">Country List</span>
                    <span class="text-muted mt-3 font-weight-bold font-size-sm">More than {{$total_country}} new Country</span>
                </h3>
                <div class="card-toolbar">
                    <a href="countrys" class="btn btn-info font-weight-bolder font-size-sm">Create New Country</a>
                </div>
            </div>
            <!--end::Header-->
        <div class="card-body py-0">
            <!--begin::Table-->
            <div class="table-responsive">
                <table id="usertable" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>SL NO.</th>
                        <th>Country</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                    @foreach($country as $countrys)
                        <tr>
                            <td>{{$i}}</td>
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$countrys->country_name}}</span>
                                <span class="text-muted font-weight-bold">Code: {{$countrys->country_name}}</span>
                            </td>
                            <td>
                                <a href="{{url('approve_country')}}/{{$countrys->id}}">
                                    @if($countrys->status==1)
                                    <span><i style="color: green;" class="fas fa-toggle-on icon-2x"></i></span>
                                    @else
                                    <span><i style="color: red;" class="fas fa-toggle-off icon-2x"></i></span>
                                    @endif
                                </a>  
                            </td>
                            <td>
                                <a href="#editModal{{$countrys->id}}" data-toggle="modal" class="btn btn-warning"  ><i class="flaticon2-edit icon-lg"></i> Edit
                                </a>
                                <a href="#deleteModal{{$countrys->id}}" data-toggle="modal" class="btn btn-danger"><i class="flaticon2-rubbish-bin-delete-button icon-lg"></i> Delete
                               </a>

                            </td>
                            <!-- Delete -->
                            <div class="modal fade" id="deleteModal{{$countrys->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header state modal-primary">
  
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
  
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i></button>
                                        </div>
                                        <div class="modal-body">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Are you sure you want to delete ?</h5>
                                            {{-- <form action=""  method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-danger" >Parmanent Delete</button>
                                            </form> --}}
                                            {{-- {{route('sliders.delete',$slider->id) }} --}}
                                        </div>
                                        <div class="modal-footer">
                                            <a href="{{url('delete_country')}}/{{$countrys->id}}" class="btn btn-danger">Delete</a>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Edit -->
                            <div class="modal fade " id="editModal{{$countrys->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header state modal-primary">
  
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <h5 class="modal-title" id="exampleModalLongTitle">Are you sure you want to Edit ?</h5>
                                        </div>
                                        {{-- {{route('sliders.update',$slider->id) }} --}}
                                        <div class="modal-body">
                                            <form class="form-horizontal" action="{{url('update_country')}}"  method="post" enctype="multipart/form-data" id="kt_form_1" name="kt_form_1" >
                                                @csrf
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label for="name" class=" control-label">Country Name</label>
                                                         <br>
                                                       <input type="text" class="form-control update" id="country_name" name="country_name" value="{{$countrys->country_name}}">
                                                       <input type="hidden" class="form-control update" id="id" name="id" value="{{$countrys->id}}">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="status" class="control-label">Country Status</label>
                                                         <br>
                                                        <select name="status" class="form-control">
                                                            <option value="1" {{$countrys->status == 1 ? 'selected':''}}>Active</option>
                                                            <option value="0" {{$countrys->status == 0 ? 'selected':''}}>Inactive</option>
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

                        </tr>
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
            </div>
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
    @if(Session::has('update'))
  		toastr.success("{{ Session::get('update') }}");
    @endif
</script>


@endsection
