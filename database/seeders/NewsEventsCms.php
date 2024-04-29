<?php

namespace Database\Seeders;

use App\Models\NewsEvents;
use App\Models\NewsEventsCms as ModelsNewsEventsCms;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsEventsCms extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            [
                "title"=> "News & Events",
                "description"=> "At 3RT, we offer investors a unique opportunity to directly access gold reserves in a stable geopolitical location.",

            ]
            ];
            ModelsNewsEventsCms::insert($data);
    }
}
