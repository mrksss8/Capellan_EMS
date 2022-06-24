<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student_Specialization_GradeLevel_SchoolYear;
use App\Models\Student;
use App\Models\Active_SchoolYearAndSem;
use App\Models\SchoolYear;
use App\Models\Sem;
use App\Models\gradelevel;

class EnrolledStudentController extends Controller
{
    public function index(){

        $active = Active_SchoolYearAndSem::first();
        $students = Student::with('enrollment.student')->whereHas('enrollment', function ($query) use($active) {
            return $query->where('school_year_id', '=', $active->active_SY_id)->where('sem_id','=', $active->active_sem_id);
        })->where('status', 1)->get();
        
        return view('pages.StudentRecord.EnrolledStudents.index',compact('students'));

    }

    public function show($id){

        $student = Student::with('enrollment.student' , 'document')->where('id',$id)->first();
        return view('pages.StudentRecord.EnrolledStudents.show',compact('student'));

    }
    
    public function edit($id){
        
        $schoolyears = SchoolYear::all();
        $students = Student::with('enrollment.student')->where('id',$id)->first();
        $sems = Sem::all();
        $gradelevels = GradeLevel::all();
        return view('pages.StudentRecord.EnrolledStudents.edit',compact('students','schoolyears','sems','gradelevels'));
        
    }
    
    public function drop($id){


      Student::findorfail($id)->update([
            'status' => 2
        ]);

        return redirect()->route('enrolled_student.index');

    }
}
