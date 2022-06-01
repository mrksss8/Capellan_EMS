<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Billing;


class BillingController extends Controller
{
    public function index(){

         $students = Student::all();
        
         return view('pages.Accounting.Billing.index' ,compact('students') );
    }

    public function show($id){

        $billings = Billing::where('std_id', $id)->get();
        $students=Student::findOrFail($id);
        
        return view('pages.Accounting.Billing.show' ,compact('students', 'billings') );
    }

    public function store(Request $request){
       
        Billing::create([
            'std_id' => $request->std_id,
            'billing_particulars' => $request->billing_particulars,
            'billing_amt' => $request->billing_amt,
            'billing_date' => $request->billing_date,
        ]);

       return redirect()->route('billing.show', $request->std_id);
    }
}
