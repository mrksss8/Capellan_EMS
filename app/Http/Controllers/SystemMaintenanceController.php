<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Track;
use App\Models\Strand;
use App\Models\Specialization;
use App\Models\SchoolYear;

class SystemMaintenanceController extends Controller
{
    public function index(){

        $tracks = Track::all();
        $schoolYears = SchoolYear::all();
        $strands = Strand::with('track')->get();
        $specializations = Specialization::with('strand.track')->get();

        return view('pages.SystemMaintenance.index',compact('tracks','strands','specializations','schoolYears'));
    }
}
