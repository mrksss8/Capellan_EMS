<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $table = "sections";
    protected $guarded = [];

    public function specialization(){

        return $this->belongsTo(Specialization::class);
    }

    public function gradelevel(){

        return $this->belongsTo(GradeLevel::class);
    }
}
