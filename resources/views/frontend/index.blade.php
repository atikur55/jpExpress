@extends('layouts.frontend')
@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
 
@endsection
@section('content')
<section class="banner">
    <div class="container-fluid">
      <div id="owl-one" class="owl-carousel owl-theme">
          @foreach ($sliders as $slider)
          <div class="item">
            <div class="slide" style="background-image: url('{{asset('sliders/')}}/{{$slider->image}}')"
            >
              <h2>{{$slider->title}}</h2>
              <p>
                {{$slider->description}}
              </p>
            </div>
          </div>
          @endforeach
      </div>
      </div>
    </div>
</section>
<div class="track">
    <h3>track your shipment</h3>
    {{-- <form class="form-inline" action="post"> --}}
        <div class="form-group radios">
        {{-- <div class="row">
            <div class="col-md-6 col-12">
            <input type="radio" id="mobile-number" name="tracking" value="1"/>
            <label for="mobile-number">mobile number</label>
            <input type="radio" id="tracking-id" name="tracking" value="2"/>
            <label for="tracking-id">tracking id</label>
            </div>
            <div class="col-md-6 col-12">
            <input type="radio" id="order" name="tracking" value="3" />
            <label for="order">order id / ref id</label>
            <input type="radio" id="ltl" name="tracking" value="4" />
            <label for="ltl">ltl shipment (lrn)</label>
            </div>
        </div> --}}
        </div>
        <form action="{{url('parcel_search')}}" method="POST">
          @csrf
        <div class="form-group">
        <div class="row g-0">
          
            <div class="col-md-9 col-sm-12">
            <input type="text" name="parcel_search" class="form-control" id="inputPassword2" placeholder="Enter Your Order ID"/>
            </div>
            <div class="col-md-3 col-sm-12">
            <button type="submit" class="btn">Track</button>
            </div>
          
          @if (session('message'))
              <span>{{session('message')}}</span>
          @endif
        </div>
        </div>
      </form>
    {{-- </form> --}}
