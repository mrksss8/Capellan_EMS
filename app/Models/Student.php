<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $guarded = [''];

    public function memos(){
        return $this->hasMany(Memo::class);

    public function enrollment(){
        return $this->belongsTo(Student_Specialization_GradeLevel_SchoolYear::class,'enrollment_id','id');

    }
}
