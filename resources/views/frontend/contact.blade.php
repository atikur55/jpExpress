@extends('layouts.frontend')
@section('css')
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
<style>
    .about_jpex_section {
      /* background-color: #f0f0f0; */
    }
    .about_jpex svg {
      height: 100px;
      width: 100px;
      color: ;
    }
    .aboutpage_info svg {
      height: 100px;
      width: 100px;
    }
    .aboutpage_info {
      text-align: center;
      transition: 0.4s;
    }
    .aboutpage_info:hover {
      /* background-color: white; */
      /* color: #0cc9e8; */
      border-radius: 50px 0px 50px 0px;
      box-shadow: 0px 4px 10px #808080cf;
      transform: translateY(-10px);
    }
    .jprocess {
      transition: 0.2s;
    }
    .process_icon {
      position: relative;
    }
    .process_icon svg {
      height: 100px;
      width: 100px;
    }
    .process_arrow {
      position: absolute;
      right: 20px;
      top: 0;
    }
    .process_arrow svg {
      height: 150px;
      width: 50px;
    }
    .jprocess:hover {
      transform: translateY(-10px);
    }
    .contact{
    color: red;
    font-family: revert;
    font-size: 40px;
    }
  </style>
@endsection
@section('content')
<section class="about_jpex_section pt-5 pb-5">
    <div class="container">
      <h3 class="contact">Contact Us</h3>
      <div class="row">
        <div class="col-md-6">

              <iframe class="mt-4"
              style="border:0; width: 100%; height: 350px;"
              src="https://maps.google.com/maps?q=jp%20express&t=&z=13&ie=UTF8&iwloc=&output=embed"
              frameborder="0"
              allowfullscreen>
              </iframe>

        </div>
        <div class="col-md-6">
          @if(session('success'))
          <div class="alert alert-success">
            <span>{{session('success')}}</span>
          </div>
          @endif
          <form action="{{url('message_post')}}" method="POST">
            @csrf
            <div class="form-group mb-3">
              <label for="exampleFormControlInput1" class="form-label">Your Name</label>
              <input type="text" name="name" placeholder="Name" class="form-control">
            </div>
            <div class="form-group mb-3">
              <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
              <input type="text" name="phone" placeholder="Phone Number" class="form-control">
            </div>
            <div class="form-group mb-3">
              <label for="exampleFormControlInput1" class="form-label">Message</label>
              <textarea name="message" id="" cols="3" rows="4" class="form-control" placeholder="Type Your Message"></textarea>
            </div>
            <div class="form-group mb-3">
              <button class="btn btn-primary" type="submit">Send</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</section>

@endsection
@section('js')

<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script>
<script>
    @if(Session::has('success'))
        toastr.success("{{ Session::get('success') }}");
    @endif
</script>
<script>
    @if(Session::has('error'))
        toastr.error("{{ Session::get('error') }}");
    @endif
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
   
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>

@endsection