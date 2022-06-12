{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('styles')
@endsection

@section('content')
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Profile Personal Information-->
            <div class="d-flex flex-row">
                <!--begin::Aside-->
                <div class="flex-row-auto offcanvas-mobile w-250px w-xxl-350px" id="kt_profile_aside">
                    <!--begin::Profile Card-->
                    <div class="card card-custom card-stretch">
                        <!--begin::Body-->
                        <div class="card-body pt-4">
                            <!--begin::Toolbar-->
                            <div class="d-flex justify-content-center">
                                <div class="dropdown dropdown-inline">
                                    <span class = "text-primary">
                                        Download Student Info
                                        </span>
                                    <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="flaticon-download"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                        <!--begin::Navigation-->
                                        <ul class="navi navi-hover py-5">
                                            <li class="navi-item">
                                                <a href="{{ route('sis.index', $students->enrollment->student->id) }}" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon-attachment"></i>
                                                    </span>
                                                    <span class="navi-text text-center">Student Information Sheet</span>
                                                </a>
                                            </li>
                                            {{-- <li class="navi-item">
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
                                            </li> --}}
                                        </ul>
                                        <!--end::Navigation-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Toolbar-->
                            <!--begin::User-->
                            <div class="d-flex align-items-center">
                                {{-- <div class="symbol symbol-60 symbol-xxl-100 align-self-start align-self-xxl-center w-100 h-100">
                                <div class="symbol-label" style="background-image:url('/metronic/theme/html/demo1/dist/assets/media/users/300_21.jpg')" style="width: 200px"></div>
                                <i class="symbol-badge bg-success"></i> 
                            </div>
                          <div>
                                <a href="#" class="font-weight-bolder font-size-h5 text-dark-75 text-hover-primary">James Jones</a>
                                <div class="text-muted">Application Developer</div>
                            </div> --}}
                                <div class="text-center justify-content-center mx-auto my-3">
                                    <img class="rounded" src="{{ asset('media/capellan/no-profile-image.png') }}"
                                        alt="Image" height="150px" width="150px">
                                </div>
                                {{-- <img clas="symbol rounded mx-auto d-block" src="{{ asset('media/logos/capellan_logo.png') }}" alt=""> --}}

                            </div>
                            <!--end::User-->
                            <!--begin::Contact-->
                            <div class="py-9">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="font-weight-bold m-auto font-italic">{{ $students->enrollment->student->last_name }}, {{ $students->enrollment->student->first_name }} {{ $students->enrollment->student->middle_name }} {{ $students->enrollment->student->extension }}</span>
                                    
                                    {{-- <p class="text-muted text-hover-primary">{{$students->enrollment->student->last_name}}, {{$students->enrollment->student->first_name}} {{$students->enrollment->student->middle_name}} {{$students->enrollment->student->extension}}</p> --}}
                                </div>
                                <div class="d-flex align-items-center mb-2 ">
                                    <span class="font-weight-bold m-auto font-italic">{{ $students->enrollment->student->std_num }}</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="font-weight-bold m-auto font-italic">{{ $students->enrollment->grade_level->grade_level }}</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="font-weight-bold m-auto font-italic">{{ $students->enrollment->specialization->strand->track->track }}: {{ $students->enrollment->specialization->strand->strand }} ({{ $students->enrollment->specialization->specialization }})</span>
                                </div>
                            </div>
                            <!--end::Contact-->
                            <!--begin::Nav-->
                            <div class="navi navi-bold navi-hover navi-active navi-link-rounded">
                                {{-- <div class="navi-item mb-2">
                                <a href="/metronic/demo1/custom/apps/profile/profile-1/overview.html" class="navi-link py-4">
                                    <span class="navi-icon mr-2">
                                        <span class="svg-icon">
                                            <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/Layers.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                    <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero"></path>
                                                    <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3"></path>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                    <span class="navi-text font-size-lg">Generate Enrollment Form</span>
                                </a>
                            </div> --}}



                                <ul class="nav nav-tabs navi-item mb-2" role="tablist">
                                    <li role="presentation" class="navi-link py-4 active">

                                        <span class="svg-icon svg-icon-2x px-4">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                    <path
                                                        d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                                        fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                    <path
                                                        d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                                        fill="#000000" fill-rule="nonzero"></path>
                                                </g>
                                            </svg>
                                        </span>
                                        <a href="#personal" aria-controls="home" role="tab" data-toggle="tab"><span
                                                class="navi-text">Personal Info</span></a>
                                    </li>

                                    <li role="presentation" class="navi-link py-4">
                                        <span class="svg-icon svg-icon-2x px-4">
                                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Communication/Group.svg--><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <path
                                                        d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                                        fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                    <path
                                                        d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                                        fill="#000000" fill-rule="nonzero" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <a href="#parent" aria-controls="profile" role="tab" data-toggle="tab"><span
                                                class="navi-text">Parent/Guardian Info</span></a>
                                    </li>

                                    <li role="presentation" class="navi-link py-4">
                                        <span class="svg-icon svg-icon-2x px-4">
                                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Home/Library.svg--><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path
                                                        d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z"
                                                        fill="#000000" />
                                                    <rect fill="#000000" opacity="0.3"
                                                        transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) "
                                                        x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <a href="#school" aria-controls="messages" role="tab" data-toggle="tab"><span
                                                class="navi-text">Previous School Info</span></a>
                                    </li>
                                    {{-- <li role="presentation" class="navi-link py-4"><a href="#settings"
                                            aria-controls="settings" role="tab" data-toggle="tab">Documents</a></li> --}}
                                </ul>









                            </div>
                            <!--end::Nav-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Profile Card-->
                </div>
                <!--end::Aside-->
                <!--begin::Content-->
                <div class="flex-row-fluid ml-lg-8">
                    <!--begin::Card-->
                    <div class="card card-custom card-stretch">
                        <!--begin::Header-->
                        <div class="card-header py-3 bg-primary">
                            <div class="card-title align-items-start flex-column">
                                <h3 class="card-label font-weight-bolder text-light my-auto">Student Information</h3>
                                {{-- <span class="text-muted font-weight-bold font-size-sm mt-1">This is the student's
                                    information.</span> --}}
                            </div>
                            <div class="card-toolbar">
                                <a class="btn btn-success mr-2" href="{{route('enrolled_student.edit', $students->enrollment->student->id)}}"> <span class="menu-icon flaticon-edit-1">
                                </span>
                                Edit Info</a>
                                {{-- <button type="reset" class="btn btn-secondary">Cancel</button> --}}
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Form-->
                        <form class="form">
                            <!--begin::Body-->
                            <div class="card-body">
                               



                                <div class="portlet light bordered">
                                    <div class="portlet-body">
                                        <div>

                                            <!-- Nav tabs -->


                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <!-- Personal Information -->
                                                <div role="tabpanel" class="tab-pane active" id="personal">
                                                    <div class="row">
                                                        <label class="col-xl-3"></label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <h5 class="font-weight-bold mb-6">Personal Information</h5>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-2">
                                                        <label class="col-xl-3 col-lg-12 col-form-label">Last Name</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control form-control-sm form-control-solid"
                                                                type="text" value="{{ $students->enrollment->student->last_name }}"
                                                                disabled>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row mb-2">
                                                        <label class="col-xl-3 col-lg-12 col-form-label">First Name</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control form-control-sm form-control-solid"
                                                                type="text" value="{{ $students->enrollment->student->first_name }}"
                                                                disabled>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-2">
                                                        <label class="col-xl-3 col-lg-12 col-form-label">Middle Name</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control form-control-sm form-control-solid"
                                                                type="text" value="{{ $students->enrollment->student->middle_name }}"
                                                                disabled>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-2">
                                                        <label class="col-xl-3 col-lg-12 col-form-label">Extension Name</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control form-control-sm form-control-solid"
                                                                type="text" value="{{ $students->enrollment->student->extension }}"
                                                                disabled>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-2">
                                                        <label class="col-xl-3 col-lg-12 col-form-label">LRN</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control form-control-sm form-control-solid"
                                                                type="text" value="{{ $students->enrollment->student->lrn }}"
                                                                disabled>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-2">
                                                        <label class="col-xl-3 col-lg-12 col-form-label">Birthday</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control form-control-sm form-control-solid"
                                                                type="text" value="{{ $students->enrollment->student->b_date }}"
                                                                disabled>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-2">
                                                        <label class="col-xl-3 col-lg-12 col-form-label">Age</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control form-control-sm form-control-solid"
                                                                type="text" value="{{ $students->enrollment->student->age }}"
                                                                disabled>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-2">
                                                        <label class="col-xl-3 col-lg-12 col-form-label">Sex</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control form-control-sm form-control-solid"
                                                                type="text" value="{{ $students->enrollment->student->sex }}"
                                                                disabled>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-2">
                                                        <label class="col-xl-3 col-lg-12 col-form-label">Civil Status</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control form-control-sm form-control-solid"
                                                                type="text" value="{{ $students->enrollment->student->civil_status }}"
                                                                disabled>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-2">
                                                        <label class="col-xl-3 col-lg-12 col-form-label">Nationality</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control form-control-sm form-control-solid"
                                                                type="text" value="{{ $students->enrollment->student->nationality }}"
                                                                disabled>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-2">
                                                        <label class="col-xl-3 col-lg-12 col-form-label">Contact Number</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control form-control-sm form-control-solid"
                                                                type="text" value="{{ $students->enrollment->student->contact_num }}"
                                                                disabled>
                                                        </div>
                                                    </div>

                                                    <div class="row">
														<label class="col-xl-3"></label>
														<div class="col-lg-9 col-xl-6">
															<h5 class="font-weight-bold mt-10 mb-6">Address</h5>
														</div>
													</div>
                                                    <div class="form-group row mb-2">
                                                        <label class="col-xl-3 col-lg-12 col-form-label">House Number/Street</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control form-control-sm form-control-solid"
                                                                type="text" value="{{ $students->enrollment->student->house_num }}"
                                                                disabled>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-2">
                                                        <label class="col-xl-3 col-lg-12 col-form-label">Purok</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control form-control-sm form-control-solid"
                                                                type="text" value="{{ $students->enrollment->student->purok }}"
                                                                disabled>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-2">
                                                        <label class="col-xl-3 col-lg-12 col-form-label">Barangay</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control form-control-sm form-control-solid"
                                                                type="text" value="{{ $students->enrollment->student->brgy }}"
                                                                disabled>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-2">
                                                        <label class="col-xl-3 col-lg-12 col-form-label">Municipality</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control form-control-sm form-control-solid"
                                                                type="text" value="{{ $students->enrollment->student->municipality }}"
                                                                disabled>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-2">
                                                        <label class="col-xl-3 col-lg-12 col-form-label">Province</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control form-control-sm form-control-solid"
                                                                type="text" value="{{ $students->enrollment->student->province }}"
                                                                disabled>
                                                        </div>
                                                    </div>


                                                </div>

                                                <!-- Parents/Guardians Information -->
                                                <div role="tabpanel" class="tab-pane" id="parent">
                                                    <div class="row">
                                                        <label class="col-xl-3"></label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <h5 class="font-weight-bold mb-6">Parents/Guardian Information</h5>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-2">
                                                        <label class="col-xl-3 col-lg-12 col-form-label">Father's Name</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control form-control-sm form-control-solid"
                                                                type="text" value="{{ $students->enrollment->student->f_name }}"
                                                                disabled>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-2">
                                                        <label class="col-xl-3 col-lg-12 col-form-label">Father's Occupation</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control form-control-sm form-control-solid"
                                                                type="text" value="{{ $students->enrollment->student->f_occu }}"
                                                                disabled>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-2">
                                                        <label class="col-xl-3 col-lg-12 col-form-label">Mother's Name</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control form-control-sm form-control-solid"
                                                                type="text" value="{{ $students->enrollment->student->m_name }}"
                                                                disabled>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-2">
                                                        <label class="col-xl-3 col-lg-12 col-form-label">Mother's Occupation</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control form-control-sm form-control-solid"
                                                                type="text" value="{{ $students->enrollment->student->m_occu }}"
                                                                disabled>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-2">
                                                        <label class="col-xl-3 col-lg-12 col-form-label">Guardian's Name</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control form-control-sm form-control-solid"
                                                                type="text" value="{{ $students->enrollment->student->g_name }}"
                                                                disabled>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-2">
                                                        <label class="col-xl-3 col-lg-12 col-form-label">Relationship</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control form-control-sm form-control-solid"
                                                                type="text" value="{{ $students->enrollment->student->relationship }}"
                                                                disabled>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-2">
                                                        <label class="col-xl-3 col-lg-12 col-form-label">Guardian's Contact Number</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control form-control-sm form-control-solid"
                                                                type="text" value="{{ $students->enrollment->student->g_contact_num }}"
                                                                disabled>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-2">
                                                        <label class="col-xl-3 col-lg-12 col-form-label">Guardian's Address</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control form-control-sm form-control-solid"
                                                                type="text" value="{{ $students->enrollment->student->g_add }}"
                                                                disabled>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div role="tabpanel" class="tab-pane" id="school">
                                                    <div class="row">
                                                        <label class="col-xl-3"></label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <h5 class="font-weight-bold mb-6">Previous School Information</h5>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-2">
                                                        <label class="col-xl-3 col-lg-12 col-form-label">School Last Attended</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control form-control-sm form-control-solid"
                                                                type="text" value="{{ $students->enrollment->student->prev_school }}"
                                                                disabled>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-2">
                                                        <label class="col-xl-3 col-lg-12 col-form-label">No. of Years in JHS</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control form-control-sm form-control-solid"
                                                                type="text" value="{{ $students->enrollment->student->jhs_yrs }}"
                                                                disabled>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-2">
                                                        <label class="col-xl-3 col-lg-12 col-form-label">Year Graduated</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control form-control-sm form-control-solid"
                                                                type="text" value="{{ $students->enrollment->student->year_grad }}"
                                                                disabled>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-2">
                                                        <label class="col-xl-3 col-lg-12 col-form-label">General Average</label>
                                                        <div class="col-lg-9 col-xl-8">
                                                            <input class="form-control form-control-sm form-control-solid"
                                                                type="text" value="{{ $students->enrollment->student->gen_ave }}"
                                                                disabled>
                                                        </div>
                                                    </div>

                                                  
                                                        <br>
                                                        <div class="table-responsive mt-5">
                                      <!--begin: Datatable-->
                                      <table class="table table-separate table-head-custom mt-4" id="example">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th>Year Graduated</th>
                                            </tr>
                                        </thead>
                        
                                        <tbody>
                                                <tr>
                                                    <td class="font-weight-bolder">Primary Grade</td>
                                                    <td>{{ $students->enrollment->student->prim_grade }}</td>
                                                   <td>{{ $students->enrollment->student->prim_grade_yr }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bolder">Intermediate Grade</td>
                                                    <td>{{ $students->enrollment->student->intermediate }}</td>
                                                   <td>{{ $students->enrollment->student->intermediate_yr }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bolder">Junior High School</td>
                                                    <td>{{ $students->enrollment->student->junior_hs }}</td>
                                                   <td>{{ $students->enrollment->student->junior_hs_yr }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bolder">Senior High School</td>
                                                    <td>{{ $students->enrollment->student->sr_hs }}</td>
                                                   <td>{{ $students->enrollment->student->sr_hs_yr }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bolder">College</td>
                                                    <td>{{ $students->enrollment->student->college }}</td>
                                                   <td>{{ $students->enrollment->student->college_yr }}</td>
                                                </tr>
                                        </tbody>
                        
                                    </table>
                                    <!--end: Datatable-->
                                                    </div>
              

                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="settings">Settings</div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--end::Body-->
                        </form>
                        <!--end::Form-->
                    </div>
                </div>



            </div>
            <!--end::Content-->
        </div>
        <!--end::Profile Personal Information-->
    </div>
    <!--end::Container-->
@endsection

{{-- Scripts Section --}}
@section('scripts')
    {{-- <script>
        var triggerTabList = [].slice.call(document.querySelectorAll('#myTab a'))
triggerTabList.forEach(function (triggerEl) {
  var tabTrigger = new bootstrap.Tab(triggerEl)

  triggerEl.addEventListener('click', function (event) {
    event.preventDefault()
    tabTrigger.show()
  })
})
    </script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection
