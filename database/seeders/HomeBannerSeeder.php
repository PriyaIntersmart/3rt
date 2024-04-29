<?php

namespace Database\Seeders;

use App\Models\HomeBanner;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "banner_image" => "frontend/images/banner-home-1.jpg",
                "subtitle" => "SHA3RT Smart <a href='#' aria-label='inner link'>Gold's</a> Innovative Approach to Gold Exploration in Canada.PING <br> TOMORROW",
                "title" => "SHAPING <br> TOMORROW",
                "button_title" => "DISCOVER MORE",
                'meta_title' => 'Home',
                'meta_keywords' => 'meta',
                'meta_description' => 'meta',
                'other_meta_keywords' => '<meta>',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ]
        ];
        HomeBanner::insert($data);
    }
}
