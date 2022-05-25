<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStdSpcGlSyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_spc_gl_sy', function (Blueprint $table) {
            $table->id();
            //student foreign key
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students');  

            //specialitaion foreign key
            $table->unsignedBigInteger('specialization_id');
            $table->foreign('specialization_id')->references('id')->on('specializations');  

             //gradelevel foriegn key
             $table->unsignedBigInteger('gradelevel_id');
             $table->foreign('gradelevel_id')->references('id')->on('grade_levels');  

            //specialitaion foreign key
            $table->unsignedBigInteger('school_year_id');
            $table->foreign('school_year_id')->references('id')->on('school_years');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_spc_gl_sy');
    }
}
