<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin_users')->insert([
            'name' => 'Developer',
            'slug' => 'developer',
            'designation' => 'Developer Engineer',
            'email' => 'developer@commerdepet.in',
            'password' => Hash::make('developer$'),
            'google2fa_secret' => '4CJHPWJ7OKVUOFCR',
            'status' => 'active',
            'role_id' => 1003,
            'created_at' => date("Y-m-d H:i:s")
        ]);
    }
}
