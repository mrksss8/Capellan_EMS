<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;


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

        //seeder roles adn permission
         // Reset cached roles and permissions
         app()[PermissionRegistrar::class]->forgetCachedPermissions();

         // create permissions
         Permission::create(['name' => 'Dashboard Permission']);
         Permission::create(['name' => 'Enrollment Permission']);
         Permission::create(['name' => 'Student Records Permission']);
         Permission::create(['name' => 'Accounting Permission']);
         Permission::create(['name' => 'Reports Permission']);
         Permission::create(['name' => 'System Maintenance Permission']);
         Permission::create(['name' => 'Register User Permission']);

 
         // create roles and assign existing permissions
         $roleRegistrar = Role::create(['name' => 'Registrar']);
         $roleRegistrar->givePermissionTo('Dashboard Permission');
         $roleRegistrar->givePermissionTo('Enrollment Permission');
         $roleRegistrar->givePermissionTo('Student Records Permission');
         $roleRegistrar->givePermissionTo('Reports Permission');
         $roleRegistrar->givePermissionTo('System Maintenance Permission');
      
 
         $roleAccounting = Role::create(['name' => 'Accounting']);
         $roleAccounting->givePermissionTo('Dashboard Permission');
         $roleAccounting->givePermissionTo('Accounting Permission');


         $roleTeacher = Role::create(['name' => 'Teacher']);
         $roleTeacher->givePermissionTo('Dashboard Permission');
         $roleTeacher->givePermissionTo('Student Records Permission');


         $roleDirector = Role::create(['name' => 'Director']);
         $roleDirector->givePermissionTo('Dashboard Permission');
         $roleDirector->givePermissionTo('Enrollment Permission');
         $roleDirector->givePermissionTo('Student Records Permission');
         $roleDirector->givePermissionTo('Accounting Permission');
         $roleDirector->givePermissionTo('Reports Permission');
         $roleDirector->givePermissionTo('System Maintenance Permission');
         $roleDirector->givePermissionTo('Register User Permission');


         $markDirector = \App\Models\User::create([
            'name' => 'mark',
            'email' => 'mark@gmail.com',
            'password' => Hash::make('asdasd123'),
        ]);

        $markDirector->assignRole($roleDirector);

        $kheyzelRegistrar = \App\Models\User::create([
            'name' => 'kheyzel',
            'email' => 'kheyzel@gmail.com',
            'password' => Hash::make('asdasd123'),
        ]);

        $kheyzelRegistrar->assignRole($roleRegistrar);

        $magicAccounting = \App\Models\User::create([
            'name' => 'Mina Magic',
            'email' => 'mina_magic@gmail.com',
            'password' => Hash::make('asdasd123'),
        ]);

        $magicAccounting->assignRole($roleAccounting);

    }
}
