{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
    <div class="content d-flex flex-column flex-column-fluid pt-0" id="kt_content">
        <!--begin::Subheader-->
        <!--end::Subheader-->
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
            </div>
            <div class="card-body">

                <!--begin::Entry-->
                <div class="d-flex flex-column-fluid">
                    <!--begin::Container-->
                    <div class="container">

                        <form action="{{ route('enroll_new_student.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="lrn">LRN</label>
                                        <input type="number" class="form-control" id="lrn" name="lrn" placeholder="LRN">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="std_num">Student No.</label>
                                        <input type="number" class="form-control" id="std_num" name="std_num"
                                            placeholder="Student No.">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="grade">
                                        {{-- <span class="text-danger">*</span> --}}
                                        Grade
                                    </label>
                                    <select class="custom-select custom-select-sm" name="grade_level">
                                        <option selected disabled>Choose Grade level</option>
                                       @foreach ($gradelevels as $gradelevel)
                                       <option value="{{ $gradelevel->id }}">{{ $gradelevel->grade_level }}</option>
                                       @endforeach
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="section">
                                        {{-- <span class="text-danger">*</span> --}}
                                        School Year
                                    </label>
                                    <select class="custom-select custom-select-sm" name="school_year">
                                        <option selected disabled>Choose School Year</option>
                                        @foreach ($schoolyears as $schoolyear)
                                            <option value="{{ $schoolyear->id }}">{{ $schoolyear->school_year }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <label for="track">Track:</label>
                                    {{-- <select class="custom-select custom-select-sm" name="track">

                                        <option selected disabled>Choose Track</option>
                                        @foreach ($tracks as $track)
                                            <option value={{ $track->id }}> {{ $track->track }}</option>
                                        @endforeach

                                    </select> --}}

                                    <select name="track" id="track" class="form-control">
                                        <option selected disabled>Select Track</option>
                                        @foreach ($tracks as $track)
                                            <option value="{{ $track->id }}">{{ $track->track }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    {{-- <label for="strand">
                                        Strand
                                    </label> --}}
                                    {{-- <select class="custom-select custom-select-sm" name="strand">

                                        <option selected disabled>Choose Strand</option>
                                        @foreach ($strands as $strand)
                                            <option value={{ $strand->id }}> {{ $strand->strand }}</option>
                                        @endforeach

                                    </select> --}}
                                    <div class="form-group">
                                        <label for="strand">Strand:</label>
                                        <select name="strand" id="strand" class="form-control"></select>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    {{-- <label for="specialization">
                                        Specialization
                                    </label> --}}
                                    {{-- <select class="custom-select custom-select-sm" name="specialization">

                                        <option selected disabled>Choose Specialization</option>
                                        @foreach ($specializations as $specialization)
                                            <option value={{ $specialization->id }}>
                                                {{ $specialization->specialization }}</option>
                                        @endforeach

                                    </select> --}}
                                    <div class="form-group">
                                        <label for="specialization">Specialization:</label>
                                        <select name="specialization" id="specialization" class="form-control"></select>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="text-center h2 pb-3 pt-5 my-5">
                                Student Information
                            </div>




                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" class="form-control" id="last_name" name="last_name"
                                            placeholder="Last Name">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="first_name">First Name</label>
                                        <input type="text" class="form-control" id="first_name" name="first_name"
                                            placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="middle_name">Middle Name</label>
                                        <input type="text" class="form-control" id="middle_name" name="middle_name"
                                            placeholder="Middle Name">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="extension">Extension Name</label>
                                        <input type="text" class="form-control" id="extension" name="extension"
                                            placeholder="Extension Name">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="civil_status">Civil Status</label>
                                        <input type="text" class="form-control" id="civil_status" name="civil_status"
                                            placeholder="Civil Status">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="age">Age</label>
                                        <input type="number" class="form-control" id="age" name="age" placeholder="Age">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="sex">
                                        {{-- <span class="text-danger">*</span> --}}
                                        Sex
                                    </label>
                                    <select class="custom-select custom-select-sm" name="sex">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="nationality">Nationality</label>
                                        <input type="text" class="form-control" id="nationality" name="nationality"
                                            placeholder="Nationality">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="b_date">Birthdate</label>
                                        <input type="date" class="form-control" id="b_date" name="b_date"
                                            placeholder="Birthdate">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="contact_num">Contact Number</label>
                                        <input type="number" class="form-control" id="contact_num" name="contact_num"
                                            placeholder="Contact Number">
                                    </div>
                                </div>
                            </div>

                            <div class="text-center h2 pb-3 pt-5 my-5">
                                Address
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="house_num">House No./Street</label>
                                        <input type="text" class="form-control" id="house_num" name="house_num"
                                            placeholder="House No./Street">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="purok">Purok</label>
                                        <input type="text" class="form-control" id="purok" name="purok"
                                            placeholder="Purok">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="brgy">Barangay</label>
                                        <input type="text" class="form-control" id="brgy" name="brgy"
                                            placeholder="Barangay">
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="municipality">Municipality</label>
                                        <input type="text" class="form-control" id="municipality" name="municipality"
                                            placeholder="Municipality">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="province">Province</label>
                                        <input type="text" class="form-control" id="province" name="province"
                                            placeholder="Province">
                                    </div>
                                </div>
                            </div>

                            <div class="text-center h2 pb-3 pt-5 my-5">
                                Parent's / Guardian's Information
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f_name">Father's Name</label>
                                        <input type="text" class="form-control" id="f_name" name="f_name"
                                            placeholder="Father's Name">
                                        <small id="labelf_name" class="form-text text-info font-italic">(Last Name, First
                                            Name,
                                            Middle Name)</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="f_occu">Father's Occupation</label>
                                        <input type="text" class="form-control" id="f_occu" name="f_occu"
                                            placeholder="Father's Occupation">
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="m_name">Mother's Name</label>
                                        <input type="text" class="form-control" id="m_name" name="m_name"
                                            placeholder="Mother's Name">
                                        <small id="labelm_name" class="form-text text-info font-italic">(Last Name, First
                                            Name,
                                            Middle Name)</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="m_occu">Mother's Occupation</label>
                                        <input type="text" class="form-control" id="m_occu" name="m_occu"
                                            placeholder="Mother's Occupation">
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="g_name">Guardian's Name</label>
                                        <input type="text" class="form-control" id="g_name" name="g_name"
                                            placeholder="Guardian's Name">
                                        <small id="labelg_name" class="form-text text-info font-italic">(Last Name, First
                                            Name,
                                            Middle Name)</small>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="relationship">Relationship</label>
                                        <input type="text" class="form-control" id="relationship" name="relationship"
                                            placeholder="Relationship">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="g_contact_num">Contact No. of Guardian</label>
                                        <input type="number" class="form-control" id="g_contact_num" name="g_contact_num"
                                            placeholder="Contact No. of Guardian">
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="g_add">Address of Guardian</label>
                                        <input type="text" class="form-control" id="g_add" name="g_add"
                                            placeholder="Address of Guardian">
                                        <small id="labelg_address" class="form-text text-info font-italic">(House
                                            No./Street)
                                            (Purok) (Barangay) (Municipality) (Province)</small>
                                    </div>
                                </div>
                            </div>


                            <div class="text-center h2 pb-3 pt-5 my-5">
                                Previous School Information
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="prev_school">School Last Attended</label>
                                        <input type="text" class="form-control" id="prev_school" name="prev_school"
                                            placeholder="School Last Attended">
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="jhs_yrs">No. of Years in JHS</label>
                                        <input type="text" class="form-control" id="jhs_yrs" name="jhs_yrs"
                                            placeholder="No. of Years in JHS">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="year_grad">Year Graduated</label>
                                        <input type="text" class="form-control" id="year_grad" name="year_grad"
                                            placeholder="Year Graduated">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="gen_ave">General Average</label>
                                        <input type="text" class="form-control" id="gen_ave" name="gen_ave"
                                            placeholder="General Average">
                                    </div>
                                </div>
                            </div>

                            <div class="text-center h2 pb-3 pt-5 my-5">
                                Educational Background
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="prim_grade">Primary Grade</label>
                                        <input type="text" class="form-control" id="prim_grade" name="prim_grade"
                                            placeholder="Primary Grade">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="prim_grade_yr">Year Graduated</label>
                                        <input type="text" class="form-control" id="prim_grade_yr" name="prim_grade_yr"
                                            placeholder="Year Graduated">
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="intermediate">Intermediate</label>
                                        <input type="text" class="form-control" id="intermediate" name="intermediate"
                                            placeholder="Intermediate">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="intermediate_yr">Year Graduated</label>
                                        <input type="text" class="form-control" id="intermediate_yr"
                                            name="intermediate_yr" placeholder="Year Graduated">
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="junior_hs">Junior High School</label>
                                        <input type="text" class="form-control" id="junior_hs" name="junior_hs"
                                            placeholder="Junior High School">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="junior_hs_yr">Year Graduated</label>
                                        <input type="text" class="form-control" id="junior_hs_yr" name="junior_hs_yr"
                                            placeholder="Year Graduated">
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="sr_hs">Senior High School</label>
                                        <input type="text" class="form-control" id="sr_hs" name="sr_hs"
                                            placeholder="Senior High School">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="sr_hs_yr">Year Graduated</label>
                                        <input type="text" class="form-control" id="sr_hs_yr" name="sr_hs_yr"
                                            placeholder="Year Graduated">
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="college">College</label>
                                        <input type="text" class="form-control" id="college" name="college"
                                            placeholder="College">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="college_yr">Year Graduated</label>
                                        <input type="text" class="form-control" id="college_yr" name="college_yr"
                                            placeholder="Year Graduated">
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">

                                <button type="reset" class="btn btn-danger mr-2">Clear Form</button>
                                <button type="submit" class="btn btn-primary">Submit Form</button>

                            </div>
                        </form>

                        {{-- </div> --}}
                        <!--end::Row-->

                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Entry-->

            </div>
            <div class="card-footer d-flex justify-content-between">
                {{-- <a href="#" class="btn btn-light-primary font-weight-bold">Manage</a>
                <a href="#" class="btn btn-outline-secondary font-weight-bold">Learn more</a> --}}
            </div>
        </div>

    </div>

    {{-- <div class="card">
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="country">Country:</label>
                    <select name="country" id="track" class="form-control">
                        <option value="">Select Track</option>
                        @foreach ($tracks as $track)
                            <option value="{{ $track->id }}">{{ $track->track }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="state">Strand:</label>
                    <select name="state" id="strand" class="form-control"></select>
                </div>
                <div class="form-group">
                    <label for="city">City:</label>
                    <select name="city" id="specialization" class="form-control"></select>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div> --}}
@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script>
        $(document).ready(function() {
            $("#track").change(function() {
                var trackID = $(this).val();
                if (trackID) {
                    $.ajax({
                        type: 'GET',
                        url: '{{ route('get_strand') }}',
                        data: {
                            "track_id": trackID
                        },
                        success: function(res) {
                            $("#strand").empty();
                            $("#strand").append('<option selected disabled>Select Strand</option>');
                            $.each(res, function(key, value) {
                                $("#strand").append('<option value="' + value.id +
                                    '">' + value.strand + '</option>');
                            });

                        }
                    });
                }
            });
            $('#strand').on('change', function() {
                var strandID = $(this).val();
                if (strandID) {
                    $.ajax({
                        type: "GET",
                        url: "{{ route('get_specialization') }}",
                        data: {
                            "strand_id": strandID
                        },
                        success: function(res) {
                            if (res) {
                                $("#specialization").empty();
                                $("#specialization").append(
                                    '<option selected disabled>Select Specialization</option>');
                                $.each(res, function(key, value) {
                                    $("#specialization").append('<option value="' + value.id + '">' + value.specialization +
                                        '</option>');
                                });
                            }
                        }
                    });
                }
            });
        });
    </script>
@endsection
