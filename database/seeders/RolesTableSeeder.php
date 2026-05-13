<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'Administator']);
        Role::create(['name' => 'Content Editor']);
        Role::create(['name' => 'Viewer']);
        Role::create(['name' => 'Developer']);

    }
}
