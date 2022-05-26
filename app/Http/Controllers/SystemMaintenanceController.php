<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Track;
use App\Models\Strand;
use App\Models\Sem;
use App\Models\Specialization;
use App\Models\SchoolYear;
use App\Models\Active_SchoolYearAndSem;

class SystemMaintenanceController extends Controller
{
    public function index(){

        $tracks = Track::all();
        $schoolYears = SchoolYear::all();
        $sems = Sem::all();
        $active_schoolYear_sems = Active_SchoolYearAndSem::with('schoolyear','sem')->first();
        $strands = Strand::with('track')->get();
        $specializations = Specialization::with('strand.track')->get();

        return view('pages.SystemMaintenance.index',compact('tracks','strands','specializations','schoolYears','active_schoolYear_sems','sems'));
    }
}
