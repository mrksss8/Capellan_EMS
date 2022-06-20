<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {

            $table->id();
            $table->string('lrn');
            $table->string('std_num');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('extension');
            $table->string('civil_status');
            $table->string('age');
            $table->string('sex');
            $table->string('nationality');
            $table->string('b_date');
            $table->integer('contact_num');
            $table->string('house_num');
            $table->string('purok');
            $table->string('brgy');
            $table->string('municipality');
            $table->string('province');
            $table->string('f_name');
            $table->string('f_occu');
            $table->string('m_name');
            $table->string('m_occu');
            $table->string('g_name');
            $table->string('relationship');
            $table->integer('g_contact_num');
            $table->string('g_add');
            $table->string('prev_school');
            $table->string('jhs_yrs');
            $table->string('year_grad');
            $table->string('gen_ave');
            $table->string('prim_grade');
            $table->string('prim_grade_yr');
            $table->string('intermediate');
            $table->string('intermediate_yr');
            $table->string('junior_hs');
            $table->string('junior_hs_yr');
            $table->string('sr_hs');
            $table->string('sr_hs_yr');
            $table->string('college');
            $table->string('college_yr');
            $table->timestamps();
            $table->integer('enrollment_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
