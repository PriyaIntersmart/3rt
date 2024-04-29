<?php

namespace Database\Seeders;

use App\Models\AboutUs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            [
               'title'=>'Premier Resource in Premier Jurisdiction',
               'subtitle'=>'Welcome to <span>3RT Smart Gold Holdings</span>, an innovative gold exploration
               company based in
               Canada.',
               'about_image'=>'frontend/images/about1.jpg',
               'about_image_one'=>'frontend/images/logoBg.svg',
               'about_image_two'=>'frontend/images/abotClip.jpg',
               'description'=> ' <p>3RT’s properties are located in the in the Cariboo Region of British Columbia, Canada, a historical
               gold mining area with a strong record of high value gold production.</p>
           <p>3RT is a forward thinking and innovative gold exploration company, currently holding c.80km2 of
               valuable gold claims along the recently discovered Gold Bearing Channel</p>
           <p>3RT’s assets are diversified in nature, with a significant amount of alluvial and mineral claims
               within its portfolio. 3RT is backed by experienced gold exploration companies, whose assets total
               over 200km2</p>
           <p>Following its successful seed round in 2023, the Company received its initial batch of third party
               geological reports on its properties which demonstrated a significant reserve potential. The Mineral
               Resource Estimate ranged from a minimum of 2.25m oz to potentially 5m oz on only a fraction of 3RT’s
               growing portfolio</p>
           <p>3RT'.'s principal objective is to continue to independently validate and verify the quality and the
               quantity of its gold reserves through the issuance of independent accredited third party geological
               reports. To raise funds to enable this objective, 3RT has leveraged blockchain technology to create
               a '.'smart contract'.'with a market cap of just 217 million tokens for distribution. The token value is
               determined based on 3RT’s assets and represents economic ownership in the company</p>
           <p>3RT’s team incorporates over 160 years of experience across geology, exploration, blockchain, capital
               raising and strategic finance and is supported by a qualified team of independent geologists and
               advisors</p>',
               'work_overview_title'=>'Overview of our work',
               'work_overview_description'=>'<p>In the summer of 2023, 3RT embarked on ambitious exploration efforts, utilizing advanced
               technologies and tactical drilling to assess their properties’ potential. 3RT and their
               partners made use of sophisticated software, among other tools, to identify highest yielding
               properties, which contributed to the injection of c.80km2 of valuable assets into 3RT.
               Following the 2023 mining season, 3RT commissioned a long-form technical report to determine
               a mineral resource estimate on its portfolio.</p>',
               'work_overview_imageone'=>'frontend/images/stone.png',
               'work_overview_imagetwo'=>'frontend/images/overview11.jpg',
               'work_overview_imagethree'=>'frontend/images/overview12.jpg',
               'work_overview_imagefour'=>'frontend/images/overview13.jpg',
               'about_right_description'=>'Following the receipt of funds in the summer of 2023, 3RT conducted
               significant early stage exploration, including geophysics and tactical drilling on its
               properties',
               'about_left_description'=>'<p>Led by a qualified geologist, the mineral resource estimate (MRE) on just a fraction of 3RT’s
               properties was conducted meticulously. The MRE revealed substantial gold resources, estimated
               between 2.25 to 5 million ounces, showcasing the company'.'s significant progress in just six
               months of exploration. With a prudent approach to estimating reserves and leveraging known
               mineralization corridors, 3RT stands poised for future discoveries and disclosures.</p>
           <p>Looking ahead to 2024, 3RT plan to expand their exploration efforts to further quantify mineral
               resources across its portfolio. This next phase aims to uncover additional gold resources,
               promising continued growth and potential for the company’s various strategic initiatives.</p>',
               'section_one_heading'=>'Our team members',
               'section_one_subheading'=>'Highly Experienced and Innovative Management Team',
               'section_two_heading'=>'Supported by Senior Team',

            ]
            ];
            AboutUs::insert($data);
    }
}
