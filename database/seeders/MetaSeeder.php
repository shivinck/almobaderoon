<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Meta;

class MetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Meta::create(['page' => 'Home']);
        Meta::create(['page' => 'About Us - Home Helpers']);
        Meta::create(['page' => 'About Us - Testimonials']);
        Meta::create(['page' => 'About Us - Awards & Recognition']);
        Meta::create(['page' => 'Services']);
        Meta::create(['page' => 'Blogs']);
        Meta::create(['page' => 'Contact ']);
        Meta::create(['page' => 'Privacy Policy']);
    }
}
