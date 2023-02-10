<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          // permission dashboard
          Permission::create(['name' => 'dashboard.index', 'guard_name' => 'web']);
          Permission::create(['name' => 'dashboard.student_chart', 'guard_name' => 'web']);
          Permission::create(['name' => 'dashboard.graduation_chart', 'guard_name' => 'web']);
          Permission::create(['name' => 'dashboard.student_monthly_chart', 'guard_name' => 'web']);
          Permission::create(['name' => 'dashboard.payment', 'guard_name' => 'web']);
          Permission::create(['name' => 'dashboard.transaction', 'guard_name' => 'web']);
          Permission::create(['name' => 'dashboard.financial', 'guard_name' => 'web']);
          Permission::create(['name' => 'dashboard.mail_archive', 'guard_name' => 'web']);
          Permission::create(['name' => 'dashboard.student', 'guard_name' => 'web']);

          // permission users
          Permission::create(['name' => 'users.index', 'guard_name' => 'web']);
          Permission::create(['name' => 'users.create', 'guard_name' => 'web']);
          Permission::create(['name' => 'users.edit', 'guard_name' => 'web']);
          Permission::create(['name' => 'users.delete', 'guard_name' => 'web']);

          // permission roles
          Permission::create(['name' => 'roles.index', 'guard_name' => 'web']);
          Permission::create(['name' => 'roles.create', 'guard_name' => 'web']);
          Permission::create(['name' => 'roles.edit', 'guard_name' => 'web']);
          Permission::create(['name' => 'roles.delete', 'guard_name' => 'web']);

          // permission permissions
          Permission::create(['name' => 'permissions.index', 'guard_name' => 'web']);

          // permission school_years
          Permission::create(['name' => 'school_years.index', 'guard_name' => 'web']);
          Permission::create(['name' => 'school_years.create', 'guard_name' => 'web']);
          Permission::create(['name' => 'school_years.edit', 'guard_name' => 'web']);
          Permission::create(['name' => 'school_years.delete', 'guard_name' => 'web']);

          // permission class_levels
          Permission::create(['name' => 'class_levels.index', 'guard_name' => 'web']);
          Permission::create(['name' => 'class_levels.create', 'guard_name' => 'web']);
          Permission::create(['name' => 'class_levels.edit', 'guard_name' => 'web']);
          Permission::create(['name' => 'class_levels.delete', 'guard_name' => 'web']);

          // permission programs
          Permission::create(['name' => 'programs.index', 'guard_name' => 'web']);
          Permission::create(['name' => 'programs.create', 'guard_name' => 'web']);
          Permission::create(['name' => 'programs.edit', 'guard_name' => 'web']);
          Permission::create(['name' => 'programs.delete', 'guard_name' => 'web']);

          // permission classroms
          Permission::create(['name' => 'classroms.index', 'guard_name' => 'web']);
          Permission::create(['name' => 'classroms.create', 'guard_name' => 'web']);
          Permission::create(['name' => 'classroms.edit', 'guard_name' => 'web']);
          Permission::create(['name' => 'classroms.delete', 'guard_name' => 'web']);

          // permission teachers
          Permission::create(['name' => 'teachers.index', 'guard_name' => 'web']);
          Permission::create(['name' => 'teachers.create', 'guard_name' => 'web']);
          Permission::create(['name' => 'teachers.edit', 'guard_name' => 'web']);
          Permission::create(['name' => 'teachers.delete', 'guard_name' => 'web']);

          // permission students
          Permission::create(['name' => 'students.index', 'guard_name' => 'web']);
          Permission::create(['name' => 'students.create', 'guard_name' => 'web']);
          Permission::create(['name' => 'students.edit', 'guard_name' => 'web']);
          Permission::create(['name' => 'students.delete', 'guard_name' => 'web']);
    }
}
