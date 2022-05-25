<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    use HasFactory;

    protected $fillable = ['specialization', 'strand_id'];
    public function strand(){
        return $this->belongsTo(Strand::class);
    }
}
