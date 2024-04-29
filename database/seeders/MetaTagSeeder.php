<?php

namespace Database\Seeders;

use App\Models\BannerAndMetaTag;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MetaTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'page' => 'about',
                'page_title' => 'ABOUT US',
                'banner_title' => 'ABOUT US',
                'banner_image' => 'frontend/images/aboutBanner.jpg',
                'meta_title' => 'about',
                'meta_keywords' => 'meta',
                'meta_description' => 'meta',
                'other_meta_keywords' => '<meta>',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'page' => 'Structure Overview',
                'page_title' => 'Structure Overview',
                'banner_title' => 'Structure <br>Overview',
                'banner_image' => 'frontend/images/banner-overview.jpg',
                'meta_title' => 'Structure Overview',
                'meta_keywords' => 'meta',
                'meta_description' => 'meta',
                'other_meta_keywords' => '<meta>',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'page' => 'Contact Us',
                'page_title' => 'Contact Us',
                'banner_title' => 'Contact us',
                'banner_image' => 'frontend/images/banner-contact.jpg',
                'meta_title' => 'Contact Us',
                'meta_keywords' => 'meta',
                'meta_description' => 'meta',
                'other_meta_keywords' => '<meta>',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'page' => 'NewsEvents',
                'page_title' => 'NewsEvents',
                'banner_title' => 'NewsEvents',
                'banner_image' => 'frontend/images/aboutBanner.jpg',
                'meta_title' => 'NewsEvents',
                'meta_keywords' => 'meta',
                'meta_description' => 'meta',
                'other_meta_keywords' => '<meta>',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'page' => 'Terms And Condition',
                'page_title' => 'Terms And Condition',
                'banner_title' => 'TERMS & CONDITIONS',
                'banner_image' => 'frontend/images/banner-legal.jpg',
                'meta_title' => 'Terms And Condition',
                'meta_keywords' => 'meta',
                'meta_description' => 'meta',
                'other_meta_keywords' => '<meta>',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],


        ];

        BannerAndMetaTag::insert($data);

    }
}
