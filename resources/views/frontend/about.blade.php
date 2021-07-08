@extends('layouts.frontend')
@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
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
  </style>
@endsection
@section('content')
<section class="about_jpex_section pt-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="about_jpex">
            <h2>About us</h2>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              class="bi bi-truck"
              viewBox="0 0 16 16"
            >
              <path
                d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"
              />
            </svg>
            <div class="jpinfo mt-3 mb-3">
              <div class="row">
                <div class="col-6">
                  <p>
                    A nationwide courier with a local feel, we provide
                    flexible, fast deliveries tailored to your specific
                    business needs. As an extension of your business, it’s
                    important that we understand our customers’ issues,
                    strategies and priorities.
                  </p>
                </div>
                <div class="col-6">
                  <p>
                    From publishing, to healthcare, manufacturing to tech, we
                    support businesses across a whole range of sectors,
                    providing you with opportunities for streamlining,
                    improvement and growth.
                  </p>
                </div>
              </div>
            </div>
            <a href="#" class="btn btn-outline-dark">Read More</a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-6">
              <div class="aboutpage_info pt-3 pb-2 mb-4">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-archive-fill"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"
                  />
                </svg>
                <h3>25</h3>
                <p>Team Leaders</p>
              </div>
            </div>
            <div class="col-6">
              <div class="aboutpage_info pt-3 pb-2 mb-4">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-archive-fill"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"
                  />
                </svg>
                <h3>25</h3>
                <p>Team Leaders</p>
              </div>
            </div>
            <div class="col-6">
              <div class="aboutpage_info pt-3 pb-2 mb-4">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-archive-fill"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"
                  />
                </svg>
                <h3>25</h3>
                <p>Team Leaders</p>
              </div>
            </div>
            <div class="col-6">
              <div class="aboutpage_info pt-3 pb-2 mb-4">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-archive-fill"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"
                  />
                </svg>
                <h3>25</h3>
                <p>Team Leaders</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="about_jpexteam_section pt-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-4">
          <h2>Our Team</h2>
          <p>
            Ensuring we’re at hand to make crucial deliveries for thousands of
            organisations and individuals around the world is no mean feat. It
            takes a team of passionate and dedicated people, and at Sonar
            Courier we’re lucky to have exactly that.
            <br>
            <br>
            Whether it’s operations,
            fleet management, technical support, data analysis, we have people
            with the right knowledge in the right place that continue to
            embody our four core values and deliver exceptional customer
            service each and every day.
          </p>
        </div>
        <div class="col-md-6 mb-4">
          <img
            class="w-100"
            src="https://sonarcourier.com/wp-content/uploads/2020/11/Our-people.jpg"
            alt=""
          />
        </div>
        <div class="col-md-6 mb-4">
          <img
            class="w-100"
            src="https://sonarcourier.com/wp-content/uploads/2020/11/Fleet-and-couriers_Dhaka.jpg"
            alt=""
          />
        </div>
        <div class="col-md-6 mb-4">
          <h2>Our Team</h2>
          <p>
            Whatever you need to be collected or delivered, we have the right
            vehicle to suit your needs in our flexible and versatile fleet.
            From pushbikes (the largest fleet in Dhaka), to motorbikes, small
            and large vans, we have the largest same day courier fleet in
            Bangladesh.
            <br>
            <br>
            We source couriers carefully and review their
            experience, background, driving license, insurances and vehicle.
            Courier are issued with ID badges to demonstrate when they are
            providing service to Sonar Courier and provideSonar Courier
            customers with peace of mind
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="about_jpexprocess_section pt-5 pb-5">
    <div class="container">
      <div class="row">
        <h2>Our Process</h2>
        <div class="col-3">
          <div class="jprocess pt-3 pb-3">
            <div class="process_icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="currentColor"
                class="bi bi-laptop"
                viewBox="0 0 16 16"
              >
                <path
                  d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"
                />
              </svg>
              <div class="process_arrow">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-arrow-right-circle-fill"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"
                  />
                </svg>
              </div>
            </div>
            <p>Book Service (Online/Call/Email)</p>
          </div>
        </div>
        <div class="col-3">
          <div class="jprocess pt-3 pb-3">
            <div class="process_icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                class="bi bi-truck"
                viewBox="0 0 16 16"
              >
                <path
                  d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"
                />
              </svg>
              <div class="process_arrow">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-arrow-right-circle-fill"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"
                  />
                </svg>
              </div>
            </div>
            <p>Book Service (Online/Call/Email)</p>
          </div>
        </div>
        <div class="col-3">
          <div class="jprocess pt-3 pb-3">
            <div class="process_icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="currentColor"
                class="bi bi-house"
                viewBox="0 0 16 16"
              >
                <path
                  fill-rule="evenodd"
                  d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"
                />
                <path
                  fill-rule="evenodd"
                  d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"
                />
              </svg>
              <div class="process_arrow">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-arrow-right-circle-fill"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"
                  />
                </svg>
              </div>
            </div>
            <p>Book Service (Online/Call/Email)</p>
          </div>
        </div>
        <div class="col-3">
          <div class="jprocess pt-3 pb-3">
            <div class="process_icon">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="currentColor"
                class="bi bi-person"
                viewBox="0 0 16 16"
              >
                <path
                  d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"
                />
              </svg>
            </div>
            <p>Book Service (Online/Call/Email)</p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script>
  $('#width, #height, #length').keyup(function(){
  var width = parseFloat($('#width').val());
  var height = parseFloat($('#height').val());
  var length = parseFloat($('#length').val());
  var total = (width * height * length)/1000;
  var fixed_value = total.toFixed(1);
  $('#weight_kg').val(fixed_value);
});
</script>
<script type="text/javascript">	
	$(document).ready(function() { 
		$("#shipp_country").select2({
			placeholder:"search here",
			allowClear:true,
		}); 
	});
</script>

<script type="text/javascript">	
	$(document).ready(function() { 
		$("#receive_country").select2({
			placeholder:"search here",
			allowClear:true,
		}); 
	});
</script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
   
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>

@endsection