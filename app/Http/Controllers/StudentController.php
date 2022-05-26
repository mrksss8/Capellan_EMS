<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Student_Specialization_GradeLevel_SchoolYear;

class StudentController extends Controller
{
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
            'jhs_yrs' => $request->jhs_yrs,
            'year_grad' => $request->year_grad,
            'gen_ave' => $request->gen_ave,
            'prim_grade' => $request->prim_grade,
            'prim_grade_yr' => $request->prim_grade_yr,
            'intermediate' => $request->intermediate,
            'intermediate_yr' => $request->intermediate_yr,
            'junior_hs' => $request->junior_hs,
            'junior_hs_yr' => $request->junior_hs_yr,
            'sr_hs' => $request->sr_hs,
            'sr_hs_yr' => $request->sr_hs_yr,
            'college' => $request->college,
            'college_yr' => $request->college_yr
            
        ]);


         Student_Specialization_GradeLevel_SchoolYear::create([
             'student_id' => $student->id,
             'specialization_id' => $request->specialization,
             'gradelevel_id' => $request->grade_level,
             'school_year_id' => $request->school_year,
         ]);


        return redirect()->route('enrollment.index');

        
    }
}