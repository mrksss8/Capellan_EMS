<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student_Specialization_GradeLevel_SchoolYear;
use App\Models\Student;
use App\Models\Active_SchoolYearAndSem;
use App\Models\SchoolYear;
use App\Models\Sem;
use App\Models\gradelevel;

class AlumniController extends Controller
{
    public function index(){

        $active = Active_SchoolYearAndSem::first();
        $students = Student::with('enrollment.student')->whereHas('enrollment', function ($query) use($active) {
            return $query->where('school_year_id', '=', $active->active_SY_id)->where('sem_id','=', $active->active_sem_id);
        })->get();
        
        return view('pages.Alumni.index',compact('students'));

    }
}
