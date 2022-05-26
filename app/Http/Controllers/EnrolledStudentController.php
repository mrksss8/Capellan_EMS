<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student_Specialization_GradeLevel_SchoolYear;
use App\Models\Active_SchoolYearAndSem;

class EnrolledStudentController extends Controller
{
    public function index(){

        $active_sy_sem = Active_SchoolYearAndSem::first();
        $students = Student_Specialization_GradeLevel_SchoolYear::with('student','grade_level', 'specialization.strand.track', 'schoolyear', 'sem')
        ->where('school_year_id',$active_sy_sem->active_SY_id)->where('sem_id',$active_sy_sem->active_sem_id)->get();
        
        return view('pages.StudentRecord.EnrolledStudents.index',compact('students'));
    }
}
