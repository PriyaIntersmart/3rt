<?php

namespace Database\Seeders;

use App\Models\KeyTrends;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KeyTrendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            'starting_year'=>'2023',
            'starting_value'=>'0.4',
            'ending_year'=>'2030',
            'ending_value'=>'11tn',
            'title'=>'CAGR',
            'percentage'=>'60',
            'heading'=>'Tokenized Assets Market Size (USD trillion)',
            'description'=>'Roland Berger estimates that the value of tokenized assets will reach at conservatively ~$10.9 trillion by 2030, with Real Estate, Debt and Investment Funds being the Top 3 tokenized assets.'
        ];

        KeyTrends::insert($data);

    }
}
