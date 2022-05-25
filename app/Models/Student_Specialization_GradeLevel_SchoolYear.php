<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_Specialization_GradeLevel_SchoolYear extends Model
{
    use HasFactory;
    
    protected $table = "std_spc_gl_sy";
    protected $guarded = [''];
}