</div>
  <section class="rate">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-12">
          <div class="rate-img">
            <img src="{{asset('frontend_assets/img/shipping/shipping-1.jpg')}}" alt="" />
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          <div class="rates-calc">
            <h2>get a quick shipping rate</h2>
            <p>competitive shipping rates designerd for your needs</p>
            <form action="{{url('show_value')}}" method="POST">
  
              @csrf
            <div class="form-group">
              <label class="form-label">From</label>
              <select name="from" class="form-control" id="shipp_country">
                <option value="">-- Choose Country --</option>
                @foreach ($countries as $country)
                  <option value="{{$country->country_name}}">{{$country->country_name}}</option>  
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label class="form-label">To</label>
              <select name="to" class="form-control" id="receive_country">
                <option value="">-- Choose Country --</option>
                @foreach ($countries as $country)
                  <option value="{{$country->country_name}}">{{$country->country_name}}</option>  
                @endforeach
              </select>
            </div>
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <label class="form-label">Type</label>
                  <select class="form-select" >
                    <option value="Domestic">Domestic</option>
                    <option value="International">International</option>
                  </select>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label class="form-label">Type</label>
                  <select class="form-select form-control" name="service_type">
                    <option value="Export">Export Service</option>
                    <option value="Import">Import Service</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-4">
                <div class="form-group">
                  <label class="form-label">Width</label>
                  <input class="form-control" type="text" name="width" id="width"/>
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <label class="form-label">Height</label>
                  <input class="form-control" type="text" name="height" id="height"/>
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <label class="form-label">Length</label>
                  <input class="form-control" type="text" name="length" id="length"/>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-4">
                <div class="form-group">
                  <label class="form-label">Weight</label>
                  <input class="form-control" type="text" name="weight_kg" id="weight_kg"/>
                </div>
              </div>
              <div class="col-8">
                <div class="form-group">
                  <label class="form-label">Object Type</label>
                  <select class="form-select" name="object_type">
                    <option value="Parcel">Parcel</option>
                    <option value="Document">Document</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-3">
                <div class="form-group">
                  <button class="form-control btn chk-rate save-data" type="submit">
                    Check Rates
                  </button>
                </div>
              </div>
              <div class="col-3">
                <div class="form-group">
                  <button class="form-control btn clear-rate" type="button">
                    Clear
                  </button>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  {{-- <input
                    class="form-control"
                    placeholder="Rate"
                    type="text"/> --}}
                    @if (session('price'))
                    <div style="text-align: center">
                        Your Rate : <span class="badge bg-dark text-white">{{session('price')}} TK</span>
                    </div>
                    @endif
                    @if (session('noprice'))
                    <div style="text-align: center">
                        <span class="badge bg-danger text-white">{{session('noprice')}}</span>
                    </div>
                    @endif
                </div>
              </div>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="services-section">
    <div class="container">
      <h2>Services</h2>
      <p>
        There are many variations of passages of Lorem Ipsum available, but
        the majority have suffered alteration in some form, by injected
        humour, or randomised words which don't look even slightly believable.
      </p>
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card">
            <svg
              id="_x33_0"
              enable-background="new 0 0 62 62"
              height="20"
              viewBox="0 0 62 62"
              width="20"
              xmlns="http://www.w3.org/2000/svg"
            >
              <g>
                <path
                  d="m16 20h-2c-1.103 0-2 .897-2 2v2c0 1.103.897 2 2 2h2c1.103 0 2-.897 2-2v-2c0-1.103-.897-2-2-2zm-2 4v-2h2l.001 2z"
                />
                <path
                  d="m24 20h-2c-1.103 0-2 .897-2 2v2c0 1.103.897 2 2 2h2c1.103 0 2-.897 2-2v-2c0-1.103-.897-2-2-2zm-2 4v-2h2l.001 2z"
                />
                <path
                  d="m32 20h-2c-1.103 0-2 .897-2 2v2c0 1.103.897 2 2 2h2c1.103 0 2-.897 2-2v-2c0-1.103-.897-2-2-2zm-2 4v-2h2l.001 2z"
                />
                <path
                  d="m42 22c0-1.103-.897-2-2-2h-2c-1.103 0-2 .897-2 2v2c0 1.103.897 2 2 2h2c1.103 0 2-.897 2-2zm-4 2v-2h2l.001 2z"
                />
                <path
                  d="m44.446 33.124 8.429-6.743c.715-.573 1.125-1.427 1.125-2.342v-.039c1.103 0 2-.897 2-2v-2c0-1.103-.897-2-2-2v-12c0-1.103-.897-2-2-2h-1.426c-.708 0-1.371.38-1.728.992l-6.42 11.008h-12.462c.022-.333.036-.667.036-1 0-8.271-6.729-15-15-15s-15 6.729-15 15c0 2.133.457 4.178 1.317 6.101-.319.5-.603 1.028-.842 1.585-.315.735-.475 1.514-.475 2.314s.16 1.579.475 2.313c1.741 4.062 5.721 6.687 10.141 6.687h7.298l3.2 2h-9.114c-1.103 0-2 .897-2 2v10h-4c-1.103 0-2 .897-2 2v10c0 1.103.897 2 2 2h10c.366 0 .705-.106 1-.278.295.172.634.278 1 .278h10c1.103 0 2-.897 2-2v-10c0-1.103-.897-2-2-2h-4v-10c0-.072-.014-.139-.021-.209l6.148 3.843c.384.239.826.366 1.279.366h4.18c1.331 0 2.414-1.083 2.414-2.414 0-.645-.251-1.251-.707-1.707l-3.879-3.879h8.534c.905 0 1.792-.311 2.498-.876zm-28.446 4.876h2v2h-2zm-4 12v2h-2v-2zm-6 10v-10h2v2c0 1.103.897 2 2 2h2c1.103 0 2-.897 2-2v-2h2v10zm22.001 0h-10.001v-10h2v2c0 1.103.897 2 2 2h2c1.103 0 2-.897 2-2v-2h2zm-6.001-10h2v2h-2zm-4-2h-2-4v-10h2v2c0 1.103.897 2 2 2h2c1.103 0 2-.897 2-2v-2h2l.001 10zm36.001-26h-8.001v-2h8zm-26.041-6h-5.988c.018-.334.028-.668.028-1 0-1.692-.244-3.374-.69-5h5.687c.644 1.54 1.003 3.229 1.003 5 0 .333-.014.667-.04 1zm-20.96 2.769v4.231c0 .551-.449 1-1 1h-3.852c.048-.177.092-.355.165-.525.924-2.156 2.624-3.804 4.687-4.706zm3.058-2.748c-.02-.341-.058-.682-.058-1.021 0-1.697.271-3.384.769-5h8.461c.499 1.616.77 3.303.77 5 0 .332-.036.666-.056 1h-9.329c-.186 0-.371.011-.557.021zm4.942-13.354 1.6 2.133c.745.993 1.366 2.071 1.875 3.2h-6.949c.509-1.128 1.13-2.207 1.875-3.2zm10.937 5.333h-5.294c-.619-1.563-1.431-3.051-2.443-4.4l-1.056-1.408c3.686.616 6.848 2.78 8.793 5.808zm-13.081-5.808-1.056 1.408c-1.012 1.349-1.824 2.837-2.443 4.4h-5.294c1.945-3.028 5.107-5.192 8.793-5.808zm-9.853 7.808h5.687c-.446 1.626-.69 3.308-.69 5 0 .434.02.87.05 1.305-2.029.484-3.87 1.529-5.315 3.005-.486-1.376-.735-2.819-.735-4.31 0-1.771.359-3.46 1.003-5zm32.997 29.586c0 .228-.186.414-.414.414h-4.18c-.078 0-.154-.022-.22-.063l-15.052-9.408c-.084-.052-.134-.143-.134-.242 0-.159.128-.287.287-.287h10.18c.076 0 .149.031.203.084l9.209 9.209c.077.077.121.184.121.293zm-7.916-10.916c-.426-.426-1.015-.67-1.617-.67h-10.18c-1.261 0-2.287 1.026-2.287 2.287 0 .673.301 1.283.798 1.713h-4.182c-3.618 0-6.877-2.149-8.303-5.476-.073-.17-.117-.347-.165-.524h3.852c1.654 0 3-1.346 3-3v-4.839c.528-.096 1.065-.161 1.616-.161h31.81c.708 0 1.371-.38 1.728-.992l6.42-11.008h1.426v12h-6c-1.103 0-2 .897-2 2v2c0 1.103.897 2 2 2h6v.039c0 .305-.137.59-.375.781l-8.428 6.742c-.353.282-.797.438-1.249.438h-10.534z"
                />
                <path d="m56 26h6v2h-6z" />
                <path d="m56 10h6v2h-6z" />
                <path d="m58 14h4v2h-4z" />
                <path d="m42 36h4v2h-4z" />
                <path d="m48 36h8v2h-8z" />
                <path d="m42 40h8v2h-8z" />
                <path d="m38 12h4v2h-4z" />
                <path d="m32 8h10v2h-10z" />
              </g>
            </svg>
            <div class="card-body">
              <h5 class="card-title">Air Freight</h5>
              <p class="card-text">
                Our experience and expertise in global logistics helps to make
                sure that consignment reaches its destination, just the way
                you want it.
              </p>
              <a href="#" class="btn">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 512 512"
              width="20"
              height="20"
            >
              <g id="Outline">
                <path
                  d="M486.4,292.8l-24.088-18.067-23.156-46.311-11.58-23.16A23.866,23.866,0,0,0,406.11,192H336V136a8,8,0,0,0-8-8H24a8,8,0,0,0-8,8v40H32V144H230.3l-12.577,16H80v16H214.581l17.9,22.769-27.21,13.337a8,8,0,0,0-4.29,8.91l6.537,29.593-30.3.211a8,8,0,0,0-7.732,6.165l-6.95,29.494-27.39-12.96a8,8,0,0,0-9.642,2.2L106.439,299.28,87.38,275.719a8,8,0,0,0-9.642-2.2l-27.39,12.96L43.4,256.985a8,8,0,0,0-7.731-6.165L32,250.8V192H16V392a8,8,0,0,0,8,8H48.581a55.992,55.992,0,0,0,110.838,0H344.581a56,56,0,1,0,0-16H336V208h70.11a7.955,7.955,0,0,1,7.155,4.417L419.056,224H376a8,8,0,0,0-8,8v48a8,8,0,0,0,8,8h77.333l23.47,17.6A8.032,8.032,0,0,1,480,312v8H460a12.013,12.013,0,0,0-12,12v24a12.013,12.013,0,0,0,12,12h20v16h-8v16h16a8,8,0,0,0,8-8V312A24.1,24.1,0,0,0,486.4,292.8ZM104,432a40,40,0,1,1,40-40A40.045,40.045,0,0,1,104,432ZM320,200V384H159.419a55.992,55.992,0,0,0-110.838,0H32V278.379l5.043,21.4a8,8,0,0,0,11.209,5.4l30.644-14.5,21.324,26.36a8,8,0,0,0,12.439,0l21.324-26.361,30.645,14.5a8,8,0,0,0,11.209-5.4l7.776-33,33.9-.236a8,8,0,0,0,7.755-9.726l-7.313-33.108L248.4,208.784a8,8,0,0,0,2.768-12.128L234.932,176H304V160H238.075l12.578-16H320Zm80,152a40,40,0,1,1-40,40A40.045,40.045,0,0,1,400,352Zm-16-80V240h43.056l16,32Zm96,80H464V336h16ZM104,368a24,24,0,1,0,24,24A24.027,24.027,0,0,0,104,368Zm0,32a8,8,0,1,1,8-8A8.009,8.009,0,0,1,104,400Zm296,16a24,24,0,1,0-24-24A24.027,24.027,0,0,0,400,416Zm0-32a8,8,0,1,1-8,8A8.009,8.009,0,0,1,400,384ZM168,352H304v16H168ZM64,176H48V160H64Zm136-64H88V96H200ZM328,432H232V416h96ZM216,416v16H200V416ZM144,80H48V64h96ZM32,80H16V64H32Z"
                />
              </g>
            </svg>

            <div class="card-body">
              <h5 class="card-title">Ocean Freight</h5>
              <p class="card-text">
                With broad range of Sea Freight services, we ensure your
                container or cargo reaches the right place, at the right time
                in a cost-efficient way.
              </p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card">
            <svg
              height="20"
              viewBox="0 0 512 512"
              width="20"
              xmlns="http://www.w3.org/2000/svg"
            >
              <g id="Outline">
                <path d="m264 312h16v40h-16z" />
                <path d="m232 312h16v40h-16z" />
                <path d="m200 312h16v40h-16z" />
                <path d="m168 312h16v40h-16z" />
                <path d="m104 312h16v40h-16z" />
                <path d="m72 312h16v40h-16z" />
                <path
                  d="m430 464c-12.44 0-18.324-3.246-25.138-7-7.642-4.216-16.3-9-32.866-9s-25.222 4.779-32.864 9c-6.813 3.759-12.7 7-25.137 7s-18.322-3.246-25.135-7c-7.641-4.216-16.3-9-32.864-9s-25.221 4.779-32.862 9c-6.813 3.759-12.695 7-25.135 7s-18.322-3.246-25.134-7c-7.642-4.216-16.3-9-32.864-9s-25.223 4.779-32.864 9c-6.813 3.759-12.7 7-25.136 7s-18.321-3.246-25.133-7c-7.642-4.216-16.3-9-32.864-9v16c12.439 0 18.322 3.246 25.135 7 7.641 4.216 16.3 9 32.862 9s25.223-4.779 32.864-9c6.813-3.759 12.7-7 25.136-7s18.322 3.246 25.135 7c7.641 4.216 16.3 9 32.863 9s25.222-4.779 32.864-9c6.812-3.759 12.695-7 25.133-7s18.323 3.246 25.136 7c7.642 4.216 16.3 9 32.863 9s25.224-4.779 32.865-9c6.813-3.759 12.7-7 25.136-7s18.324 3.246 25.138 7c7.642 4.216 16.305 9 32.866 9s25.224-4.779 32.866-9c6.814-3.759 12.7-7 25.138-7v-16c-16.562 0-25.224 4.779-32.866 9-6.818 3.754-12.701 7-25.138 7z"
                />
                <path
                  d="m344 432h16v-56a8 8 0 0 0 -8-8h-40v-80a8 8 0 0 0 -8-8h-32v-80a8 8 0 0 0 -8-8h-192a8 8 0 0 0 -8 8v80h-16a8 8 0 0 0 -8 8v80h-16v16h320zm-48-64h-144v-72h144zm-40-88h-80v-72h80zm-176-72h80v72h-80zm-24 88h80v72h-80z"
                />
                <path d="m96 224h16v40h-16z" />
                <path d="m128 224h16v40h-16z" />
                <path d="m192 224h16v40h-16z" />
                <path d="m224 224h16v40h-16z" />
                <path d="m448 328h16v16h-16z" />
                <path d="m136 72h32v16h-32z" />
                <path
                  d="m72 136h24a8 8 0 0 0 5.657-2.343l13.657-13.657h4.686v56h16v-56h32v56h16v-56h8a8 8 0 0 0 8-8v-8h216v72h-16v16h16v16a8 8 0 0 0 8 8 8 8 0 1 1 -8 8h-16a24 24 0 1 0 32-22.629v-9.371h16v-16h-16v-72h16a8 8 0 0 0 6.4-12.8l-24-32a8 8 0 0 0 -6.4-3.2h-224v-8a8 8 0 0 0 -8-8h-24v-16h-16v16h-16v-24h-16v24h-4.686l-13.657-13.657a8 8 0 0 0 -5.657-2.343h-24a8 8 0 0 0 -8 8v96a8 8 0 0 0 8 8zm348-64 12 16h-232v-16zm-300-16h64v48h-64zm-40-16h12.687l11.313 11.314v57.372l-11.313 11.314h-12.687z"
                />
                <path
                  d="m488 296h-16v-24h-16v24h-16v-16h-16v16h-40a8 8 0 0 0 -8 8v24h-48v16h56a8 8 0 0 0 8-8v-24h88v36.01a92.224 92.224 0 0 1 -29.834 67.818l-28.666 26.272 10.815 11.8 28.664-26.274a108.267 108.267 0 0 0 35.021-79.616v-44.01a8 8 0 0 0 -8-8z"
                />
              </g>
            </svg>
            <div class="card-body">
              <h5 class="card-title">Courier Services</h5>
              <p class="card-text">
                Local or nationwide courier services our courier service
                specialists are always available to determine which delivery
                option fits your needs
              </p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card">
            <svg
              id="Layer_1"
              height="20"
              viewBox="0 0 512 512"
              width="20"
              xmlns="http://www.w3.org/2000/svg"
              data-name="Layer 1"
            >
              <path
                d="m234.733 282h75.267a6 6 0 0 0 0-12h-75.267a6 6 0 0 0 0 12z"
              />
              <path
                d="m219.461 276a6 6 0 0 0 -6-6h-37.561a6 6 0 1 0 0 12h37.566a6 6 0 0 0 5.995-6z"
              />
              <path
                d="m130.014 282h25.147a6 6 0 0 0 0-12h-25.147a6 6 0 0 0 0 12z"
              />
              <path
                d="m294.9 246h15.1a6 6 0 0 0 0-12h-15.1a6 6 0 0 0 0 12z"
              />
              <path
                d="m240.217 246h34.107a6 6 0 1 0 0-12h-34.107a6 6 0 1 0 0 12z"
              />
              <path
                d="m130.014 246h89.411a6 6 0 0 0 0-12h-89.411a6 6 0 0 0 0 12z"
              />
              <path
                d="m310 306h-44.241a6 6 0 0 0 0 12h44.241a6 6 0 0 0 0-12z"
              />
              <path
                d="m245.142 306h-33.271a6 6 0 1 0 0 12h33.271a6 6 0 1 0 0-12z"
              />
              <path
                d="m196.423 312a6 6 0 0 0 -6-6h-60.409a6 6 0 0 0 0 12h60.409a6 6 0 0 0 6-6z"
              />
              <path
                d="m40.763 464h362.5a5.951 5.951 0 0 0 4.243-1.7l67.851-67.941a5.828 5.828 0 0 0 1.643-4.217v-336.253a5.708 5.708 0 0 0 -5.763-5.889h-362.5a5.951 5.951 0 0 0 -4.243 1.7l-67.855 67.943a5.828 5.828 0 0 0 -1.639 4.215v336.253a5.708 5.708 0 0 0 5.763 5.889zm223.237-12h-83v-70.2l5.019 5.541a5.736 5.736 0 0 0 4.182 1.869 5.91 5.91 0 0 0 4.272-1.8l11.8-12.055 11.66 12.031a5.985 5.985 0 0 0 8.6 0l11.667-12.031 11.824 11.951a5.9 5.9 0 0 0 4.285 1.694h.049a5.94 5.94 0 0 0 4.342-1.765l5.3-5.435zm201-64.343-56 55.969v-319.212l56-55.969zm-8.167-327.657-56.051 56h-164.424l56.112-56zm-189.833 68v51h-90v-51zm-220 0h54a6 6 0 0 0 0-12h-45.894l56.112-56h164.282l-56.112 56h-78.388a6 6 0 0 0 0 12h24v56.591a6.5 6.5 0 0 0 6.16 6.409h102.119c3.313 0 5.721-3.095 5.721-6.409v-56.591h118v324h-121v-85.237a6.043 6.043 0 0 0 -10.411-4.131l-11.341 11.936-11.782-11.888a5.9 5.9 0 0 0 -4.288-1.68h-.016a5.874 5.874 0 0 0 -4.29 1.7l-11.652 11.951-11.653-12.036a6.009 6.009 0 0 0 -4.289-1.837 6.109 6.109 0 0 0 -4.3 1.791l-11.778 12-11.331-11.94a5.627 5.627 0 0 0 -6.334-1.442 5.79 5.79 0 0 0 -3.535 5.576v85.237h-122z"
              />
              <path
                d="m71 154.1a6 6 0 0 0 -6 6v6.3a6 6 0 0 0 12 0v-6.3a6 6 0 0 0 -6-6z"
              />
              <path
                d="m71 179.391a6 6 0 0 0 -6 6v76a6 6 0 0 0 12 0v-76a6 6 0 0 0 -6-6z"
              />
            </svg>
            <div class="card-body">
              <h5 class="card-title">Rail & Road Freight</h5>
              <p class="card-text">
                India is blessed with a vast land terrain which is spread
                widely and we are pleased to cater transport requirements by
                Rail & Road.
              </p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="packages">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mt-4">
          <div class="package-wrapper">
            <div class="row">
              <div class="col-md-4 d-none d-md-block"></div>
              <div class="col-md-8">
                <div class="package">
                  <h4>prepare your package for the journey</h4>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Quam quaerat odio animi nam explicabo magni commodi, eaque
                    perspiciatis et quidem id optio quia. Nulla dicta, maxime
                    in ad consequuntur sed.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 mt-4">
          <div class="package-wrapper">
            <div class="row">
              <div class="col-md-4 d-none d-md-block"></div>
              <div class="col-md-8">
                <div class="package">
                  <h4>prepare your package for the journey</h4>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Quam quaerat odio animi nam explicabo magni commodi, eaque
                    perspiciatis et quidem id optio quia. Nulla dicta, maxime
                    in ad consequuntur sed.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 mt-4">
          <div class="package-wrapper">
            <div class="row">
              <div class="col-md-4 d-none d-md-block"></div>
              <div class="col-md-8">
                <div class="package">
                  <h4>prepare your package for the journey</h4>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Quam quaerat odio animi nam explicabo magni commodi, eaque
                    perspiciatis et quidem id optio quia. Nulla dicta, maxime
                    in ad consequuntur sed.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 mt-4">
          <div class="package-wrapper">
            <div class="row">
              <div class="col-md-4 d-none d-md-block"></div>
              <div class="col-md-8">
                <div class="package">
                  <h4>prepare your package for the journey</h4>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Quam quaerat odio animi nam explicabo magni commodi, eaque
                    perspiciatis et quidem id optio quia. Nulla dicta, maxime
                    in ad consequuntur sed.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="network">
    <div class="container">
      <h4>our networking partner</h4>
      <div id="owl-two" class="owl-carousel owl-theme">
        <div class="item">
          <img src={{asset('frontend_assets/img/bata.png')}}" alt="" />
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

@endsection