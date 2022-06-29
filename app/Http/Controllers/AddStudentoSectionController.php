<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student_Specialization_GradeLevel_SchoolYear;
use App\Models\Section;


class AddStudentoSectionController extends Controller
{
    public function store(Request $request){

        $section = Section::findorfail($request->section_id);

        foreach($request->student_id as $student_id){

            $student = Student_Specialization_GradeLevel_SchoolYear::where('student_id',$student_id)->where('section_id',null)->first();
        
            if($student->specialization_id ==  $section->specialization_id){
                $student->section_id = $request->section_id;
                $student->save();
            }

            else{
                
                return redirect()->route('section.index');

            }
              
            
        }

        return redirect()->route('section.index');

    }
}
