<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Billing;
use App\Models\Payment;


class Bill_Pay_Report_Controller extends Controller
{
    public function index(){

         $students = Student::all();
        
         return view('pages.Accounting.Report.index' ,compact('students') );

    }

    public function show($id){

        $students = Student::findOrFail($id);
        
        $billings = collect(Billing::where('std_id',$id)->get());
        $payments = collect(Payment::where('std_id',$id)->get());
        $bills_pays = $billings->merge($payments)->sortBy('created_at');

        $billings_sum = Billing::where('std_id',$id)->sum('billing_amt');
        $payments_sum = Payment::where('std_id',$id)->sum('payment_amt');

        $balance = $billings_sum - $payments_sum;

        return view('pages.Accounting.Report.show' ,compact('students','bills_pays','balance') );

    }
}
