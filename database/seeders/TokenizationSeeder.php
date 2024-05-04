<?php

namespace Database\Seeders;

use App\Models\Tokenization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TokenizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            'title_one'=>'<h6>Gaming</h6>',
            'title_two'=>'<h5>Art</h5>',
            'title_three'=>'<h4>Infrastructure</h4>',
            'title_four'=>'<h3>Public Equity</h3>',
            'title_five'=> '<h2>Real Estate</h2>',
            'title_six'=>'<h6>Financial</h6>',
            'title_seven'=>'<h6>Residential</h6>',
            'title_eight'=>'<h6>Energy</h6>',
            'title_nine'=>'<h5>Development</h5>',
            'title_ten'=>'<h3>Commodities</h3>',

        ];
        Tokenization::insert($data);
    }
}
