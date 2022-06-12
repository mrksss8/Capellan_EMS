<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student_Specialization_GradeLevel_SchoolYear;
use App\Models\Student;
use App\Models\Sem;
use App\Models\gradelevel;

class PrintableController extends Controller
{
    public function index_sis($id){

        $student = Student::with('enrollment.student')->where('id',$id)->first();
        return view('pages.Printables.sis_index', compact('student'));
    }
}
