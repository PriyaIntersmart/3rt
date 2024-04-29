<?php

namespace Database\Seeders;

use App\Models\AdminConfiguration;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'key'           => 'website_name',
                'value'         => '3RT',
                'type'          => 0,
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
            [
                'key'           => 'website_logo',
                'value'         => 'frontend/images/logo.svg',
                'type'          => 1,
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
        ];

        AdminConfiguration::insert($data);
    }
}
