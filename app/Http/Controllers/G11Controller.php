<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student_Specialization_GradeLevel_SchoolYear;

class G11Controller extends Controller
{
    public function index(){
        $students = Student_Specialization_GradeLevel_SchoolYear::with('student','grade_level', 'specialization.strand.track')->get();
        return view('pages.StudentRecord.G11.index',compact('students'));
    }
}
