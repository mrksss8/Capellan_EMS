{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('styles')
@endsection

@section('content')
    <div class="row mb-20">

        <div class="col-md-12">
            <div class="card card-custom mt-7">
                <div class="card-header">
                    <div class="card-title">
                        <span class="card-icon">
                            <i class="flaticon2-chat-1 text-primary"></i>
                        </span>
                        <h3 class="card-label">
                            Add Students to Section
                        </h3>
                        <small>Below is the student without Section</small>
                    </div>
                    <div class="card-toolbar">
                        <!-- Button trigger modal-->
                        {{-- <button type="button" class="btn btn-primary font-weight-bold btn-sm" data-toggle="modal"
                            data-target="#section"><i class="flaticon2-cube"></i>
                            Add Section
                        </button> --}}
                    </div>
                </div>
                <form action="{{ route('add_student_to_section.store') }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="card-body">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Check</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Grade</th>
                                    <th scope="col">Strand/Specialization</th>
                                    <th scope="col">Gender</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($student_without_sections->where('status',1) as $student)
                                    <tr>

                                        <td class="text-center"> <input class="form-check-input" type="checkbox"
                                                name="student_id[]" value="{{ $student->id }}">
                                        </td>
                                        <td>{{ $student->last_name }}, {{ $student->first_name }}
                                            {{ $student->middle_name }}
                                        </td>

                                        <td>{{ $student->enrollment->grade_level->grade_level }} </td>

                                        <td>{{ $student->enrollment->specialization->strand->strand }} / <strong>
                                                {{ $student->enrollment->specialization->specialization }} </strong></td>
                                        <td> {{ $student->sex }}</td>
                                    @empty
                                        <td colspan="5" class="text-warning text-center ">No Data for not Enrrolled
                                            Student</td>
                                @endforelse
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer d-flex justify-content-center align-items-center">
                        <div class="col-md-9">
                            <select class="custom-select custom-select-sm" name="section_id">
                                <option selected disabled>Select Section</option>

                                @foreach ($sections as $section)
                                    <option value="{{ $section->id }}">{{ $section->specialization->specialization }} -
                                        {{ $section->section }} - {{ $section->gradelevel->grade_level }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <div class="card-footer text-center p-5">
                        <button type="submit" class="btn btn-primary btn-md">Submit</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <div class="row">
        @foreach ($sections as $section)
            <div class="col-md-6">
                <div class="card card-custom mt-7">
                    <div class="card-header">
                        <div class="card-title">
                            <span class="card-icon">
                                <i class="flaticon2-chat-1 text-primary"></i>
                            </span>
                            <h3 class="card-label">
                                {{ $section->gradelevel->grade_level }} -
                                {{ $section->specialization->specialization }} - {{ $section->section }}
                                {{-- <small>sub title</small> --}}
                            </h3>
                        </div>
                        <div class="card-toolbar">
                            <!-- Button trigger modal-->
                            {{-- <button type="button" class="btn btn-primary font-weight-bold btn-sm" data-toggle="modal"
                                data-target="#section"><i class="flaticon2-cube"></i>
                                Add Section
                            </button> --}}
                        </div>
                    </div>
                    <div class="card-body">

                        <table class="table">
                            <thead>
                                <tr>
                                    <td></td>
                                    <th scope="col">Name</th>
                                    <th scope="col">Gender</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($section->specialization->enrollment->where('section_id', $section->id)->where('school_year_id', '=', $active->active_SY_id)->where('sem_id','=', $active->active_sem_id) as $enrollment)
                                    <tr>

                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            {{ $enrollment->student->last_name }},
                                            {{ $enrollment->student->first_name }}
                                            {{ $enrollment->student->middle_name }}
                                        </td>
                                        <td>
                                            {{ $enrollment->student->sex }}
                                        </td>
                                    </tr>
                                @empty
                                    <td colspan="4" class="text-center">
                                        No Students Yet
                                    </td>
                                @endforelse


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
