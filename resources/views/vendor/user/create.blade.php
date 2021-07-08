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
            <div class="card card-custom">
                <div class="card-body">
                    <h3 class="card-title">
                        Add New Customer
                    </h3>
                </div>


                <!--begin::Form-->
                <form class="form" action="{{url('vendor_post_customer')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleSelectd">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Name">
                                    @error('name')
                                     <div class="alert alert-danger">
                                         <span>{{$message}}</span>
                                     </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleSelectd">Phone</label>
                                    <input type="text" name="phone" class="form-control" placeholder="Phone Number">
                                    @error('phone')
                                     <div class="alert alert-danger">
                                         <span>{{$message}}</span>
                                     </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleSelectd">Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="Email">
                                    @error('email')
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
                                    <label for="exampleSelectd">Company</label>
                                    <input type="text" name="company" class="form-control" placeholder="Company">
                                    @error('company')
                                     <div class="alert alert-danger">
                                         <span>{{$message}}</span>
                                     </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleSelectd">Address</label>
                                    <textarea name="address" class="form-control" id="" cols="4" rows="2" placeholder="Address"></textarea>
                                    @error('address')
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
                                    <label>Type</label>
                                    <select name="user_type" id="" class="form-control">
                                        <option value="">-- Choose --</option>
                                        <option value="traveller">Traveller</option>
                                        <option value="user">User</option>
                                    </select>
                                    @error('user_type')
                                     <div class="alert alert-danger">
                                         <span>{{$message}}</span>
                                     </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Photo</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                    @error('password')
                                     <div class="alert alert-danger">
                                         <span>{{$message}}</span>
                                     </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                                </div>
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
    @if(Session::has('customer'))
        toastr.success("{{ Session::get('customer') }}");
    @endif
</script>
<script>
    @if(Session::has('pass_error'))
        toastr.error("{{ Session::get('pass_error') }}");
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
