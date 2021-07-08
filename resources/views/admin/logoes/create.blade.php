@extends('layouts.master')
@section('css')

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

    <link href="admintemplate/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endsection
@section('subheader')
    <!--begin::Subheader-->
    
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

                @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

                @endif

                @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
                @endif
                <!--begin::Header-->
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">User Services
                            <span class="d-block text-muted pt-2 font-size-sm"></span></h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Dropdown-->



<!-- Button trigger modal-->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
    Add Logo
</button>


<!-- Modal-->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Your Service Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
              <form method="POST" action="{{route('logoes.store')}}" enctype="multipart/form-data" id="kt_form_1" name="kt_form_1">
                @csrf
               <div class="card-body">

                <div class="form-group">
                 <label>Image <span class="text-danger">*</span></label>
                 <input type="file" name="image" id="image" class="form-control"  />

                </div>


               </div>
               <div class="card-footer">
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
               </div>
              </form>
            </div>

        </div>
    </div>
</div>

<!--end::Button-->
</div>
</div>
<!--end::Header-->
<!--begin::Body-->
<div class="card-body">
<!--begin: Datatable-->
<table id="usertable" class="table table-bordered table-striped">
<thead>
<tr>
    <th>Id</th>

    <th>Image</th>
    <th>Status</th>
    <th>Action</th>
</tr>
</thead>
<tbody>
@foreach($logoes as $logo)


    <tr>
        <td>{{$loop->index+1}}</td>

        <td>  <img src="{{asset('/logoes/'.$logo->image)}}" style="width: 60px"></td>

        <td>
       <input type="checkbox" {{$logo->status == 'active' ? 'checked' :''}} id="logoStatus" data-id="{{$logo->id}}" data-toggle="toggle"  data-on="Active" data-off="Inactive" data-size="small" data-offstyle="danger">
        </td>
        <td>   <a href="#editModal{{$logo->id}}" data-toggle="modal" class="btn btn-warning"  ><i class="flaticon2-edit icon-lg"></i> Edit</a>

             <a href="#deleteModal{{$logo->id}}" data-toggle="modal" class="btn btn-danger"><i class="flaticon2-rubbish-bin-delete-button icon-lg"></i> Delete</a>

             <div class="modal fade" id="deleteModal{{$logo->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header state modal-primary">

                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>

                                          <h5 class="modal-title" id="exampleModalLongTitle">Are you sure you want to delete ?</h5>
                                      </div>
                                      <div class="modal-body">
                                          <form action="{{route('quick_rates.delete',$logo->id) }}"  method="post">
                                              @csrf
                                              <button type="submit" class="btn btn-danger" >Parmanent Delete</button>
                                          </form>

                                      </div>
                                      <div class="modal-footer">

                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <!-- Edit -->

                          <div class="modal fade " id="editModal{{$logo->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-scrollable" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header state modal-primary">

                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                          <h5 class="modal-title" id="exampleModalLongTitle">Are you sure you want to Edit ?</h5>
                                      </div>
                                      <div class="modal-body">
                                          <form class="form-horizontal" action="{{route('quick_rates.update',$logo->id) }}"  method="post" enctype="multipart/form-data"  >
                                              @csrf

                                              <div class="form-group">

                                                  <div class="col-md-12">
                                                    <br>

                                                    <div class="col-md-6">
                                                       <label for="oldimage"> old Image</label><br>
                                                         <img src="{{ asset('quick_rates/'.$logo->image)}}" width="100"><br><br>

                                                   </div>
                                                   <div class="col-md-6">
                                                     <label for="image"> new Image(optional)</label>
                                                     <br>
                                                 <input type="file" class="form-control update" name="image" id="image" >



                                                   </div>
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
        </td>


    </tr>
@endforeach




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
  <script src="admintemplate/assets/js/pages/crud/forms/validation/form-controls.js"></script>
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

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




@endsection
