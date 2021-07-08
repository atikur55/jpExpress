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
                        {{-- <th>SL NO.</th> --}}
                        <th>USER</th>
                        <th>ORDER ID</th>
                        <th>Status</th>
                        {{-- <th>FROM</th>
                        <th>TO</th>
                        <th>SERVICE TYPE</th> --}}
                        {{-- <th>OBJECT TYPE</th> --}}
                        <th>Action</th>
                        <th>TRACK</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                    @foreach($orders as $order)
                        <tr style="{{$order->notification == 0 ? 'background: antiquewhite;':'background: white;'}}">
                            {{-- <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$i}}</span>                            
                            </td> --}}

                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$order->connect_user->name??''}}</span>                            
                            </td>
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$order->track_id}}</span>                            
                            </td>
                            <td>
                                @if ($order->status == 0)
                                    <span class="label label-inline label-light-danger font-weight-bold">
                                        Pending
                                    </span>
                                @elseif($order->status == 1)
                                    <span class="label label-inline label-light-primary font-weight-bold">
                                        Processing
                                    </span>
                                @elseif($order->status == 2)
                                    <span class="label label-inline label-light-warning font-weight-bold">
                                        On Going
                                    </span>
                                @elseif($order->status == 3)
                                    <span class="label label-inline label-light-success font-weight-bold">
                                        Completed
                                    </span>
                                @else 
                                    <span class="label label-inline label-light-danger font-weight-bold">
                                        Cancel
                                    </span>
                                @endif                            
                            </td>
                            {{-- <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$order->from}}</span>
                            </td>
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$order->to}}</span>
                            </td>
                            <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$order->service_type}}</span>
                            </td> --}}
                            {{-- <td>
                                <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$order->object_type}}</span>
                            </td> --}}
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Action
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        
                                        <a href="{{url('view-order')}}/{{$order->id}}" class="btn btn-primary dropdown-item"><i style="padding-top: 10px;" class="flaticon-eye icon-lg"></i> View
                                        </a>
                                        <a href="#editModal{{$order->id}}" data-toggle="modal" class="btn btn-warning dropdown-item"><i style="padding-top: 10px;" class="flaticon2-edit icon-lg"></i> Delivery Status
                                        </a>
                                        <a href="#deleteModal{{$order->id}}" data-toggle="modal" class="btn btn-danger dropdown-item"><i style="padding-top: 10px;" class="flaticon2-rubbish-bin-delete-button icon-lg"></i> Download
                                        </a>
                                    </div>
                                </div>
                                {{-- <a href="{{url('view-order')}}/{{$order->id}}" class="btn btn-dark"  ><i class="flaticon-eye icon-lg"></i> View
                                </a>
                                <a href="#editModal{{$order->id}}" data-toggle="modal" class="btn btn-warning"  ><i class="flaticon2-edit icon-lg"></i> Delivery Status
                                </a>
                                <a href="#deleteModal{{$order->id}}" data-toggle="modal" class="btn btn-danger"><i class="flaticon2-rubbish-bin-delete-button icon-lg"></i> Download
                               </a> --}}

                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Track
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        
                                        <a href="#trackModal{{$order->id}}" data-toggle="modal" class="btn btn-success"><i class="flaticon-placeholder-1 icon-lg"></i> Track
                                        </a>
                                        <a href="{{ url('invoice') }}/{{$order->id}}" class="btn btn-primary"><i class="flaticon2-paper icon-lg"></i> Invoice
                                        </a>
                                    </div>
                                </div>
                                {{-- <a href="#trackModal{{$order->id}}" data-toggle="modal" class="btn btn-success"><i class="flaticon-placeholder-1 icon-lg"></i> Track
                                </a> --}}
                            </td>

                        </tr>
                        
                        @php
                            $i++;
                        @endphp
                        <!-- Update -->
                        <div class="modal fade " id="editModal{{$order->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header state modal-primary">

                                        <h5 class="modal-title" id="exampleModalLongTitle">{{$order->track_id}}<br><p>Update order</p></h5>
                                        
                                        <button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fas fa-times"></i></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" action="{{url('update-order')}}"  method="post" enctype="multipart/form-data" id="kt_form_1" name="kt_form_1">
                                            @csrf
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="name" class=" control-label">Delivery Status</label>
                                                        <br>
                                                    <input type="hidden" name="id" value="{{$order->id}}">
                                                    <select name="status" class="form-control" id="">
                                                        <option value="0" {{$order->status == 0 ? 'selected':' '}}>Pending</option>
                                                        <option value="1" {{$order->status == 1 ? 'selected':' '}}>Processing</option>
                                                        <option value="2" {{$order->status == 2 ? 'selected':' '}}>On GOing</option>
                                                        <option value="3" {{$order->status == 3 ? 'selected':' '}}>Completed</option>
                                                        <option value="4" {{$order->status == 4 ? 'selected':' '}}>Cancel</option>
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
                        <!-- Track -->
                        <div class="modal fade " id="trackModal{{$order->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header state modal-primary">

                                        <h5 class="modal-title" id="exampleModalLongTitle">{{$order->track_id}}</h5>
                                        <button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fas fa-times"></i></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" action="{{url('track_add')}}"  method="post" enctype="multipart/form-data" id="kt_form_1" name="kt_form_1">
                                            @csrf
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label for="name" class=" control-label">Track ID</label>
                                                        <br>
                                                    <input type="text" class="form-control update" id="track_id" name="track_id" value="{{$order->track_id}}">
                                                    </div>
                                                <div class="col-md-12">
                                                <label for="name" class=" control-label">Track Title</label>
                                                    <br>
                                                <input type="text" class="form-control update" id="title" name="title" placeholder="Title">
                                                <input type="hidden" class="form-control update" id="id" name="id" value="{{$order->id}}">
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="email" class=" control-label">Description</label>
                                                    <br>
                                                <textarea name="description" class="form-control" cols="6" rows="4" placeholder="Description"></textarea>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="email" class=" control-label">Estimated Delivery Date</label>
                                                    <br>
                                                <input type="date" name="delivery_date" class="form-control">
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success" >Add Track</button>
                                            <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
                                        <div class="modal-footer">
                                            {{-- <button type="submit" class="btn btn-success" >Add Track</button>
                                            <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button> --}}
                                            {{-- <table>
                                                <tr>
                                                    <th>Title</th>
                                                    <th>Description</th>
                                                </tr>
                                                @php
                                                   $order_list = App\Track::where('track_id',$order->track_id)->get(); 
                                                @endphp
                                                @foreach($order_list as $list)
                                                <tr>
                                                    <td>{{$list->title}}</td>
                                                    <td>{{$list->description}}</td>
                                                </tr>
                                                @endforeach
                                            </table> --}}
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
    @if(Session::has('update'))
  		toastr.success("{{ Session::get('update') }}");
    @endif
</script>


@endsection