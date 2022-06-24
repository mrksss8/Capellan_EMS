<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Specialization;
use App\Models\Active_SchoolYearAndSem;
use App\Models\Student_Specialization_GradeLevel_SchoolYear;

class DashboardController extends Controller
{
    public function index(){
        
        $enrolled_students_cnt = Student::where('status', 1)->count();
        $active_school_year = Active_SchoolYearAndSem::with('schoolyear','sem')->first();


       
        $active = Active_SchoolYearAndSem::first();
        $enrolled_students = Student_Specialization_GradeLevel_SchoolYear::with('specialization.enrollment')->where('school_year_id', '=', $active->active_SY_id)->where('sem_id','=', $active->active_sem_id)->groupby('specialization_id')->distinct()->get();


    //     foreach ($specializations as $specialization){
    //       foreach($specialization->enrollments as $enrollment) {
           
    //         // dd($enrollment->student->sex); 

    //     }
    // }

        
        return view('pages.dashboard',compact('enrolled_students_cnt', 'active_school_year', 'enrolled_students'));

    }
}
