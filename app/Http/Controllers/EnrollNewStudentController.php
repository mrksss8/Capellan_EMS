<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use App\Models\Sem;
use App\Models\SchoolYear;
use App\Models\GradeLevel;
use App\Models\Student_Specialization_GradeLevel_SchoolYear;

class EnrollNewStudentController extends Controller
{

    function create(){
        $tracks = DB::table('tracks')->get();
        $schoolyears = SchoolYear::all();
        $gradelevels = GradeLevel::all();
        $sems = Sem::all();
        return view('pages.Enrollment.EnrollNewStudent.index',compact('tracks','schoolyears','gradelevels','sems'));
    }

    function get_strand(Request $request){
        $tracks = DB::table('strands')->where('track_id',$request->track_id)->get();
        return response()->json($tracks);
    }   
    function get_specialization(Request $request){
        $cities = DB::table('specializations')->where('strand_id',$request->strand_id)->get();
        return response()->json($cities);
    }

    public function store(Request $request)
    {

        $student = Student::create([
            'lrn' => $request->lrn,
            'std_num' => $request->std_num,
            'last_name' => $request->last_name,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'extension' => $request->extension,
            'civil_status' => $request->civil_status,
            'age' => $request->age,
            'sex' => $request->sex,
            'nationality' => $request->nationality,
            'b_date' => $request->b_date,
            'contact_num' => $request->contact_num,
            'house_num' => $request->house_num,
            'purok' => $request->purok,
            'brgy' => $request->brgy,
            'municipality' => $request->municipality,
            'province' => $request->province,
            'f_name' => $request->f_name,
            'f_occu' => $request->f_occu,
            'm_name' => $request->m_name,
            'm_occu' => $request->m_occu,
            'g_name' => $request->g_name,
            'relationship' => $request->relationship,
            'g_contact_num' => $request->g_contact_num,
            'g_add' => $request->g_add,
            'prev_school' => $request->prev_school,
            'prev_school_type' => $request->prev_school_type,
            'jhs_yrs' => $request->jhs_yrs,
            'year_grad' => $request->year_grad,
            'gen_ave' => $request->gen_ave,
            'prim_grade' => $request->prim_grade,
            'prim_grade_yr' => $request->prim_grade_yr,
            'intermediate' => $request->intermediate,
            'intermediate_yr' => $request->intermediate_yr,
            'junior_hs' => $request->junior_hs,
            'junior_hs_yr' => $request->junior_hs_yr,
            // 'sr_hs' => $request->sr_hs,
            // 'sr_hs_yr' => $request->sr_hs_yr,
            // 'college' => $request->college,
            // 'college_yr' => $request->college_yr,
            'status' => '1',
            
        ]);


         $enrollment_id = Student_Specialization_GradeLevel_SchoolYear::create([
             'student_id' => $student->id,
             'specialization_id' => $request->specialization,
             'gradelevel_id' => $request->grade_level,
             'school_year_id' => $request->school_year,
             'sem_id' => $request->sem,
         ]);

         Student::where('id',$student->id)->update([
            'enrollment_id' => $enrollment_id->id,
        ]);


        return redirect()->route('enroll_new_student.create');

        
    }

    function enrollmentForm(){
        $tracks = DB::table('tracks')->get();
        $schoolyears = SchoolYear::all();
        $gradelevels = GradeLevel::all();
        $sems = Sem::all();
        return view('pages.eform',compact('tracks','schoolyears','gradelevels','sems'));
    }
}
