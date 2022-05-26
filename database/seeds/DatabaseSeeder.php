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
    }
}
