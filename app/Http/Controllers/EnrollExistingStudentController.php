<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student_Specialization_GradeLevel_SchoolYear;
use App\Models\Student;
use App\Models\SchoolYear;
use App\Models\GradeLevel;
use App\Models\Sem;
class EnrollExistingStudentController extends Controller
{


    public function create(){
        $sems = Sem::all();
        $tracks = DB::table('tracks')->get();
        $schoolyears = SchoolYear::all();
        $gradelevels = GradeLevel::all();
        $students = Student_Specialization_GradeLevel_SchoolYear::with('student','grade_level', 'specialization.strand.track')->groupby('student_id')->distinct()->get();
        return view('pages.Enrollment.EnrollExistingStudent.index',compact('students','tracks','schoolyears','gradelevels','sems'));
    }

    function get_strand(Request $request){
        $tracks = DB::table('strands')->where('track_id',$request->track_id)->get();
        return response()->json($tracks);
    }   
    function get_specialization(Request $request){
        $cities = DB::table('specializations')->where('strand_id',$request->strand_id)->get();
        return response()->json($cities);
    }

    public function store(Request $request){

        $std_id = $request->student_id;
        for($i = 0; $i<count($std_id); $i++)
        {
             $student = Student::findorfail($std_id[$i]);

             $records = [
                [
                    'student_id' =>  $student->id,
                    'specialization_id' => $request->specialization,
                    'gradelevel_id' => $request->grade_level,
                    'school_year_id' => $request->school_year,
                    'sem_id' => $request->sem,
                ]
            ];   
            Student_Specialization_GradeLevel_SchoolYear::insert($records);
        }

        return redirect()->route('enroll_existing_student.create');
        
    }
}
