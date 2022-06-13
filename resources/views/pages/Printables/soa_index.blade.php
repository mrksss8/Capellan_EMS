<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statement of Accounts</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            /* background-color: aqua; */
        }

        .border {
            margin: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .border-line {
            border: 1px solid black;
        }

        .container {
            width: 8.5in;
            height: 11in;
            background: white;
            color: black !important;
            width: 8.5in !important;
            height: 13.97in !important;
            padding: 5px;
            position: relative;
        }

        .container .header {
            background-color: white;
            display: flex;
            /* border: 1px solid red; */
            padding: 5px 30px 0 30px;
            /* justify-content: space-between; */
        }

        .container .header .deped-logo-wrapper {
            /* padding-left: 50px; */
            padding-left: 30px;
            flex: 1;

        }

        .container .header .deped-logo-wrapper .deped-logo img {
            width: 80px;
            height: auto;
            padding: 15px;
        }

        .container .header .header-title .header-title-text {
            text-align: center;
            flex: 3;

        }

        .container .header .header-title .header-title-text p {
            /* font-family:Georgia, 'Times New Roman', Times, serif; */
            font-weight: 900;
            line-height: 1.85rem;
            font-size: large;
        }

        .container .header .header-title .header-title-text .school-year p {
            font-weight: 700;
            font-style: italic;
            font-size: 1.15rem;
        }

        .container .header .capellan-logo-wrapper {
            padding-right: 30px;
            flex: 1;
            text-align: end;
        }

        .container .header .capellan-logo-wrapper .capellan-logo img {
            width: 80px;
            height: auto;
            padding: 15px;
        }

        .container .header .capellan-logo-wrapper p {
            padding-top: 0;
            font-weight: 500;
            font-style: italic;
        }

        hr {
            color: black;
            background: black;
            margin: 10px 30px 20px 30px;
        }

        .container .content {
            padding-left: 30px;
            padding-right: 30px;
            line-height: 1.7rem;
        }

        .container .content p {
            font-weight: 700;
        }

        .container .content span {
            font-weight: 400;
        }

        .container .content .summary-of-transaction {
            padding-top: 50px;
        }


        .container .content .summary-of-transaction .transaction-table table {
            border: 1px solid black;
            padding-top: 30px;
        }

        .container .content .transaction-table thead tr {
            background-color: #7183b8;
            border: 1px solid black;
            color: #000000;
            text-align: center;
            font-weight: bold;
        }

        .container .content .transaction-table th,
        .container .content .transaction-table td {
            border: 1px solid black;
            padding: 3px 5px;
        }

        .container .content .transaction-table tbody tr {
            border-bottom: 1px solid black;
            text-align: center;
        }

        .container .content .summary-of-transaction .transaction-table span {
            font-weight: 700;
        }


        footer>h3 {

            font-weight: 700;
            font-style: italic;
            padding: 10px;
            padding-top: 0;
            font-size: 1rem;
            width: 100%;
            text-align: center;
            bottom: 0;
            position: absolute;

        }
    </style>
</head>

<body>
    <div class="border">
        <div class="border-line">
            <div class="container" id="container">
                <div class="header">
                    <div class="deped-logo-wrapper">
                        <div class="deped-logo">
                            <img src="{{ asset('media/capellan/deped.png') }}" alt="deped-logo">
                        </div>
                    </div>
                    <div class="header-title">
                        <div class="header-title-text">
                            <p>CAPELLAN INSTITUTE OF TECHNOLOGY</p>
                            <p>SAN PABLO CITY BRANCH</p>
                            <br>
                            <p>STATEMENT OF ACCOUNT</p>
                            <div class="school-year">
                                <p>A.Y. 2019-2020</p>
                            </div>
                        </div>
                    </div>
                    <div class="capellan-logo-wrapper">
                        <div class="capellan-logo">
                            <img src="{{ asset('media/capellan/capellan-logo-ver2.png') }}" alt="capellan-logo">
                        </div>

                    </div>
                </div>
                <hr>

                <div class="content">
                    <div class="student-info">
                        <p>Name: <span>{{ $students->last_name }}, {{ $students->first_name }} {{ $students->middle_name }} {{ $students->extension }}</span></p>
                        <p>Grade/Strand: <span>{{ $students->enrollment->grade_level->grade_level }} - {{ $students->enrollment->specialization->strand->strand }} ({{ $students->enrollment->specialization->specialization }})</span></p>
                    </div>

                    <div class="summary-of-transaction">
                        <table class="transaction-table" style="width: 100%; border: 1px solid black;">
                            <thead>
                                <tr>
                                    <th colspan="5">Summary of Transactions</th>
                                </tr>
                                <tr>
                                    <th>Date</th>
                                    <th>Particulars</th>
                                    <th>Debit</th>
                                    <th>Credit</th>
                                    <th>Balance</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bills_pays as $bill_pay)
                                    @if ($loop->first)
                                        @php
                                            $bal = $bill_pay->billing_amt;
                                            $bal = $bal - $bill_pay->payment_amt;
                                        @endphp
                                    @else
                                        @php
                                            if ($bill_pay->billing_amt != null) {
                                                // echo 'null billing';
                                                $bal = $bal + $bill_pay->billing_amt;
                                            }
                                            if ($bill_pay->payment_amt != null) {
                                                // echo 'null payment';
                                                $bal = $bal - $bill_pay->payment_amt;
                                            }
                                            
                                            if ($bill_pay->memo_amt != null) {
                                                // echo 'null payment';
                                                if ($bill_pay->memo_type == 'Debit') {
                                                    $bal = $bal - $bill_pay->memo_amt;
                                                } else {
                                                    $bal = $bal + $bill_pay->memo_amt;
                                                }
                                            }
                                        @endphp
                                    @endif

                                    <tr>

                                        <td>
                                            date
                                        </td>

                                        @if ($bill_pay->billing_particulars = $bill_pay->billing_particulars)
                                            <td> {{ $bill_pay->billing_particulars }} </td>
                                        @elseif ($bill_pay->payment_particulars = $bill_pay->payment_particulars)
                                            <td> {{ $bill_pay->payment_particulars }} </td>
                                        @else
                                            <td> {{ $bill_pay->memo_particulars }}</td>
                                        @endif


                                        @if ($bill_pay->billing_amt = $bill_pay->billing_amt)
                                            <td></td>
                                            <td> {{ $bill_pay->billing_amt }} </td>
                                        @elseif ($bill_pay->payment_amt = $bill_pay->payment_amt)
                                            <td> {{ $bill_pay->payment_amt }} </td>
                                            <td></td>
                                        @else
                                            @if ($bill_pay->memo_type == 'Debit')
                                                <td> {{ $bill_pay->memo_amt }} </td>
                                                <td></td>
                                            @else
                                                <td></td>
                                                <td> {{ $bill_pay->memo_amt }} </td>
                                            @endif
                                        @endif

                                        <td>{{ $bal }}</td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                    <td><strong>Balance</strong></td>
                                    <td><strong>{{ $balance }}</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- <div class="footer">
                    <div class="signature">
                        <p>Signature Over Printed Name of Accountant</p>
                    </div>
                </div> -->
                <footer>
                    <h3>Note: This report is system generated.</h3>
                </footer>
            </div>
        </div>
    </div>
</body>

</html>
