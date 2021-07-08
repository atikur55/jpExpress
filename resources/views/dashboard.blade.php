@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
@endsection
@section('title')
Dashboard -- Jpex
@endsection
@section('subheader')
    <!--begin::Subheader-->

    <!--end::Subheader-->
@endsection
@section('content')
    <!--begin::Row-->
    <div class="row">
        <div class="col-lg-12 ">
            <!--begin::Mixed Widget 1-->
            <div class="card card-custom bg-gray-100 card-stretch gutter-b">
                <!--begin::Header-->
                <div class="card-header border-0 bg-danger py-5">
                    
                    <h3 class="card-title font-weight-bolder text-white">
                        @if(Auth::user()->user_type == 'admin')
                            Welcome to JP Express '{{ Auth::user()->name }}'
                        @elseif(Auth::user()->user_type == 'user')
                            Welcome to JP Express '{{ Auth::user()->name }}'
                        @elseif(Auth::user()->user_type == 'vendor')
                            Welcome to JP Express '{{ Auth::user()->name }}'
                        @endif
                    </h3>
                    {{-- <div class="card-toolbar">
                        <div class="dropdown dropdown-inline">
                            <a href="#" class="btn btn-transparent-white btn-sm font-weight-bolder dropdown-toggle px-5"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Export</a>
                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                <!--begin::Navigation-->
                                <ul class="navi navi-hover">
                                    <li class="navi-header pb-1">
                                        <span
                                            class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-shopping-cart-1"></i>
																		</span>
                                            <span class="navi-text">Order</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-calendar-8"></i>
																		</span>
                                            <span class="navi-text">Event</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-graph-1"></i>
																		</span>
                                            <span class="navi-text">Report</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-rocket-1"></i>
																		</span>
                                            <span class="navi-text">Post</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-writing"></i>
																		</span>
                                            <span class="navi-text">File</span>
                                        </a>
                                    </li>
                                </ul>
                                <!--end::Navigation-->
                            </div>
                        </div>
                    </div> --}}
                </div>
                <!--end::Header-->

                <!--end::Body-->
            </div>
            <!--end::Mixed Widget 1-->
        </div>

    </div>
    <!--end::Row-->
    @if(Auth::user()->user_type == 'admin')
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">

            <!--begin::Dashboard-->
            <!--begin::Row-->
            <div class="row">
                <div class="col-lg-6 col-xxl-4">
                    <!--begin::Mixed Widget 1-->
                    <div class="card card-custom bg-gray-100 card-stretch gutter-b">
                        
                        <!-- 1st Card-->
                        <div class="card-body p-0 position-relative overflow-hidden">  
                            <div class="card-spacer mt-n25">                                
                                <div class="row m-0">
                                    <div class="col bg-light-danger px-6 py-8 rounded-xl mr-7">
                                    <span
                                        class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                width="24px" height="24px" viewBox="0 0 24 24"
                                                version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none"
                                                fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24"/>
                                                <path
                                                    d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                                    fill="#000000" fill-rule="nonzero"/>
                                                <path
                                                    d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                                    fill="#000000" opacity="0.3"/>
                                            </g>
                                        </svg><span style="color: #1BC5BD  ; font-size:20px;padding-left:20px;font-family: Poppins, Helvetica,'sans-serif';">{{$total_users}}</span>
                                        <!--end::Svg Icon-->
                                    </span>
                                        <a href="#" class="text-danger font-weight-bold font-size-h6 mt-2">Total Customers</a>
                                    </div>
                                    <div class="col bg-light-success px-6 py-8 rounded-xl">
                                        <span
                                            class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Urgent-mail.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                    version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"/>
                                                    <path
                                                        d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z"
                                                        fill="#000000" opacity="0.3"/>
                                                    <path
                                                        d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z"
                                                        fill="#000000"/>
                                                </g>
                                            </svg>
                                            <span style="color: #F64E60; font-size:20px;padding-left:20px;font-family: Poppins, Helvetica,'sans-serif';">{{$total_vendors}}</span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <a href="#" class="text-success font-weight-bold font-size-h6 mt-2">Total Vendors</a>
                                    </div>
                                </div>                              
                            </div>
                             <div class="card-spacer mt-n25">
                                
                                <div class="row m-0">
                                    <div class="col bg-light-danger px-6 py-8 rounded-xl mr-7">
                                    <span
                                        class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                width="24px" height="24px" viewBox="0 0 24 24"
                                                version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none"
                                                fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24"/>
                                                <path
                                                    d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                                    fill="#000000" fill-rule="nonzero"/>
                                                <path
                                                    d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                                    fill="#000000" opacity="0.3"/>
                                            </g>
                                        </svg>
                                        <span style="color: #1BC5BD; font-size:20px;padding-left:20px;font-family: Poppins, Helvetica,'sans-serif';">{{$total_travellers}}</span>
                                        <!--end::Svg Icon-->
                                    </span>
                                        <a href="#" class="text-danger font-weight-bold font-size-h6 mt-2">Total Traveller</a>
                                    </div>
                                    <div class="col bg-light-success px-6 py-8 rounded-xl">
                                        <span
                                            class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Urgent-mail.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                    version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"/>
                                                    <path
                                                        d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z"
                                                        fill="#000000" opacity="0.3"/>
                                                    <path
                                                        d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z"
                                                        fill="#000000"/>
                                                </g>
                                            </svg>
                                            <span style="color: #F64E60; font-size:20px;padding-left:20px;font-family: Poppins, Helvetica,'sans-serif';">{{$total_staffs}}</span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        
                                        <a href="#" class="text-success font-weight-bold font-size-h6 mt-2">Total Staff</a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <!-- End 1st Card-->
                    </div>
                    <!--end::Mixed Widget 1-->
                </div>
                <div class="col-lg-6 col-xxl-4">
                    <!--begin::List Widget 9-->
                    <div class="card card-custom card-stretch gutter-b">
                       <!-- 1st Card-->
                       <div class="card-body p-0 position-relative overflow-hidden">  
                            <div class="card-spacer mt-n25">                                
                                <div class="row m-0">
                                    <div class="col bg-light-danger px-6 py-8 rounded-xl mr-7">
                                    <span
                                        class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                width="24px" height="24px" viewBox="0 0 24 24"
                                                version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none"
                                                fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24"/>
                                                <path
                                                    d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                                    fill="#000000" fill-rule="nonzero"/>
                                                <path
                                                    d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                                    fill="#000000" opacity="0.3"/>
                                            </g>
                                        </svg><span style="color: #1BC5BD  ; font-size:20px;padding-left:20px;font-family: Poppins, Helvetica,'sans-serif';">{{$total_collection}}</span>
                                        <!--end::Svg Icon-->
                                    </span>
                                        <a href="#" class="text-danger font-weight-bold font-size-h6 mt-2">Total Collection</a>
                                    </div>
                                    <div class="col bg-light-success px-6 py-8 rounded-xl">
                                        <span
                                            class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Urgent-mail.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                    version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"/>
                                                    <path
                                                        d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z"
                                                        fill="#000000" opacity="0.3"/>
                                                    <path
                                                        d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z"
                                                        fill="#000000"/>
                                                </g>
                                            </svg>
                                            <span style="color: #F64E60; font-size:20px;padding-left:20px;font-family: Poppins, Helvetica,'sans-serif';">{{$pending_collection}}</span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <a href="#" class="text-success font-weight-bold font-size-h6 mt-2">Pending Collection</a>
                                    </div>
                                </div>                              
                            </div>
                            <div class="card-spacer mt-n25">                     
                                <div class="row m-0">
                                    <div class="col bg-light-danger px-6 py-8 rounded-xl mr-7">
                                    <span
                                        class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                width="24px" height="24px" viewBox="0 0 24 24"
                                                version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none"
                                                fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24"/>
                                                <path
                                                    d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                                    fill="#000000" fill-rule="nonzero"/>
                                                <path
                                                    d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                                    fill="#000000" opacity="0.3"/>
                                            </g>
                                        </svg>
                                        <span style="color: #1BC5BD; font-size:20px;padding-left:20px;font-family: Poppins, Helvetica,'sans-serif';">{{$confirm_collection}}</span>
                                        <!--end::Svg Icon-->
                                    </span>
                                        <a href="#" class="text-danger font-weight-bold font-size-h6 mt-2">Confirm Amount</a>
                                    </div>
                                    <div class="col bg-light-success px-6 py-8 rounded-xl">
                                        <span
                                            class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Urgent-mail.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                    version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"/>
                                                    <path
                                                        d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z"
                                                        fill="#000000" opacity="0.3"/>
                                                    <path
                                                        d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z"
                                                        fill="#000000"/>
                                                </g>
                                            </svg>
                                            <span style="color: #F64E60; font-size:20px;padding-left:20px;font-family: Poppins, Helvetica,'sans-serif';">{{$cancel_collection}}</span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        
                                        <a href="#" class="text-success font-weight-bold font-size-h6 mt-2">Cancel Amount</a>
                                    </div>
                                </div>                      
                            </div>
                        </div>
                    <!-- End 1st Card-->
                    </div>
                    <!--end: List Widget 9-->
                </div>
                <div class="col-lg-6 col-xxl-4">
                    <!--begin::List Widget 9-->
                    <div class="card card-custom card-stretch gutter-b">
                        <!-- 1st Card-->
                        <div class="card-body p-0 position-relative overflow-hidden">  
                             <div class="card-spacer mt-n25">                                
                                 <div class="row m-0">
                                     <div class="col bg-light-danger px-6 py-8 rounded-xl mr-7">
                                     <span
                                         class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
                                         <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                                         <svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                 width="24px" height="24px" viewBox="0 0 24 24"
                                                 version="1.1">
                                             <g stroke="none" stroke-width="1" fill="none"
                                                 fill-rule="evenodd">
                                                 <polygon points="0 0 24 0 24 24 0 24"/>
                                                 <path
                                                     d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                                     fill="#000000" fill-rule="nonzero"/>
                                                 <path
                                                     d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                                     fill="#000000" opacity="0.3"/>
                                             </g>
                                         </svg><span style="color: #1BC5BD  ; font-size:20px;padding-left:20px;font-family: Poppins, Helvetica,'sans-serif';">{{$total_order}}</span>
                                         <!--end::Svg Icon-->
                                     </span>
                                         <a href="{{url('view-booking-order')}}" class="text-danger font-weight-bold font-size-h6 mt-2">Total Order</a>
                                     </div>
                                     <div class="col bg-light-success px-6 py-8 rounded-xl">
                                         <span
                                             class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
                                             <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Urgent-mail.svg-->
                                             <svg xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                     width="24px" height="24px" viewBox="0 0 24 24"
                                                     version="1.1">
                                                 <g stroke="none" stroke-width="1" fill="none"
                                                     fill-rule="evenodd">
                                                     <rect x="0" y="0" width="24" height="24"/>
                                                     <path
                                                         d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z"
                                                         fill="#000000" opacity="0.3"/>
                                                     <path
                                                         d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z"
                                                         fill="#000000"/>
                                                 </g>
                                             </svg>
                                             <span style="color: #F64E60; font-size:20px;padding-left:20px;font-family: Poppins, Helvetica,'sans-serif';">{{$total_pending}}</span>
                                             <!--end::Svg Icon-->
                                         </span>
                                         <a href="{{url('pending-order')}}" class="text-success font-weight-bold font-size-h6 mt-2">Pending Order</a>
                                     </div>
                                 </div>                              
                             </div>
                             <div class="card-spacer mt-n25">                     
                                 <div class="row m-0">
                                     <div class="col bg-light-danger px-6 py-8 rounded-xl mr-7">
                                     <span
                                         class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
                                         <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                                         <svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                 width="24px" height="24px" viewBox="0 0 24 24"
                                                 version="1.1">
                                             <g stroke="none" stroke-width="1" fill="none"
                                                 fill-rule="evenodd">
                                                 <polygon points="0 0 24 0 24 24 0 24"/>
                                                 <path
                                                     d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                                     fill="#000000" fill-rule="nonzero"/>
                                                 <path
                                                     d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                                     fill="#000000" opacity="0.3"/>
                                             </g>
                                         </svg>
                                         <span style="color: #1BC5BD; font-size:20px;padding-left:20px;font-family: Poppins, Helvetica,'sans-serif';">{{$total_confirm}}</span>
                                         <!--end::Svg Icon-->
                                     </span>
                                         <a href="{{url('completed-order')}}" class="text-danger font-weight-bold font-size-h6 mt-2">Confirm Order</a>
                                     </div>
                                     <div class="col bg-light-success px-6 py-8 rounded-xl">
                                         <span
                                             class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
                                             <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Urgent-mail.svg-->
                                             <svg xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                     width="24px" height="24px" viewBox="0 0 24 24"
                                                     version="1.1">
                                                 <g stroke="none" stroke-width="1" fill="none"
                                                     fill-rule="evenodd">
                                                     <rect x="0" y="0" width="24" height="24"/>
                                                     <path
                                                         d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z"
                                                         fill="#000000" opacity="0.3"/>
                                                     <path
                                                         d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z"
                                                         fill="#000000"/>
                                                 </g>
                                             </svg>
                                             <span style="color: #F64E60; font-size:20px;padding-left:20px;font-family: Poppins, Helvetica,'sans-serif';">{{$total_cancel}}</span>
                                             <!--end::Svg Icon-->
                                         </span>
                                         
                                         <a href="{{url('cancel-order')}}" class="text-success font-weight-bold font-size-h6 mt-2">Cancel Order</a>
                                     </div>
                                 </div>                      
                             </div>
                         </div>
                     <!-- End 1st Card-->
                     </div>
                     <!--end: List Widget 9-->
                </div>
                <div class="col-lg-6 col-xxl-4">
                    <!--begin::List Widget 1-->
                    <div class="card card-custom card-stretch gutter-b" style="padding:20px;">
                        {{-- <div class="card-body py-0"> --}}
                            <h3>Report</h3>
                            <div class="row">
                                <form action="{{url('download_report')}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="from">From</label>
                                                <input type="date" id="from" name="from_date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="from-group">
                                                <label for="to">To</label>
                                                <input type="date" id="to" name="to_date" class="form-control">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-2">
                                            <div class="from-group">
                                                <label for="">Report</label>
                                                <button type="submit" class="btn btn-success"><i style="color: #fff;font-size: 20px;" class="far fa-file-pdf"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                  </form> 
                            </div>
                            <br>
                            <table id="usertable" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Track ID</th>
                                    <th>PRICE</th>
                                    <th>STATUS</th>
                                    {{-- <th>ACTION</th> --}}
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($online_books as $order)
                                    <tr>
                                        <td>{{$order->track_id}}</td>
                                        <td>{{$order->price}}&#2547;</td>
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
                                    </tr>
                                    @endforeach
                                </tbody>
        
                            </table>
                        {{-- </div> --}}
                        <!--end: Datatable-->
                    </div>
                    <!--end::List Widget 1-->
                </div>
                
                <div class="col-lg-6 col-xxl-4 order-1 order-xxl-2">
                    <!--begin::List Widget 3-->
                    <div class="card card-custom card-stretch gutter-b">
                        <!--begin::Header-->
                        <div class="card-header border-0">
                            <h3 class="card-title font-weight-bolder text-dark">Vendors</h3>
                            <div class="card-toolbar">
                                <div class="dropdown dropdown-inline">
                                    <a href="#" class="btn btn-light-primary btn-sm font-weight-bolder dropdown-toggle"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">August</a>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                        <!--begin::Navigation-->
                                        <ul class="navi navi-hover">
                                            <li class="navi-header pb-1">
                                                <span class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-shopping-cart-1"></i>
                                                    </span>
                                                    <span class="navi-text">Order</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-calendar-8"></i>
                                                    </span>
                                                    <span class="navi-text">Event</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-graph-1"></i>
                                                    </span>
                                                    <span class="navi-text">Report</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-rocket-1"></i>
                                                    </span>
                                                    <span class="navi-text">Post</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-writing"></i>
                                                    </span>
                                                    <span class="navi-text">File</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!--end::Navigation-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-2">

                            <!--begin::Item-->
                            @foreach ($vendors as $vendor)
                            <div class="d-flex align-items-center mb-10">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40 symbol-light-success mr-5">
                                    <span class="symbol-label">
                                        <img src="{{asset('uploads/user/')}}/{{$vendor->image}}" alt="" class="img-fluid"/>
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Text-->
                                <div class="d-flex flex-column flex-grow-1 font-weight-bold">
                                    <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">{{$vendor->name}}</a>
                                    <span class="text-muted">{{$vendor->phone}}</span>
                                </div>
                                <!--end::Text-->
                                <!--begin::Dropdown-->
                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions"
                                     data-placement="left">
                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ki ki-bold-more-hor"></i>
                                    </a>
                                    <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                        <!--begin::Navigation-->
                                        <ul class="navi navi-hover">
                                            <li class="navi-header font-weight-bold py-4">
                                                <span class="font-size-lg">Choose Label:</span>
                                                <i class="flaticon2-information icon-md text-muted"
                                                   data-toggle="tooltip" data-placement="right"
                                                   title="Click to learn more..."></i>
                                            </li>
                                            <li class="navi-separator mb-3 opacity-70"></li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-text">
    																			<span
                                                                                    class="label label-xl label-inline label-light-success">Customer</span>
    																		</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-text">
    																			<span
                                                                                    class="label label-xl label-inline label-light-danger">Partner</span>
    																		</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-text">
    																			<span
                                                                                    class="label label-xl label-inline label-light-warning">Suplier</span>
    																		</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-text">
    																			<span
                                                                                    class="label label-xl label-inline label-light-primary">Member</span>
    																		</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-text">
    																			<span
                                                                                    class="label label-xl label-inline label-light-dark">Staff</span>
    																		</span>
                                                </a>
                                            </li>
                                            <li class="navi-separator mt-3 opacity-70"></li>
                                            <li class="navi-footer py-4">
                                                <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                    <i class="ki ki-plus icon-sm"></i>Add new</a>
                                            </li>
                                        </ul>
                                        <!--end::Navigation-->
                                    </div>
                                </div>
                                <!--end::Dropdown-->
                            </div>   
                            @endforeach
                            
                            <!--end::Item-->
                            
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::List Widget 3-->
                </div>
                <div class="col-lg-6 col-xxl-4 order-1 order-xxl-2">
                    <!--begin::List Widget 4-->
                    <div class="card card-custom card-stretch gutter-b">
                        <!--begin::Header-->
                        <div class="card-header border-0">
                            <h3 class="card-title font-weight-bolder text-dark">Todo</h3>
                            <div class="card-toolbar">
                                <div class="dropdown dropdown-inline">
                                    <a href="#"
                                       class="btn btn-light btn-sm font-size-sm font-weight-bolder dropdown-toggle text-dark-75"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Create</a>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                        <!--begin::Navigation-->
                                        <ul class="navi navi-hover">
                                            <li class="navi-header pb-1">
                                                <span class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-icon">
    																			<i class="flaticon2-shopping-cart-1"></i>
    																		</span>
                                                    <span class="navi-text">Order</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-icon">
    																			<i class="flaticon2-calendar-8"></i>
    																		</span>
                                                    <span class="navi-text">Event</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-icon">
    																			<i class="flaticon2-graph-1"></i>
    																		</span>
                                                    <span class="navi-text">Report</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-icon">
    																			<i class="flaticon2-rocket-1"></i>
    																		</span>
                                                    <span class="navi-text">Post</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-icon">
    																			<i class="flaticon2-writing"></i>
    																		</span>
                                                    <span class="navi-text">File</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!--end::Navigation-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-2">
                            <!--begin::Item-->
                            <div class="d-flex align-items-center">
                                <!--begin::Bullet-->
                                <span class="bullet bullet-bar bg-success align-self-stretch"></span>
                                <!--end::Bullet-->
                                <!--begin::Checkbox-->
                                <label
                                    class="checkbox checkbox-lg checkbox-light-success checkbox-inline flex-shrink-0 m-0 mx-4">
                                    <input type="checkbox" name="select" value="1"/>
                                    <span></span>
                                </label>
                                <!--end::Checkbox-->
                                <!--begin::Text-->
                                <div class="d-flex flex-column flex-grow-1">
                                    <a href="#"
                                       class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">Create
                                        FireStone Logo</a>
                                    <span class="text-muted font-weight-bold">Due in 2 Days</span>
                                </div>
                                <!--end::Text-->
                                <!--begin::Dropdown-->
                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions"
                                     data-placement="left">
                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ki ki-bold-more-hor"></i>
                                    </a>
                                    <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                        <!--begin::Navigation-->
                                        <ul class="navi navi-hover">
                                            <li class="navi-header font-weight-bold py-4">
                                                <span class="font-size-lg">Choose Label:</span>
                                                <i class="flaticon2-information icon-md text-muted"
                                                   data-toggle="tooltip" data-placement="right"
                                                   title="Click to learn more..."></i>
                                            </li>
                                            <li class="navi-separator mb-3 opacity-70"></li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-text">
    																			<span
                                                                                    class="label label-xl label-inline label-light-success">Customer</span>
    																		</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-text">
    																			<span
                                                                                    class="label label-xl label-inline label-light-danger">Partner</span>
    																		</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-text">
    																			<span
                                                                                    class="label label-xl label-inline label-light-warning">Suplier</span>
    																		</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-text">
    																			<span
                                                                                    class="label label-xl label-inline label-light-primary">Member</span>
    																		</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-text">
    																			<span
                                                                                    class="label label-xl label-inline label-light-dark">Staff</span>
    																		</span>
                                                </a>
                                            </li>
                                            <li class="navi-separator mt-3 opacity-70"></li>
                                            <li class="navi-footer py-4">
                                                <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                    <i class="ki ki-plus icon-sm"></i>Add new</a>
                                            </li>
                                        </ul>
                                        <!--end::Navigation-->
                                    </div>
                                </div>
                                <!--end::Dropdown-->
                            </div>
                            <!--end:Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mt-10">
                                <!--begin::Bullet-->
                                <span class="bullet bullet-bar bg-primary align-self-stretch"></span>
                                <!--end::Bullet-->
                                <!--begin::Checkbox-->
                                <label
                                    class="checkbox checkbox-lg checkbox-light-primary checkbox-inline flex-shrink-0 m-0 mx-4">
                                    <input type="checkbox" value="1"/>
                                    <span></span>
                                </label>
                                <!--end::Checkbox-->
                                <!--begin::Text-->
                                <div class="d-flex flex-column flex-grow-1">
                                    <a href="#"
                                       class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">Stakeholder
                                        Meeting</a>
                                    <span class="text-muted font-weight-bold">Due in 3 Days</span>
                                </div>
                                <!--end::Text-->
                                <!--begin::Dropdown-->
                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions"
                                     data-placement="left">
                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ki ki-bold-more-hor"></i>
                                    </a>
                                    <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                        <!--begin::Navigation-->
                                        <ul class="navi navi-hover">
                                            <li class="navi-header font-weight-bold py-4">
                                                <span class="font-size-lg">Choose Label:</span>
                                                <i class="flaticon2-information icon-md text-muted"
                                                   data-toggle="tooltip" data-placement="right"
                                                   title="Click to learn more..."></i>
                                            </li>
                                            <li class="navi-separator mb-3 opacity-70"></li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-text">
    																			<span
                                                                                    class="label label-xl label-inline label-light-success">Customer</span>
    																		</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-text">
    																			<span
                                                                                    class="label label-xl label-inline label-light-danger">Partner</span>
    																		</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-text">
    																			<span
                                                                                    class="label label-xl label-inline label-light-warning">Suplier</span>
    																		</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-text">
    																			<span
                                                                                    class="label label-xl label-inline label-light-primary">Member</span>
    																		</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-text">
    																			<span
                                                                                    class="label label-xl label-inline label-light-dark">Staff</span>
    																		</span>
                                                </a>
                                            </li>
                                            <li class="navi-separator mt-3 opacity-70"></li>
                                            <li class="navi-footer py-4">
                                                <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                    <i class="ki ki-plus icon-sm"></i>Add new</a>
                                            </li>
                                        </ul>
                                        <!--end::Navigation-->
                                    </div>
                                </div>
                                <!--end::Dropdown-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mt-10">
                                <!--begin::Bullet-->
                                <span class="bullet bullet-bar bg-warning align-self-stretch"></span>
                                <!--end::Bullet-->
                                <!--begin::Checkbox-->
                                <label
                                    class="checkbox checkbox-lg checkbox-light-warning checkbox-inline flex-shrink-0 m-0 mx-4">
                                    <input type="checkbox" value="1"/>
                                    <span></span>
                                </label>
                                <!--end::Checkbox-->
                                <!--begin::Text-->
                                <div class="d-flex flex-column flex-grow-1">
                                    <a href="#"
                                       class="text-dark-75 text-hover-primary font-size-sm font-weight-bold font-size-lg mb-1">Scoping
                                        &amp; Estimations</a>
                                    <span class="text-muted font-weight-bold">Due in 5 Days</span>
                                </div>
                                <!--end::Text-->
                                <!--begin: Dropdown-->
                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions"
                                     data-placement="left">
                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ki ki-bold-more-hor"></i>
                                    </a>
                                    <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                        <!--begin::Navigation-->
                                        <ul class="navi navi-hover">
                                            <li class="navi-header font-weight-bold py-4">
                                                <span class="font-size-lg">Choose Label:</span>
                                                <i class="flaticon2-information icon-md text-muted"
                                                   data-toggle="tooltip" data-placement="right"
                                                   title="Click to learn more..."></i>
                                            </li>
                                            <li class="navi-separator mb-3 opacity-70"></li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-text">
    																			<span
                                                                                    class="label label-xl label-inline label-light-success">Customer</span>
    																		</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-text">
    																			<span
                                                                                    class="label label-xl label-inline label-light-danger">Partner</span>
    																		</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-text">
    																			<span
                                                                                    class="label label-xl label-inline label-light-warning">Suplier</span>
    																		</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-text">
    																			<span
                                                                                    class="label label-xl label-inline label-light-primary">Member</span>
    																		</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-text">
    																			<span
                                                                                    class="label label-xl label-inline label-light-dark">Staff</span>
    																		</span>
                                                </a>
                                            </li>
                                            <li class="navi-separator mt-3 opacity-70"></li>
                                            <li class="navi-footer py-4">
                                                <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                    <i class="ki ki-plus icon-sm"></i>Add new</a>
                                            </li>
                                        </ul>
                                        <!--end::Navigation-->
                                    </div>
                                </div>
                                <!--end::Dropdown-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mt-10">
                                <!--begin::Bullet-->
                                <span class="bullet bullet-bar bg-info align-self-stretch"></span>
                                <!--end::Bullet-->
                                <!--begin::Checkbox-->
                                <label
                                    class="checkbox checkbox-lg checkbox-light-info checkbox-inline flex-shrink-0 m-0 mx-4">
                                    <input type="checkbox" value="1"/>
                                    <span></span>
                                </label>
                                <!--end::Checkbox-->
                                <!--begin::Text-->
                                <div class="d-flex flex-column flex-grow-1">
                                    <a href="#"
                                       class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">Sprint
                                        Showcase</a>
                                    <span class="text-muted font-weight-bold">Due in 1 Day</span>
                                </div>
                                <!--end::Text-->
                                <!--begin::Dropdown-->
                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions"
                                     data-placement="left">
                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ki ki-bold-more-hor"></i>
                                    </a>
                                    <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                        <!--begin::Navigation-->
                                        <ul class="navi navi-hover py-5">
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-icon">
    																			<i class="flaticon2-drop"></i>
    																		</span>
                                                    <span class="navi-text">New Group</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-icon">
    																			<i class="flaticon2-list-3"></i>
    																		</span>
                                                    <span class="navi-text">Contacts</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-icon">
    																			<i class="flaticon2-rocket-1"></i>
    																		</span>
                                                    <span class="navi-text">Groups</span>
                                                    <span class="navi-link-badge">
    																			<span
                                                                                    class="label label-light-primary label-inline font-weight-bold">new</span>
    																		</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-icon">
    																			<i class="flaticon2-bell-2"></i>
    																		</span>
                                                    <span class="navi-text">Calls</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-icon">
    																			<i class="flaticon2-gear"></i>
    																		</span>
                                                    <span class="navi-text">Settings</span>
                                                </a>
                                            </li>
                                            <li class="navi-separator my-3"></li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-icon">
    																			<i class="flaticon2-magnifier-tool"></i>
    																		</span>
                                                    <span class="navi-text">Help</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-icon">
    																			<i class="flaticon2-bell-2"></i>
    																		</span>
                                                    <span class="navi-text">Privacy</span>
                                                    <span class="navi-link-badge">
    																			<span
                                                                                    class="label label-light-danger label-rounded font-weight-bold">5</span>
    																		</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!--end::Navigation-->
                                    </div>
                                </div>
                                <!--end::Dropdown-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mt-10">
                                <!--begin::Bullet-->
                                <span class="bullet bullet-bar bg-danger align-self-stretch"></span>
                                <!--end::Bullet-->
                                <!--begin::Checkbox-->
                                <label
                                    class="checkbox checkbox-lg checkbox-light-danger checkbox-inline flex-shrink-0 m-0 mx-4">
                                    <input type="checkbox" value="1"/>
                                    <span></span>
                                </label>
                                <!--end::Checkbox:-->
                                <!--begin::Title-->
                                <div class="d-flex flex-column flex-grow-1">
                                    <a href="#"
                                       class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">Project
                                        Retro</a>
                                    <span class="text-muted font-weight-bold">Due in 12 Days</span>
                                </div>
                                <!--end::Text-->
                                <!--begin: Dropdown-->
                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions"
                                     data-placement="left">
                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ki ki-bold-more-hor"></i>
                                    </a>
                                    <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                        <!--begin::Navigation-->
                                        <ul class="navi navi-hover">
                                            <li class="navi-header font-weight-bold py-4">
                                                <span class="font-size-lg">Choose Label:</span>
                                                <i class="flaticon2-information icon-md text-muted"
                                                   data-toggle="tooltip" data-placement="right"
                                                   title="Click to learn more..."></i>
                                            </li>
                                            <li class="navi-separator mb-3 opacity-70"></li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-text">
    																			<span
                                                                                    class="label label-xl label-inline label-light-success">Customer</span>
    																		</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-text">
    																			<span
                                                                                    class="label label-xl label-inline label-light-danger">Partner</span>
    																		</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-text">
    																			<span
                                                                                    class="label label-xl label-inline label-light-warning">Suplier</span>
    																		</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-text">
    																			<span
                                                                                    class="label label-xl label-inline label-light-primary">Member</span>
    																		</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-text">
    																			<span
                                                                                    class="label label-xl label-inline label-light-dark">Staff</span>
    																		</span>
                                                </a>
                                            </li>
                                            <li class="navi-separator mt-3 opacity-70"></li>
                                            <li class="navi-footer py-4">
                                                <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                    <i class="ki ki-plus icon-sm"></i>Add new</a>
                                            </li>
                                        </ul>
                                        <!--end::Navigation-->
                                    </div>
                                </div>
                                <!--end::Dropdown-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end:List Widget 4-->
                </div>
                <div class="col-lg-12 col-xxl-4 order-1 order-xxl-2">
                    <!--begin::List Widget 8-->
                    <div class="card card-custom card-stretch gutter-b">
                        <!--begin::Header-->
                        <div class="card-header border-0">
                            <h3 class="card-title font-weight-bolder text-dark">Today's Booking</h3>
                            <div class="card-toolbar">
                                <div class="dropdown dropdown-inline">
                                    <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ki ki-bold-more-ver"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                        <!--begin::Navigation-->
                                        <ul class="navi navi-hover">
                                            <li class="navi-header pb-1">
                                                <span class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-icon">
    																			<i class="flaticon2-shopping-cart-1"></i>
    																		</span>
                                                    <span class="navi-text">Order</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-icon">
    																			<i class="flaticon2-calendar-8"></i>
    																		</span>
                                                    <span class="navi-text">Event</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-icon">
    																			<i class="flaticon2-graph-1"></i>
    																		</span>
                                                    <span class="navi-text">Report</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-icon">
    																			<i class="flaticon2-rocket-1"></i>
    																		</span>
                                                    <span class="navi-text">Post</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-icon">
    																			<i class="flaticon2-writing"></i>
    																		</span>
                                                    <span class="navi-text">File</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!--end::Navigation-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-0">
                            <div class="table-responsive">
                                <table class="table table-head-custom table-head-bg table-borderless table-vertical-center" id="today_orders">
                                    <thead>
                                    <tr class="text-left text-uppercase">
                                        <th style="min-width: 100px">Track No.</th>
                                        <th style="min-width: 100px">From</th>
                                        <th style="min-width: 100px">TO</th>
                                        <th style="min-width: 130px">Price</th>
                                        <th style="min-width: 80px">View</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($todays_order as $order)
                                            <tr>
                                                <td>
                                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$order->track_id}}
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$order->from}}
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$order->to}}
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$order->price}}&#2547;
                                                    </span>
                                                </td>
                                                <td>
                                                    <a href="{{url('view-order')}}/{{$order->id}}" class="btn btn-light-success font-weight-bolder font-size-sm">View  
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end: Card-->
                    <!--end::List Widget 8-->
                </div>
                <div class="col-lg-12 col-xxl-4 order-1 order-xxl-2">
                    <!--begin::List Widget 8-->
                    <div class="card card-custom card-stretch gutter-b">
                        <!--begin::Header-->
                        <div class="card-header border-0">
                            <h3 class="card-title font-weight-bolder text-dark">User Chart</h3>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-0">
                            <div id="container"></div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end: Card-->
                    <!--end::List Widget 8-->
                </div>
                <div class="col-lg-12 col-xxl-4 order-1 order-xxl-2">
                    <!--begin::List Widget 8-->
                    <div class="card card-custom card-stretch gutter-b">
                        <!--begin::Header-->
                        <div class="card-header border-0">
                            <h3 class="card-title font-weight-bolder text-dark">Lint Chart For Price</h3>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="antialiased">
                            <div id="linechart" style="width: 1000px; height: 500px"></div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end: Card-->
                    <!--end::List Widget 8-->
                </div>
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row">
                <div class="col-lg-6">
                    <!--begin::Mixed Widget 14-->
                    <div class="card card-custom card-stretch gutter-b">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title font-weight-bolder">Action Needed</h3>
                            <div class="card-toolbar">
                                <div class="dropdown dropdown-inline">
                                    <a href="#" class="btn btn-clean btn-sm btn-icon" data-toggle="dropdown"
                                       aria-haspopup="true" aria-expanded="false">
                                        <i class="ki ki-bold-more-hor"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                        <!--begin::Navigation-->
                                        <ul class="navi navi-hover py-5">
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-icon">
    																			<i class="flaticon2-drop"></i>
    																		</span>
                                                    <span class="navi-text">New Group</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-icon">
    																			<i class="flaticon2-list-3"></i>
    																		</span>
                                                    <span class="navi-text">Contacts</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-icon">
    																			<i class="flaticon2-rocket-1"></i>
    																		</span>
                                                    <span class="navi-text">Groups</span>
                                                    <span class="navi-link-badge">
    																			<span
                                                                                    class="label label-light-primary label-inline font-weight-bold">new</span>
    																		</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-icon">
    																			<i class="flaticon2-bell-2"></i>
    																		</span>
                                                    <span class="navi-text">Calls</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-icon">
    																			<i class="flaticon2-gear"></i>
    																		</span>
                                                    <span class="navi-text">Settings</span>
                                                </a>
                                            </li>
                                            <li class="navi-separator my-3"></li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-icon">
    																			<i class="flaticon2-magnifier-tool"></i>
    																		</span>
                                                    <span class="navi-text">Help</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
    																		<span class="navi-icon">
    																			<i class="flaticon2-bell-2"></i>
    																		</span>
                                                    <span class="navi-text">Privacy</span>
                                                    <span class="navi-link-badge">
    																			<span
                                                                                    class="label label-light-danger label-rounded font-weight-bold">5</span>
    																		</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!--end::Navigation-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body">
                            <div id="pie_chart" style="width:750px; height:450px;">

                            </div>
                            <div class="pt-5">
                                <p class="text-center font-weight-normal font-size-lg pb-7">Notes: Current sprint
                                    requires stakeholders
                                    <br/>to approve newly amended policies</p>
                                <a href="#" class="btn btn-success btn-shadow-hover font-weight-bolder w-100 py-3">Generate
                                    Report</a>
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 14-->
                </div>
                <div class="col-lg-6">
                    <!--begin::Advance Table Widget 4-->
                    <div class="card card-custom card-stretch gutter-b">
                        <!--begin::Header-->
                        <div class="card-header border-0 py-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label font-weight-bolder text-dark">Lates Booking</span>
                                <span
                                    class="text-muted mt-3 font-weight-bold font-size-sm">More than {{$total_order}}+ Order </span>
                            </h3>
                            <div class="card-toolbar">
                                <a href="{{ route('export') }}" class="btn btn-info font-weight-bolder font-size-sm mr-3">Export Report</a>
                                <a href="{{url('online_booking')}}" class="btn btn-danger font-weight-bolder font-size-sm">Create</a>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-0 pb-3">
                            <div class="tab-content">
                                <!--begin::Table-->
                                <div class="table-responsive">
                                    <table class="table table-head-custom table-head-bg table-borderless table-vertical-center">
                                        <thead>
                                        <tr class="text-left text-uppercase">
                                            <th style="min-width: 100px">Track No.</th>
                                            <th style="min-width: 100px">From</th>
                                            <th style="min-width: 100px">TO</th>
                                            <th style="min-width: 130px">Price</th>
                                            <th style="min-width: 80px">View</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($online_orders as $order)
                                                <tr>
                                                    <td>
                                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$order->track_id}}
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$order->from}}
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$order->to}}
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">{{$order->price}}&#2547;
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <a href="{{url('view-order')}}/{{$order->id}}" class="btn btn-light-success font-weight-bolder font-size-sm">View  
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!--end::Table-->
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Advance Table Widget 4-->
                </div>
            </div>
            <!--end::Row-->
            <!--end::Dashboard-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
    @elseif(Auth::user()->user_type == 'vendor')
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xxl-4">
                    <!--begin::List Widget 9-->
                    <div class="card card-custom card-stretch gutter-b">
                        <!-- 1st Card-->
                        <div class="card-body p-0 position-relative overflow-hidden">  
                             <div class="card-spacer mt-n25">                                
                                 <div class="row m-0">
                                    <div class="col bg-light-danger px-6 py-8 rounded-xl mr-7">
                                        <span
                                         class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
                                         <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                                         <svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                 width="24px" height="24px" viewBox="0 0 24 24"
                                                 version="1.1">
                                             <g stroke="none" stroke-width="1" fill="none"
                                                 fill-rule="evenodd">
                                                 <polygon points="0 0 24 0 24 24 0 24"/>
                                                 <path
                                                     d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                                     fill="#000000" fill-rule="nonzero"/>
                                                 <path
                                                     d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                                     fill="#000000" opacity="0.3"/>
                                             </g>
                                         </svg><span style="color: #1BC5BD  ; font-size:20px;padding-left:20px;font-family: Poppins, Helvetica,'sans-serif';">{{$vendor_customer}}</span>
                                         <!--end::Svg Icon-->
                                        </span>
                                         <a href="#" class="text-danger font-weight-bold font-size-h6 mt-2">Total Customer</a>
                                    </div>
                                    <div class="col bg-light-danger px-6 py-8 rounded-xl mr-7">
                                        <span
                                         class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
                                         <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                                         <svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                 width="24px" height="24px" viewBox="0 0 24 24"
                                                 version="1.1">
                                             <g stroke="none" stroke-width="1" fill="none"
                                                 fill-rule="evenodd">
                                                 <polygon points="0 0 24 0 24 24 0 24"/>
                                                 <path
                                                     d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                                     fill="#000000" fill-rule="nonzero"/>
                                                 <path
                                                     d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                                     fill="#000000" opacity="0.3"/>
                                             </g>
                                         </svg><span style="color: #1BC5BD  ; font-size:20px;padding-left:20px;font-family: Poppins, Helvetica,'sans-serif';">{{$vendor_total_order}}</span>
                                         <!--end::Svg Icon-->
                                        </span>
                                         <a href="{{url('vendor-all-order')}}" class="text-danger font-weight-bold font-size-h6 mt-2">Total Order</a>
                                    </div>
                                    <div class="col bg-light-success px-6 py-8 rounded-xl">
                                         <span
                                             class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
                                             <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Urgent-mail.svg-->
                                             <svg xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                     width="24px" height="24px" viewBox="0 0 24 24"
                                                     version="1.1">
                                                 <g stroke="none" stroke-width="1" fill="none"
                                                     fill-rule="evenodd">
                                                     <rect x="0" y="0" width="24" height="24"/>
                                                     <path
                                                         d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z"
                                                         fill="#000000" opacity="0.3"/>
                                                     <path
                                                         d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z"
                                                         fill="#000000"/>
                                                 </g>
                                             </svg>
                                             <span style="color: #F64E60; font-size:20px;padding-left:20px;font-family: Poppins, Helvetica,'sans-serif';">{{$vendor_pending_order}}</span>
                                             <!--end::Svg Icon-->
                                         </span>
                                         <a href="{{url('vendor-pending-order')}}" class="text-success font-weight-bold font-size-h6 mt-2">Pending Order</a>
                                    </div>
                                 </div>                              
                             </div>
                             <div class="card-spacer mt-n25">                     
                                 <div class="row m-0">
                                     <div class="col bg-light-danger px-6 py-8 rounded-xl mr-7">
                                     <span
                                         class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
                                         <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                                         <svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                 width="24px" height="24px" viewBox="0 0 24 24"
                                                 version="1.1">
                                             <g stroke="none" stroke-width="1" fill="none"
                                                 fill-rule="evenodd">
                                                 <polygon points="0 0 24 0 24 24 0 24"/>
                                                 <path
                                                     d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                                     fill="#000000" fill-rule="nonzero"/>
                                                 <path
                                                     d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                                     fill="#000000" opacity="0.3"/>
                                             </g>
                                         </svg>
                                         <span style="color: #1BC5BD; font-size:20px;padding-left:20px;font-family: Poppins, Helvetica,'sans-serif';">{{$vendor_confirm_order}}</span>
                                         <!--end::Svg Icon-->
                                     </span>
                                         <a href="{{url('vendor-confirm-order')}}" class="text-danger font-weight-bold font-size-h6 mt-2">Confirm Order</a>
                                     </div>
                                     <div class="col bg-light-success px-6 py-8 rounded-xl">
                                         <span
                                             class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
                                             <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Urgent-mail.svg-->
                                             <svg xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                     width="24px" height="24px" viewBox="0 0 24 24"
                                                     version="1.1">
                                                 <g stroke="none" stroke-width="1" fill="none"
                                                     fill-rule="evenodd">
                                                     <rect x="0" y="0" width="24" height="24"/>
                                                     <path
                                                         d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z"
                                                         fill="#000000" opacity="0.3"/>
                                                     <path
                                                         d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z"
                                                         fill="#000000"/>
                                                 </g>
                                             </svg>
                                             <span style="color: #F64E60; font-size:20px;padding-left:20px;font-family: Poppins, Helvetica,'sans-serif';">{{$vendor_cancel_order}}</span>
                                             <!--end::Svg Icon-->
                                         </span>
                                         
                                         <a href="{{url('vendor-cancel-order')}}" class="text-success font-weight-bold font-size-h6 mt-2">Cancel Order</a>
                                     </div>
                                 </div>                      
                             </div>
                         </div>
                     <!-- End 1st Card-->
                     </div>
                     <!--end: List Widget 9-->
                </div>
               
            </div>
            <div class="row">
                <div class="col-lg-12 col-xxl-4">
                    <!--begin::List Widget 1-->
                    <div class="card card-custom card-stretch gutter-b" style="padding:20px;">
                        {{-- <div class="card-body py-0"> --}}
                            
                            <br>
                            <table id="usertable" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>SL No.</th>
                                    <th>Track ID</th>
                                    <th>PRICE</th>
                                    <th>STATUS</th>
                                    <th>DATE & TIME</th>
                                    {{-- <th>ACTION</th> --}}
                                </tr>
                                </thead>
                                <tbody>
                                    @php
                                      $i = 1;  
                                    @endphp
                                    @foreach($vendor_order as $order)
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$order->track_id}}</td>
                                        <td>{{$order->price}}&#2547;</td>
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
                                        <td>{{$order->created_at->format('d-m-Y h:i:s A')}}</td>
                                    </tr>
                                    @php
                                      $i++;  
                                    @endphp
                                    @endforeach
                                </tbody>
        
                            </table>
                        {{-- </div> --}}
                        <!--end: Datatable-->
                    </div>
                    <!--end::List Widget 1-->
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
    @elseif(Auth::user()->user_type == 'user')
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Row-->
            <div class="row">
                <div class="col-lg-12 col-xxl-4">
                    <!--begin::List Widget 9-->
                    <div class="card card-custom card-stretch gutter-b">
                        <!-- 1st Card-->
                        <div class="card-body p-0 position-relative overflow-hidden">  
                             <div class="card-spacer mt-n25">                                
                                 <div class="row m-0">
                                    <div class="col bg-light-danger px-6 py-8 rounded-xl mr-7">
                                        <span
                                         class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
                                         <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                                         <svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                 width="24px" height="24px" viewBox="0 0 24 24"
                                                 version="1.1">
                                             <g stroke="none" stroke-width="1" fill="none"
                                                 fill-rule="evenodd">
                                                 <polygon points="0 0 24 0 24 24 0 24"/>
                                                 <path
                                                     d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                                     fill="#000000" fill-rule="nonzero"/>
                                                 <path
                                                     d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                                     fill="#000000" opacity="0.3"/>
                                             </g>
                                         </svg><span style="color: #1BC5BD  ; font-size:20px;padding-left:20px;font-family: Poppins, Helvetica,'sans-serif';">{{$user_total_order}}</span>
                                         <!--end::Svg Icon-->
                                        </span>
                                         <a href="{{url('view-booking-order')}}" class="text-danger font-weight-bold font-size-h6 mt-2">Total Order</a>
                                    </div>
                                    <div class="col bg-light-success px-6 py-8 rounded-xl">
                                         <span
                                             class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
                                             <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Urgent-mail.svg-->
                                             <svg xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                     width="24px" height="24px" viewBox="0 0 24 24"
                                                     version="1.1">
                                                 <g stroke="none" stroke-width="1" fill="none"
                                                     fill-rule="evenodd">
                                                     <rect x="0" y="0" width="24" height="24"/>
                                                     <path
                                                         d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z"
                                                         fill="#000000" opacity="0.3"/>
                                                     <path
                                                         d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z"
                                                         fill="#000000"/>
                                                 </g>
                                             </svg>
                                             <span style="color: #F64E60; font-size:20px;padding-left:20px;font-family: Poppins, Helvetica,'sans-serif';">{{$user_pending_order}}</span>
                                             <!--end::Svg Icon-->
                                         </span>
                                         <a href="{{url('pending-order')}}" class="text-success font-weight-bold font-size-h6 mt-2">Pending Order</a>
                                    </div>
                                 </div>                              
                             </div>
                             <div class="card-spacer mt-n25">                     
                                 <div class="row m-0">
                                     <div class="col bg-light-danger px-6 py-8 rounded-xl mr-7">
                                     <span
                                         class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
                                         <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                                         <svg xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                 width="24px" height="24px" viewBox="0 0 24 24"
                                                 version="1.1">
                                             <g stroke="none" stroke-width="1" fill="none"
                                                 fill-rule="evenodd">
                                                 <polygon points="0 0 24 0 24 24 0 24"/>
                                                 <path
                                                     d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                                     fill="#000000" fill-rule="nonzero"/>
                                                 <path
                                                     d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                                     fill="#000000" opacity="0.3"/>
                                             </g>
                                         </svg>
                                         <span style="color: #1BC5BD; font-size:20px;padding-left:20px;font-family: Poppins, Helvetica,'sans-serif';">{{$user_confirm_order}}</span>
                                         <!--end::Svg Icon-->
                                     </span>
                                         <a href="{{url('completed-order')}}" class="text-danger font-weight-bold font-size-h6 mt-2">Confirm Order</a>
                                     </div>
                                     <div class="col bg-light-success px-6 py-8 rounded-xl">
                                         <span
                                             class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
                                             <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Urgent-mail.svg-->
                                             <svg xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                     width="24px" height="24px" viewBox="0 0 24 24"
                                                     version="1.1">
                                                 <g stroke="none" stroke-width="1" fill="none"
                                                     fill-rule="evenodd">
                                                     <rect x="0" y="0" width="24" height="24"/>
                                                     <path
                                                         d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z"
                                                         fill="#000000" opacity="0.3"/>
                                                     <path
                                                         d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z"
                                                         fill="#000000"/>
                                                 </g>
                                             </svg>
                                             <span style="color: #F64E60; font-size:20px;padding-left:20px;font-family: Poppins, Helvetica,'sans-serif';">{{$user_cancel_order}}</span>
                                             <!--end::Svg Icon-->
                                         </span>
                                         
                                         <a href="{{url('cancel-order')}}" class="text-success font-weight-bold font-size-h6 mt-2">Cancel Order</a>
                                     </div>
                                 </div>                      
                             </div>
                         </div>
                     <!-- End 1st Card-->
                     </div>
                     <!--end: List Widget 9-->
                </div>
               
            </div>
            <div class="row">
                <div class="col-lg-12 col-xxl-4">
                    <!--begin::List Widget 1-->
                    <div class="card card-custom card-stretch gutter-b" style="padding:20px;">
                        {{-- <div class="card-body py-0"> --}}
                            
                            <br>
                            <table id="usertable" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>SL No.</th>
                                    <th>Track ID</th>
                                    <th>PRICE</th>
                                    <th>STATUS</th>
                                    <th>DATE & TIME</th>
                                    {{-- <th>ACTION</th> --}}
                                </tr>
                                </thead>
                                <tbody>
                                    @php
                                      $i = 1;  
                                    @endphp
                                    @foreach($user_order as $order)
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$order->track_id}}</td>
                                        <td>{{$order->price}}&#2547;</td>
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
                                        <td>{{$order->created_at->format('d-m-Y h:i:s A')}}</td>
                                    </tr>
                                    @php
                                      $i++;  
                                    @endphp
                                    @endforeach
                                </tbody>
        
                            </table>
                        {{-- </div> --}}
                        <!--end: Datatable-->
                    </div>
                    <!--end::List Widget 1-->
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
	@endif
