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
                    Yearly Students Report
                </h3>
            </div>
           
        </div>
        <div class="card-body">
            <!--begin: Datatable-->
            <table class="table table-separate table-head-custom table-checkable" id="example">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Grade</th>
                        {{-- <th>Track</th> --}}
                        <th>Strand</th>
                        <th>Specialization</th>
                    </tr>
                </thead>

                <tbody>
                     @foreach ($students as $student)
                        
                        <tr>
                            <td>{{ $student->enrollment->student->last_name }}, {{ $student->enrollment->student->first_name }} {{ $student->enrollment->student->middle_name }} {{ $student->enrollment->student->extension }}</td>
                            <td>{{ $student->enrollment->grade_level->grade_level}}</td>
                            {{-- <td>{{ $student->enrollment->specialization->strand->track->track }}</td> --}}
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
    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.2.3/js/dataTables.fixedHeader.min.js"></script>
   

    <script>
        $(document).ready(function () {
    // Setup - add a text input to each footer cell
    $('#example thead tr')
        .clone(true)
        .addClass('filters')
        .appendTo('#example thead');
 
    var table = $('#example').DataTable({
        orderCellsTop: true,
        fixedHeader: true,
        initComplete: function () {
            var api = this.api();
 
            // For each column
            api
                .columns()
                .eq(0)
                .each(function (colIdx) {
                    // Set the header cell to contain the input element
                    var cell = $('.filters th').eq(
                        $(api.column(colIdx).header()).index()
                    );
                    var title = $(cell).text();
                    $(cell).html('<input type="text" placeholder="' + title + '" />');
 
                    // On every keypress in this input
                    $(
                        'input',
                        $('.filters th').eq($(api.column(colIdx).header()).index())
                    )
                        .off('keyup change')
                        .on('keyup change', function (e) {
                            e.stopPropagation();
 
                            // Get the search value
                            $(this).attr('title', $(this).val());
                            var regexr = '({search})'; //$(this).parents('th').find('select').val();
 
                            var cursorPosition = this.selectionStart;
                            // Search the column for that value
                            api
                                .column(colIdx)
                                .search(
                                    this.value != ''
                                        ? regexr.replace('{search}', '(((' + this.value + ')))')
                                        : '',
                                    this.value != '',
                                    this.value == ''
                                )
                                .draw();
 
                            $(this)
                                .focus()[0]
                                .setSelectionRange(cursorPosition, cursorPosition);
                        });
                });
        },
    });
});
    </script>
    
@endsection
