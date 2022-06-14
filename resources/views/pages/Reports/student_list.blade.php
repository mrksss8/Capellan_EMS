{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.2.3/css/fixedHeader.dataTables.min.css">

    <style>
        thead input {
        width: 100%;
    }
    </style>
@endsection

@section('content')
    <!--begin::Card-->
    <div class="card card-custom">
        <div class="card-header flex-wrap py-5">
            <div class="card-title">
                <h3 class="card-label">
                    Students List Report
                </h3>
            </div>
           
        </div>
        <div class="card-body">
            <!--begin: Datatable-->
            <table class="table table-separate table-head-custom table-checkable" id="example">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Sex</th>
                        <th>Grade</th>
                        <th>Strand - Specialization</th>
                    </tr>
                </thead>

                <tbody>
                     @foreach ($students as $student)
                        
                        <tr>
                            <td>{{ $student->enrollment->student->last_name }}, {{ $student->enrollment->student->first_name }} {{ $student->enrollment->student->middle_name }} {{ $student->enrollment->student->extension }}</td>
                            <td>{{ $student->enrollment->student->sex }}</td>
                            <td>{{ $student->enrollment->grade_level->grade_level}}</td>
                            <td>{{ $student->enrollment->specialization->strand->strand }} - {{ $student->enrollment->specialization->specialization }}</td>
                            
                        </tr>
                    @endforeach 
                </tbody>

            </table>
            <!--end: Datatable-->
        </div>
    </div>
    <!--end::Card-->
@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.2.3/js/dataTables.fixedHeader.min.js"></script>
   

 
    
@endsection

