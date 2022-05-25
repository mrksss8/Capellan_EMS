@extends('layout.default')

{{-- Content --}}
@section('content')
    <div class="row">

        {{-- Bgein Tracks Table --}}
        <div class="col-12">
            <div class="row d-flex justify-content-center">
                <div class="col-9 ">
                    <div class="card card-custom">
                        <div class="card-header">
                            <div class="card-title">
                                <span class="card-icon">
                                    <i class="flaticon2-chat-1 text-primary"></i>
                                </span>
                                <h3 class="card-label">
                                    Tracks
                                    <small>sub title</small>
                                </h3>
                            </div>
                            <div class="card-toolbar">
                                <!-- Button trigger modal-->
                                <button type="button" class="btn btn-primary font-weight-bold btn-sm" data-toggle="modal"
                                    data-target="#track"><i class="flaticon2-cube"></i>
                                    Add Track
                                </button>
                            </div>
                        </div>
                        <div class="card-body">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Track Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tracks as $track)
                                        <tr>
                                            <th>{{ $track->id }}</th>
                                            <th>{{ $track->track }}</th>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            {{-- <a href="#" class="btn btn-light-primary font-weight-bold">Manage</a>
                            <a href="#" class="btn btn-outline-secondary font-weight-bold">Learn more</a> --}}
                        </div>
                    </div>
                </div>
            </div>

        </div>
        {{-- End Tracks Table --}}


        {{-- Bgein Strand Table --}}
        <div class="col-12 mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col-9 ">
                    <div class="card card-custom">
                        <div class="card-header">
                            <div class="card-title">
                                <span class="card-icon">
                                    <i class="flaticon2-chat-1 text-primary"></i>
                                </span>
                                <h3 class="card-label">
                                    Strands
                                    <small>sub title</small>
                                </h3>
                            </div>
                            <div class="card-toolbar">
                                <!-- Button trigger modal-->
                                <button type="button" class="btn btn-primary font-weight-bold btn-sm" data-toggle="modal"
                                    data-target="#strand"><i class="flaticon2-cube"></i>
                                    Add Strand
                                </button>
                            </div>
                        </div>
                        <div class="card-body">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Strand</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($strands as $strand)
                                        <tr>
                                            <th>{{ $strand->id }}</th>
                                            <th>{{ $strand->strand }} - ({{ $strand->track->track }} )</th>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            {{-- <a href="#" class="btn btn-light-primary font-weight-bold">Manage</a>
                            <a href="#" class="btn btn-outline-secondary font-weight-bold">Learn more</a> --}}
                        </div>
                    </div>
                </div>
            </div>

        </div>
        {{-- End Strand Table --}}


        {{-- Bgein Specialization Table --}}
        <div class="col-12 mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col-9 ">
                    <div class="card card-custom">
                        <div class="card-header">
                            <div class="card-title">
                                <span class="card-icon">
                                    <i class="flaticon2-chat-1 text-primary"></i>
                                </span>
                                <h3 class="card-label">
                                    Specialization
                                    <small>sub title</small>
                                </h3>
                            </div>
                            <div class="card-toolbar">
                                <!-- Button trigger modal-->
                                <button type="button" class="btn btn-primary font-weight-bold btn-sm" data-toggle="modal"
                                    data-target="#specialization"><i class="flaticon2-cube"></i>
                                    Add Specialization
                                </button>
                            </div>
                        </div>
                        <div class="card-body">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Specialization Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($specializations as $specialization)
                                        <tr>
                                            <th>{{ $specialization->id }}</th>
                                            <th> {{ $specialization->specialization }} /
                                                {{ $specialization->strand->strand }} - ({{ $strand->track->track }} )
                                            </th>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            {{-- <a href="#" class="btn btn-light-primary font-weight-bold">Manage</a>
                            <a href="#" class="btn btn-outline-secondary font-weight-bold">Learn more</a> --}}
                        </div>
                    </div>
                </div>
            </div>

        </div>
        {{-- End Specialization Table --}}

        {{-- Bgein SchoolYear Table --}}
        <div class="col-12 mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col-9 ">
                    <div class="card card-custom">
                        <div class="card-header">
                            <div class="card-title">
                                <span class="card-icon">
                                    <i class="flaticon2-chat-1 text-primary"></i>
                                </span>
                                <h3 class="card-label">
                                    School Year
                                    <small>sub title</small>
                                </h3>
                            </div>
                            <div class="card-toolbar">
                                <!-- Button trigger modal-->
                                <button type="button" class="btn btn-primary font-weight-bold btn-sm" data-toggle="modal"
                                    data-target="#school_year"><i class="flaticon2-cube"></i>
                                    Add School Year
                                </button>
                            </div>
                        </div>
                        <div class="card-body">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">School Year</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($schoolYears as $schoolYear)
                                        <tr>
                                            <th>{{ $schoolYear->id }}</th>
                                            <th> {{ $schoolYear->school_year }}</th>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            {{-- <a href="#" class="btn btn-light-primary font-weight-bold">Manage</a>
                            <a href="#" class="btn btn-outline-secondary font-weight-bold">Learn more</a> --}}
                        </div>
                    </div>
                </div>
            </div>

        </div>
        {{-- End SchoolYearTable --}}
    </div>

    <!-- Track Modal-->
    <div class="modal fade" id="track" data-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Register Track</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <form action="{{ route('track.store') }}" method="POST">
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label>Track <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter Track" name="track" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-primary font-weight-bold"
                            data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary font-weight-bold">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Strand Modal-->
    <div class="modal fade" id="strand" data-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Register Strand</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <form action="{{ route('strand.store') }}" method="POST">
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <div class="form-group">
                                <label for="strand">Select Track <span class="text-danger">*</span></label>
                                <select class="form-control" id="track" name="track">
                                    @foreach ($tracks as $track)
                                        <option value={{ $track->id }}> {{ $track->track }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Strand Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter Strand" name="strand" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-primary font-weight-bold"
                            data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary font-weight-bold">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Specialization Modal-->
    <div class="modal fade" id="specialization" data-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Register Specialization</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <form action="{{ route('specialization.store') }}" method="POST">
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <div class="form-group">
                                <label for="strand">Select Strand <span class="text-danger">*</span></label>
                                <select class="form-control" id="strand" name="strand">

                                    @foreach ($strands as $strand)
                                        <option value={{ $strand->id }}> {{ $strand->strand }} -
                                            ({{ $strand->track->track }})
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Specialization Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter Specialization"
                                name="specialization" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-primary font-weight-bold"
                            data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary font-weight-bold">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- SchoolYear Modal-->
    <div class="modal fade" id="school_year" data-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Register Specialization</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <form action="{{ route('school_year.store') }}" method="POST">
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label>School Year (e.g. 2000-2001) <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter School Year" name="school_year" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-primary font-weight-bold"
                            data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary font-weight-bold">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

{{-- Scripts Section --}}
@section('scripts')
    {{-- <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script> --}}
@endsection
