@extends('layouts.master')
@section('css')
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
@endsection
@section('subheader')

@endsection
@section('content')

    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <div class="container ">
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
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b example example-compact">
                        <div class="card-header">
                            <h3 class="card-title">Basic Form Layout</h3>

                        </div>
                        <!--begin::Form-->


                            <form class="form" action="{{url('edit_profile_post')}}" method="POST">
                               @csrf
                            <div class="card-body">
                                <div class="box-body">
                                    <div class="form-group">
                                      <label for="exampleInputPassword1">Old Password</label>
                                      <input type="password" class="form-control" id="exampleInputPassword1" name="old_password" placeholder="Old Password">
                                      @error('old_password')
                                      <strong style="color: red;">{{$message}}</strong>
                                      @enderror
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputPassword1">Password</label>
                                      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="New Password">
                                      @error('password')
                                      <strong style="color: red;">{{$message}}</strong>
                                      @enderror
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputPassword1">Confirm Password</label>
                                      <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1" placeholder="New Confirm Password">
                                      @error('password_confirmation')
                                      <strong style="color: red;">{{$message}}</strong>
                                      @enderror
                                    </div>
                                  </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <a href="/countrys"  class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Card-->
                </div>
            </div>
        </div>

    </div>
    <!--end::Entry-->

@endsection
@section('js')
<script src="admintemplate/assets/js/pages/widgets.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script>
<script>
    @if(Session::has('pass_success'))
          toastr.success("{{ Session::get('pass_success') }}");
    @endif
</script>
<script>
    @if(Session::has('pass_error'))
          toastr.error("{{ Session::get('pass_error') }}");
    @endif
</script>


@endsection
