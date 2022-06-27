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
                    List of Students - Report
                    <div class="text-muted pt-2 font-size-sm">Below is the list of enrolled student this school year</div>
                </h3>
            </div>
           
        </div>
        <div class="card-body">
            <!--begin: Datatable-->
            <table class="table table-separate table-head-custom table-checkable" id="example">
                <thead>
                    <tr>
                        <th>Action</th>
                        <th>Full Name</th>
                        <th>Grade</th>
                        <th>Track</th>
                        <th>Strand</th>
                        <th>Specialization</th>
                </thead>

                <tbody>
                     @foreach ($students as $student)
                        <tr>
                            <td><a href="{{route('acc_report.show', $student->id)}}">View</a></td>
                            <td>{{ $student->enrollment->student->last_name }}, {{ $student->enrollment->student->first_name }} {{ $student->enrollment->student->middle_name }}</td>
                            <td>{{ $student->enrollment->grade_level->grade_level }}</td>
                            <td>{{ $student->enrollment->specialization->strand->track->track }}</td>
                            <td>{{ $student->enrollment->specialization->strand->strand }}</td>
                            <td>{{ $student->enrollment->specialization->specialization }}</td>
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
    {{-- <script src="{{ asset('plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('js/pages/crud/datatables/advanced/column-rendering.js') }}"></script> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}
    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.2.3/js/dataTables.fixedHeader.min.js"></script>
   

    <script>

        $(document).ready( function () {
            $('#example').DataTable();
        } );
    </script>
    
    
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>

    <script>

        $(document).ready(function() {
            $('#example').DataTable({
                 dom: 'Bfrtip',
                  buttons: [
                      'copyHtml5',
                      'excelHtml5',
                      // 'csvHtml5',
                      'pdfHtml5',
                      'print'
                  ]
             });
            });
    </script>

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css"> 
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css"> --}}
@endsection