@endsection
@section('js')
<!--begin::Page Vendors(used by this page)-->
<script src="admintemplate/assets/plugins/custom/datatables/datatables.bundle.js"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
{{-- <script src="admintemplate/assets/js/pages/crud/datatables/basic/paginations.js"></script> --}}
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script>
    <script>
          $(function () {
            $("#usertable").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });
    </script>
    <script>
        $(function () {
          $("#today_orders").DataTable({
              "responsive": true,
              "autoWidth": false,
          });
      });
  </script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script type="text/javascript">
      var users =  <?php echo json_encode($users) ?>;  
      Highcharts.chart('container', {
          title: {
              text: 'New User Growth,2021'
          },
          subtitle: {
              text: 'Source: Essential-infotech.com'
          },
           xAxis: {
              categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
          },
          yAxis: {
              title: {
                  text: 'Number of New Users'
              }
          },
          legend: {
              layout: 'vertical',
              align: 'right',
              verticalAlign: 'middle'
          },
          plotOptions: {
              series: {
                  allowPointSelect: true
              }
          },
          series: [{
              name: 'New Users',
              data: users
          }],
          responsive: {
              rules: [{
                  condition: {
                      maxWidth: 500
                  },
                  chartOptions: {
                      legend: {
                          layout: 'horizontal',
                          align: 'center',
                          verticalAlign: 'bottom'
                      }
                  }
              }]
          }
  });
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.1.0/echarts.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


    <script type="text/javascript">
        var population = <?php echo $population; ?>;
        console.log(population);
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(lineChart);

        function lineChart() {
            var data = google.visualization.arrayToDataTable(population);
            var options = {
                title: 'Price Highlight',
                curveType: 'function',
                legend: {
                    position: 'bottom'
                }
            };
            var chart = new google.visualization.LineChart(document.getElementById('linechart'));
            chart.draw(data, options);
        }        
    </script>
    <script type="text/javascript">
        var analytics = <?php echo $course; ?>
        console.log(analytics);
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart()
        {
            var data = google.visualization.arrayToDataTable(analytics);
            var options = {
                title : 'Percentage of Students Courses(BCA,BCOM,BSC)'
            };
            var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
            chart.draw(data, options);
        }
    </script>
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
@endsection

