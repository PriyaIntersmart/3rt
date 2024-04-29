<?php

namespace Database\Seeders;

use App\Models\StructureCms;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StructureCmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            [
                'left_section_title'=>'Benefits of tokenization',
                'left_section_image'=>'frontend/images/dElmt-logoOutline.svg',
                'left_section_content'=>'Tokenization is revolutionizing the landscape of asset funding, trading, and management, fundamentally reshaping traditional investment and ownership paradigms across industries. Representing assets in digital form with assignable digital rights, tokens are programmable and automated, enabling efficient management and transactions. These tokens can encompass a wide range of assets, from tangible physical assets like real estate to intangible assets such as company shares, bonds, or even works of art.

                By existing on the blockchain, tokens provide a secure and transparent means of ownership, facilitating the division and trading of assets that were previously challenging to manage.

                The adoption of tokenization is already underway, with global players like Goldman Sachs, Blackrock, and Fidelity spearheading comprehensive strategies around this emerging ecosystem. This trend signals a shift towards global adoption, with prominent institutions recognizing the potential of tokenization to streamline asset management and trading. As tokenization continues to gain traction, it promises to unlock new opportunities and efficiencies across various sectors, marking a significant evolution in the way assets are funded, traded, and owned in our modern society.',
                'right_section_title'=>'3RT Token Overview',
                'right_section_content'=>' <ul>
                <li>To enable its strategic initiatives, 3RT has created a digital token on the blockchain with a cap of 217m tokens</li>
                <li>3RT tokens represent unfiltered direct access to gold reserves in a very stable
                    geopolitical location through an innovative medium</li>
                <li>Backed by investor documents, 3RT token holders will have the rights to 80% of the company’s economic activities</li>
                <li>3RT tokens comply with the ERC-20 cryptographic token interface
                    popularized by the Ethereum ecosystem</li>
            </ul>',
                'section_one_image'=>'frontend/images/dElmt-gold-1.png',
                'section_one_heading'=>'Key Trends',
                'section_one_subtitle_one'=>'A 10+ trillion-dollar market opportunity',
                'section_one_subtitle_two'=>'Asset Universe for Tokenization',
                'section_two_heading'=> 'Key Elements',
                'section_two_image'=>'frontend/images/keyElements-1.jpg',
                'created_at'=> Carbon::now(),
            ]
            ];
            StructureCms::insert($data);
    }
}
