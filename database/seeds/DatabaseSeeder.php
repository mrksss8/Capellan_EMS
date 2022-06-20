<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'mark',
            'email' => 'mark@gmail.com',
            'password' => Hash::make('asdasd123'),
        ]);

        DB::table('users')->insert([
            'name' => 'kheyzel',
            'email' => 'kheyzel@gmail.com',
            'password' => Hash::make('asdasd123'),
        ]);

        DB::table('grade_levels')->insert([
            'grade_level' => 'Grade 11'
        ]);
        DB::table('grade_levels')->insert([
            'grade_level' => 'Grade 12'
        ]);

        DB::table('sems')->insert([
            'sem' => '1',
        ]);

        DB::table('sems')->insert([
            'sem' => '2',
        ]);

        DB::table('school_years')->insert([
            'school_year' => '2022-2023',
        ]);

        DB::table('active__school_year_and_sems')->insert([
            'active_SY_id' => '1',
            'active_sem_id' => '1',
        ]);
    }
}
