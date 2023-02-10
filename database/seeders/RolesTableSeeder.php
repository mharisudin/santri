<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name'  => 'admin']);
        Role::create(['name'  => 'staff']);
        Role::create(['name'  => 'teacher']);
        Role::create(['name'  => 'teacher_class']);
        Role::create(['name'  => 'finance']);
        Role::create(['name'  => 'finance_male']);
        Role::create(['name'  => 'finance_female']);
        Role::create(['name'  => 'student']);
    }
}
