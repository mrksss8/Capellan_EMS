<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section;
use App\Models\Student;

class SectionController extends Controller
{

    public function index(){

        $sections = Section::with('specialization','gradelevel')->get();

        $student_without_sections = Student::with('enrollment')->whereHas('enrollment', function($q){
            $q->where('section_id',null);
        })->get();


        return view('pages.Section.index',compact('sections','student_without_sections'));
    } 

    public function store(request $request){
        Section::create([
            'section' => $request->section,
            'gradelevel_id' => $request->gradelevel,
            'specialization_id' => $request->specialization,
        ]);

        return redirect()->route('sys_main.index');
    }

}
