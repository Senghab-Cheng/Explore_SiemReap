<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tours')->insert([
            [
                'name'        => 'Angkor Wat Discovery',
                'description' => 'Explore the ancient temples of Cambodia.',
                'location'    => 'Siem Reap, Cambodia',
                'price'       => 199.00,
                'duration'    => '2 Days 1 Night',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
        ]);
    }
}
