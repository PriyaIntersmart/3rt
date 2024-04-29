<?php

namespace Database\Seeders;

use App\Models\HomeCms;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeCmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "section_one_image" => 'frontend/images/abotClip.jpg',
                "section_one_title" => 'Who We Are',
                'section_one_subtitle' => 'Welcome to <span> 3RT Smart Gold Holdings</span>, an innovative gold exploration company based in Canada.',
                'section_one_description' => '<p>3RT is a forward thinking gold exploration company, holding a vast land portfolio of c.80 km2 of valuable gold claims in British Columbia, Canada.</p>
                <p>In 2023, 3RT received its initial batch of third party geological reports on its properties which demonstrated a significant reserve potential.</p>
                <p>The Mineral Resource Estimate ranged from a minimum of 2.25m oz to potentially 5m oz on only a fraction of 3RT' . 's growing portfolio.</p>',
                'section_one_button_title' => 'READ MORE',
                'section_two_imageone' => 'frontend/images/business-1.jpg',
                'section_two_imagetwo' => 'frontend/images/dElmt-logoOutline.svg',
                'section_two_imagethree' => 'frontend/images/dElmt-gold-1.png',
                'section_two_title' => 'Our <br> Business Focus',
                'section_two_description' => ' <p>3RT' . 's principal objective is to continue to independently validate and verify the quality and the quantity of its gold reserves through the issuance of independent accredited third party geological reports. 3RT’s team incorporates over 160 years of experience across geology, exploration, blockchain, capital raising and strategic finance.</p>',
                'section_two_button_title' => 'LEARN MORE',
                'section_three_title' => 'OUR LOCATION',
                'section_three_image' => 'frontend/images/location-1.jpg',
                'section_three_description' => '<p>3RT' . 's properties are located in the in the Cariboo Region of British Columbia, Canada, a historical gold mining area with a strong record of high value gold production</p>',
                'section_four_title' => 'Get In Touch With Us',
                'section_four_description' => '<p>To learn more about 3RT, please reach out to a member of our team.</p>',
                'section_four_button_title' => 'CONTACT US',
            ],
        ];
        HomeCms::insert($data);
    }
}
