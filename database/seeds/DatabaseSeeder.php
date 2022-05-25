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

        

        DB::table('grade_levels')->insert([
            'grade_level' => 'Grade 11'
        ]);
        DB::table('grade_levels')->insert([
            'grade_level' => 'Grade 12'
        ]);
    }
}
