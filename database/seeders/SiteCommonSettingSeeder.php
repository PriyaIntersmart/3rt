<?php

namespace Database\Seeders;

use App\Models\SiteCommonContent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteCommonSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SiteCommonContent::create([
            'facebook_link' => 'https://www.facebook.com',
            'instagram_link' => 'https://www.instagram.com',
            'youtube_link' => 'https://www.youtube.com',
            'twitter_link' => 'https://www.twitter.com',
            'linkedin_link' => 'https://www.linkedin.com',
            'address' => '3RT Smart Gold Holdings is a forward thinking and innovative gold exploration company in Canada',
            'phone' => '+447719748737',
            'email' => ' info@3rtsmartgold.com',
            'whatsapp_number' => '+447719748737',
            'enquiry_receive_email' => ' info@3rtsmartgold.com',

        ]);
    }
}
