<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SchoolYear;
use App\Models\GradeLevel;


class EnrollmentController extends Controller
{

    function index(){

        $tracks = DB::table('tracks')->get();
        $schoolyears = SchoolYear::all();
        $gradelevels = GradeLevel::all();
        return view('pages.Enrollment.index',compact('tracks','schoolyears','gradelevels'));
    }

    function get_strand(Request $request){
        $tracks = DB::table('strands')->where('track_id',$request->track_id)->get();
        return response()->json($tracks);
    }   
    function get_specialization(Request $request){
        $cities = DB::table('specializations')->where('strand_id',$request->strand_id)->get();
        return response()->json($cities);
    }
}
