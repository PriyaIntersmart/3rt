<?php

namespace Database\Seeders;

use App\Models\TermsAndCondition;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TermsAndConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'TERMS &CONDITIONS',
                'sub_title' => 'PLEASE READ THESE TERMS OF USE CAREFULLY, AS IT CONTAINS IMPORTANT INFORMATION REGARDING YOUR LEGAL RIGHTS AND REMEDIES',
                'description' => '<h4>1. OVERVIEW </h4>
<p>These Terms of Use (these "Terms") are entered into by and between <b>3RT SMART GOLD HOLDINGS
        INC. </b> (the "Company") and you, and are made effective as of the date of your use of the website at
    3rtsmartgold.com (the "Site") or the date of electronic acceptance thereof. These Terms set forth the
    general terms and conditions of your use of the Site or any other features, technologies or
    functionalities offered by us through the Site (the "Services"). Additional Terms and Conditions,
    Service Terms, policies or rules (the "Service Terms") may be published on the Site, which would
    govern the terms of the provision of certain specific products, services or other offerings (including
    without limitation or certain digital asset related products, services or other offerings) provided via
    the Site, which additional terms shall be in addition to (and not in lieu of) these Terms. In the event of
    a conflict between the provisions of the Service Terms and the provisions of these Terms, the
    provisions of the applicable Service Terms shall control.
</p>
<p>The terms "we", "us" or "our" shall refer to the Company. The terms "you", "your", "User" or
    "customer" shall refer to any individual or entity who has accepted these Terms and/or uses the Site
    or Services thereon. </p>
<p><b>PLEASE READ THESE TERMS CAREFULLY BEFORE USING THE SITE. THESE TERMS GOVERN YOUR USE
        OF THE SITE; WE ARE ONLY WILLING TO MAKE THE SITE AVAILABLE TO YOU IF YOU ACCEPT ALL OF
        THESE TERMS. BY USING THE SITE, OR ANY PART OF THEM, OR BY CLICKING "I ACCEPT" BELOW OR
        INDICATING YOUR ACCEPTANCE IN AN ADJOINING BOX, YOU ARE CONFIRMING THAT YOU
        UNDERSTAND AND AGREE TO BE BOUND BY ALL OF THESE TERMS. IF YOU ARE ACCEPTING THESE
        TERMS ON BEHALF OF A COMPANY OR OTHER LEGAL ENTITY, YOU REPRESENT THAT YOU HAVE THE
        LEGAL AUTHORITY TO ACCEPT THESE TERMS ON THAT ENTITY’S BEHALF, IN WHICH CASE "YOU"
        WILL MEAN THAT ENTITY. IF YOU DO NOT HAVE SUCH AUTHORITY, OR IF YOU DO NOT ACCEPT ALL
        OF THESE TERMS, THEN WE ARE UNWILLING TO MAKE THE SITE AVAILABLE TO YOU. IF YOU DO NOT
        AGREE TO THESE TERMS, YOU MAY NOT ACCESS OR USE THE SITE.
    </b></p>
<p>Supplemental terms and conditions or documents that may be posted on the Site from time to time
    are hereby expressly incorporated herein by reference. We reserve the right, in our sole discretion, to
    make changes to the Terms from time to time. We will alert you of any changes by updating the "Last
    Updated" date of these Terms, and you waive any right to receive specific notice of each such change.
    It is your responsibility to periodically review these Terms to stay informed of updates. You will be
    subject to and will be deemed to have been made aware of and to have accepted, the changes in any
    revised Terms by your continued use of the Site after the date such revised Terms are posted. Nothing
    in these Terms shall be deemed to confer any third-party rights or benefits.
</p>
<h4>2. MODIFICATION OF TERMS, SITE OR SERVICES </h4>
<p>The Company may, in its sole and absolute discretion, change or modify these Terms, and any policies
    or agreements which are incorporated herein, at any time, and such changes or modifications shall be
    effective immediately upon posting to this Site. In addition, the Company may terminate your use of
    Services for any violation or breach of any of these Terms by you. <b>THE COMPANY RESERVES THE RIGHT
        TO MODIFY, CHANGE, OR DISCONTINUE ANY ASPECT OF THIS SITE OR THE SERVICES FOR THE SAME
        AT ANY TIME, INCLUDING WITHOUT LIMITATION IMPOSITION OF CHARGES OR ACCOUNT CREATION
        REQUIREMENTS. </b> </p>
<p>Without prejudice to the generality of the foregoing, no changes to these Terms shall be valid or have
    any effect unless specifically agreed by the Company in writing. </p>
<h4>3. ELIGIBILITY; AUTHORITY </h4>
<p>This Site and the Services are available only to individuals or entities ("Users") who can form legally
    binding contracts under applicable law. By using this Site or the Services, you represent and warrant
    that you are (a) at least eighteen (18) years of age, (b) otherwise recognised as being able to form
    legally binding contracts under applicable law, or (c) are not a person barred from purchasing or
    receiving the Services found under the laws of Singapore or other applicable jurisdiction(s).</p>
<p>If you are entering into these Terms on behalf of a corporate entity, you represent and warrant that
    you have the legal authority to bind such corporate entity to the terms and conditions contained in
    these Terms, in which case the terms "you", "your", "User" or "customer" shall refer to such corporate
    entity. The Company shall not be liable for any loss or damage resulting from the Companys reliance
    on any instruction, notice, document or communication reasonably believed by the Company to be
    genuine and originating from an authorised representative of your corporate entity. If there is
    reasonable doubt about the authenticity of any such instruction, notice, document or communication,
    the Company reserves the right (but undertakes no duty) to require additional authentication from
    you. You further agree to be bound by the terms of these Terms for transactions entered into by
    anyone acting as your agent, whether or not authorised by you. </p>
<h4>4. GENERAL RULES OF CONDUCT</h4>
<p>You acknowledge and agree that: </p>
<ul>
    <li> Your use of this Site and the Services, including any content you submit, will comply with these
        Terms, any applicable Service Terms or policy that may apply to your Services and all applicable
        local, state, national and international laws, rules and regulations.</li>
    <li>You will not collect or harvest (or permit anyone else to collect or harvest) any non-public or
        personally identifiable information about another User or any other person or entity without
        their express prior written consent.</li>
    <li>You will not use this Site or the Services in a manner (as determined by the Company in its sole
        and absolute discretion) that: (i) is illegal, or promotes or encourages illegal activity; (ii)
        promotes, encourages or engages in the exploitation of children, or any activity related to the
        proliferation of child sexual abuse material; (iii) promotes, encourages or engages in terrorism,
        violence against people, animals, or property; (iv) promotes, encourages or engages in any spam
        or other unsolicited bulk email, or computer or network hacking or cracking; (v) promotes,
        encourages or engages in the sale or distribution of controlled substances or prescription
        medication without a valid prescription; (vi) promotes or facilitates prostitution and/or sex
        trafficking; (vii) infringes on the intellectual property rights of another User or any other person
        or entity; (viii) violates the privacy or publicity rights of another User or any other person or
        entity, or breaches any duty of confidentiality that you owe to another User or any other person
        or entity; (ix) interferes with the operation of this Site or the Services found at this Site; (x)
        contains or installs any viruses, worms, bugs, Trojan horses or other code, files or programs
        designed to, or capable of, disrupting, damaging or limiting the functionality of any software or
        hardware; or (xi) contains false or deceptive language, or unsubstantiated or comparative
        claims, regarding the Company or its services.</li>
    <li>You will not perform any false, abusive or fraudulent activity. You will not perform any action
        that imposes, or may impose, in our discretion, an unreasonable or disproportionately large
        load on our infrastructure.</li>
    <li>You will not copy or distribute in any medium any part of this Site or the Services, except where
        expressly authorised by the Company.</li>
    <li>You will not modify or alter any part of this Site or the Services found at this Site or any of its
        related technologies.</li>
    <li>You will not access Company Content (as defined below) through any technology or means
        other than through this Site itself, or as the Company may designate.</li>
    <li>You will not re-sell or provide the Services for a commercial purpose, including any of the
        Companys related technologies, without the Companys express prior written consent.</li>
    <li>You will not circumvent, disable or otherwise interfere with the security-related features of this
        Site or the Services found at this Site (including without limitation those features that prevent
        or restrict use or copying of any Company Content) or enforce limitations on the use of this Site
        or the Services found at this Site or the Company Content therein.</li>
    <li>You agree to provide government-issued photo identification and/or government-issued
        business identification as required for verification of identity when requested.</li>
    <li>Without limiting any of the rights set forth elsewhere in these Terms, the Company expressly
        reserves the right to deny, cancel, terminate, suspend, or limit future access to this Site or any
        Services to any User (i) which breaches these Terms or any other Terms and Conditions, Service
        Terms, policies or rules may be published on the Site, or (ii) who otherwise engages or has
        engaged in inappropriate or unlawful activity while utilising the Site or Services (as determined
        by the Company in its sole and absolute discretion). </li>
</ul>
<h4>5. PROTECTION OF YOUR DATA</h4>
<p>The Company may involve the collection and processing of personal data about you during the course
    of your use of this Site. The Privacy Policy available at info@3rtsmartgold.com is hereby incorporated
    by reference and applicable to your usage of the Site and the Services.</p>
<h4>6. AVAILABILITY OF WEBSITE/SERVICES</h4>
<p>You acknowledge and agree that from time to time this Site may be inaccessible or inoperable for any
    reason including, but not limited to, equipment malfunctions; periodic maintenance, repairs or
    replacements that we undertake from time to time; or causes beyond our reasonable control or that
    are not reasonably foreseeable including, but not limited to, interruption or failure of
    telecommunication or digital transmission links, hostile network attacks, network congestion or other
    failures. You acknowledge and agree that we have no control over the availability of this Site or the
    Service on a continuous or uninterrupted basis, and that we assume no liability to you or any other
    party with regard thereto. </p>
<h4>7. ADDITIONAL RESERVATION OF RIGHTS </h4>
<p>The Company expressly reserves the right to deny, cancel, terminate, suspend, lock, or modify access
    to the Site or the Services for any reason (as determined by the Company in its sole and absolute
    discretion), including but not limited to the following: </p>
<ul>
    <li>to protect the integrity and stability of the Site;</li>
    <li>to correct mistakes made by the Company in offering or delivering any Services;</li>
    <li>to assist with our fraud and abuse detection and prevention efforts;</li>
    <li>to comply with court orders against you, or any applicable local, state, national and
        international laws, rules and regulations;</li>
    <li>to comply with requests of law enforcement, including subpoena requests;</li>
    <li>to comply with any dispute resolution process;</li>
    <li>to defend any legal action or threatened legal action without consideration for whether such
        legal action or threatened legal action is eventually determined to be with or without merit;</li>
    <li>to avoid any civil or criminal liability on the part of the Company, its officers, directors,
        employees and agents, as well as the Companys affiliates, including, but not limited to,
        instances where you have sued or threatened to sue the Company; or</li>
    <li>to respond to issues which could result in damage to the Companys business, operations,
        reputation or shareholders. </li>
</ul>
<p>The Company expressly reserves the right to terminate, without notice to you, your access to the Site
    and all Services thereon where, in the Companys sole discretion, you are harassing or threatening the
    Company and/or any of its employees.</p>
<p>The content on this Site and otherwise relating to the Services, including without limitation the text,
    software, scripts, source code, API, graphics, photos, sounds, music, videos and interactive features
    and the trademarks, service marks and logos contained therein ("Company Content"), are owned by
    or licensed to the Company, and are subject to copyright, trademark, and/or patent protection in
    Singapore and all relevant jurisdictions, and other intellectual property rights under the laws of
    Singapore and all relevant jurisdictions. Company Content is provided to you "as is", "as available" and
    "with all faults" for your information and personal, non-commercial use only and may not be
    downloaded, copied, reproduced, distributed, transmitted, broadcast, displayed, sold, licensed, or
    otherwise exploited for any purposes whatsoever without the express prior written consent of the
    Company. No right or license under any copyright, trademark, patent, or other proprietary right or
    license is granted by these Terms. The Company reserves all rights not expressly granted in and to the
    Company Content, the Site and the Services; these Terms do not transfer ownership of any of these
    rights.</p>
<h4>8. DISCLAIMER OF REPRESENTATIONS AND WARRANTIES</h4>
<p><b>YOU SPECIFICALLY ACKNOWLEDGE AND AGREE THAT YOUR USE OF THIS SITE AND THE SERVICES ON
        THIS SITE SHALL BE AT YOUR OWN RISK AND THAT THIS SITE AND THE SERVICES FOUND AT THIS SITE
        ARE PROVIDED "AS IS", "AS AVAILABLE" AND "WITH ALL FAULTS". THE COMPANY, ITS OFFICERS,
        DIRECTORS, EMPLOYEES, AGENTS, AND ALL THIRD-PARTY SERVICE PROVIDERS DISCLAIM ALL
        WARRANTIES, STATUTORY, EXPRESS OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, ANY IMPLIED
        WARRANTIES OF TITLE, MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. THE COMPANY, ITS OFFICERS, DIRECTORS, EMPLOYEES, AND AGENTS MAKE NO
        REPRESENTATIONS OR WARRANTIES ABOUT (A) THE ACCURACY, COMPLETENESS, OR CONTENT OF
        THIS SITE, (B) THE ACCURACY, COMPLETENESS, OR CONTENT OF ANY SITES LINKED (THROUGH
        HYPERLINKS, BANNER ADVERTISING OR OTHERWISE) TO THIS SITE, AND/OR (C) THE SERVICES FOUND
        AT THIS SITE OR ANY SITES LINKED (THROUGH HYPERLINKS, BANNER ADVERTISING OR OTHERWISE)
        TO THIS SITE, AND THE COMPANY ASSUMES NO LIABILITY OR RESPONSIBILITY FOR THE SAME. </b> </p>
<p><b>YOU SPECIFICALLY ACKNOWLEDGE AND AGREE THAT NO ORAL OR WRITTEN INFORMATION OR
        ADVICE PROVIDED BY THE COMPANY, ITS OFFICERS, DIRECTORS, EMPLOYEES, OR AGENTS, AND
        THIRD-PARTY SERVICE PROVIDERS WILL (I) CONSTITUTE LEGAL OR FINANCIAL ADVICE OR (II) CREATE
        A WARRANTY OF ANY KIND WITH RESPECT TO THIS SITE OR THE SERVICES FOUND AT THIS SITE, AND
        USERS SHOULD NOT RELY ON ANY SUCH INFORMATION OR ADVICE.</b> The information provided in this
    Site is for general informational purposes only. It does not constitute, and should not be considered,
    a formal offer to sell or a solicitation of an offer to buy any security in any jurisdiction, legal advice,
    investment advice, or tax advice.</p>
<p><b>THE FOREGOING DISCLAIMER OF REPRESENTATIONS AND WARRANTIES SHALL APPLY TO THE FULLEST
        EXTENT PERMITTED BY LAW, AND SHALL SURVIVE ANY TERMINATION OR EXPIRATION OF THESE
        TERMS OR YOUR USE OF THIS SITE OR THE SERVICES FOUND AT THIS SITE. </b></p>
<h4>9. LIMITATION OF LIABILITY </h4>
<p>IN NO EVENT SHALL THE COMPANY, ITS OFFICERS, DIRECTORS, EMPLOYEES, AGENTS, AND ALL THIRDPARTY SERVICE PROVIDERS, BE LIABLE TO YOU OR ANY OTHER PERSON OR ENTITY FOR ANY DIRECT,
    INDIRECT, INCIDENTAL, SPECIAL, PUNITIVE, OR CONSEQUENTIAL DAMAGES WHATSOEVER,
    INCLUDING ANY THAT MAY RESULT FROM (A) THE ACCURACY, COMPLETENESS, OR CONTENT OF THIS
    SITE, (B) THE ACCURACY, COMPLETENESS, OR CONTENT OF ANY SITES LINKED (THROUGH HYPERLINKS,
    BANNER ADVERTISING OR OTHERWISE) TO THIS SITE, (C) THE SERVICES FOUND AT THIS SITE OR ANY
    SITES LINKED (THROUGH HYPERLINKS, BANNER ADVERTISING OR OTHERWISE) TO THIS SITE, (D)
    PERSONAL INJURY OR PROPERTY DAMAGE OF ANY NATURE WHATSOEVER, (E) THIRD-PARTY
    CONDUCT OF ANY NATURE WHATSOEVER, (F) ANY UNAUTHORISED ACCESS TO OR USE OF OUR
    SERVERS AND/OR ANY AND ALL CONTENT, PERSONAL INFORMATION, FINANCIAL INFORMATION OR
    OTHER INFORMATION AND DATA STORED THEREIN, (G) ANY INTERRUPTION OR CESSATION OF
    SERVICES TO OR FROM THIS SITE OR ANY SITES LINKED (THROUGH HYPERLINKS, BANNER
    ADVERTISING OR OTHERWISE) TO THIS SITE, (H) ANY VIRUSES, WORMS, BUGS, TROJAN HORSES, OR
    THE LIKE, WHICH MAY BE TRANSMITTED TO OR FROM THIS SITE OR ANY SITES LINKED (THROUGH
    HYPERLINKS, BANNER ADVERTISING OR OTHERWISE) TO THIS SITE, (I) ANY CONTENT THAT IS
    DEFAMATORY, HARASSING, ABUSIVE, HARMFUL TO MINORS OR ANY PROTECTED CLASS,
    PORNOGRAPHIC, "X-RATED", OBSCENE OR OTHERWISE OBJECTIONABLE, (J) ANY LOSS OR DAMAGE
    OF ANY KIND INCURRED AS A RESULT OF YOUR USE OF THIS SITE OR THE SERVICES FOUND AT THIS
    SITE, WHETHER BASED ON WARRANTY, CONTRACT, TORT, OR ANY OTHER LEGAL OR EQUITABLE
    THEORY, AND WHETHER OR NOT THE COMPANY IS ADVISED OF THE POSSIBILITY OF SUCH DAMAGES,
    AND/OR (J) ANY AUTO-GENERATED OUTPUTS CREATED USING THE SERVICES. </p>
<p>IN ADDITION, YOU SPECIFICALLY ACKNOWLEDGE AND AGREE THAT IN NO EVENT SHALL THE
    COMPANYS TOTAL AGGREGATE LIABILITY EXCEED USD200.</p>
<p>THE FOREGOING LIMITATION OF LIABILITY SHALL APPLY TO THE FULLEST EXTENT PERMITTED BY LAW,
    AND SHALL SURVIVE ANY TERMINATION OR EXPIRATION OF THESE TERMS OR YOUR USE OF THIS SITE
    OR THE SERVICES FOUND AT THIS SITE. </p>
<h4>10. INDEMNITY </h4>
<p>You agree to protect, defend, indemnify and hold harmless the Company and its officers, directors,
    employees, agents, and third-party service providers from and against any and all claims, demands,
    costs, expenses, losses, liabilities and damages of every kind and nature (including, without limitation,
    reasonable attorneys’ fees) imposed upon or incurred by the Company directly or indirectly arising
    from: </p>
<ul>
    <li>your use of and access to this Site or the Services found at this Site;</li>
    <li>your violation of any provision of these Terms or the policies or agreements which are
        incorporated herein; and/or</li>
    <li> your violation of any third-party right, including without limitation any intellectual property or
        other proprietary right. </li>
</ul>
<p>The indemnification obligations under this Section shall survive any termination or expiration of these
    Terms or your use of this Site or the Services found at this Site. </p>
<h4>11. COMPLIANCE WITH LOCAL LAWS </h4>
<p>The Company makes no representation or warranty that the content available on this Site or the
    Services found at this Site are appropriate in every country or jurisdiction, and access to this Site or
    the Services found at this Site from countries or jurisdictions where its content is illegal is prohibited.
    Users who choose to access this Site or the Services found at this Site are responsible for compliance
    with all local laws, rules and regulations. </p>
<h4>12. DISPUTE RESOLUTION; ARBITRATION</h4>
<p>Please read this Section 12 carefully. It requires you to arbitrate disputes with the Company, and limits
    the manner in which you can seek relief from the Company.</p>
<p>All disputes arising out of or in connection with these Terms including without limitation the
    enforceability of this Section 12 or any question regarding its existence, validity or termination, your
    access or use of the Site or the Services shall be referred to and finally resolved by arbitration
    administered by the Singapore International Arbitration Centre ("SIAC") in accordance with the
    Arbitration Rules of the Singapore International Arbitration Centre ("SIAC Rules") for the time being
    in force, which rules are deemed to be incorporated by reference in this Section 12. The seat of the
    arbitration shall be Singapore. The Tribunal shall consist of one (1) arbitrator. The language of the
    arbitration shall be English. The award of the arbitrator will be final and binding, and any judgment on
    the award rendered by the arbitrator may be entered in any court of competent jurisdiction. Each
    party will cover its own fees and costs associated with the arbitration proceedings. Notwithstanding
    the foregoing, the Company may seek and obtain injunctive relief in any jurisdiction in any court of
    competent jurisdiction, and you agree that these Terms are specifically enforceable by the Company
    through injunctive relief and other equitable remedies without proof of monetary damages.</p>
<p><b>WITH RESPECT TO ANY DISPUTE ARISING OUT OF OR RELATED TO THESE TERMS, INCLUDING
        WITHOUT LIMITATION DISPUTES RELATED TO THE SITE OR THE SERVICES: (A) YOU HEREBY
        EXPRESSLY GIVE UP YOUR RIGHT TO HAVE A TRIAL BY JURY; AND (B) YOU HEREBY EXPRESSLY GIVE
        UP YOUR RIGHT TO PARTICIPATE AS A MEMBER OF A CLASS OF CLAIMANTS IN ANY LAWSUIT,
        INCLUDING BUT NOT LIMITED TO CLASS ACTION LAWSUITS INVOLVING ANY SUCH DISPUTE. </b></p>
<h4>13. SUCCESSORS AND ASSIGNS</h4>
<p>These Terms shall be binding upon and inure to the benefit of the parties hereto and their respective
    heirs, successors and assigns. </p>
<h4>14. NO THIRD-PARTY BENEFICIARIES</h4>
<p>Nothing in these Terms shall be deemed to confer any third-party rights or benefits. </p>
<h4>15. TITLES AND HEADINGS; INDEPENDENT COVENANTS; SEVERABILITY </h4>
<p>The titles and headings of these Terms are for convenience and ease of reference only and shall not
    be utilised in any way to construe or interpret these Terms as otherwise set forth herein. Each
    covenant and agreement in these Terms shall be construed for all purposes to be a separate and
    independent covenant or agreement.</p>
<p>If a court of competent jurisdiction holds any provision (or portion of a provision) of these Terms to
    be illegal, invalid, or otherwise unenforceable, the remaining provisions (or portions of provisions) of
    these Terms shall not be affected thereby and shall be found to be valid and enforceable to the fullest
    extent permitted by law. </p>
<h4>16. ENGLISH LANGUAGE CONTROLS</h4>
<p>These Terms, along with all Service Terms identified above and incorporated herein by reference, are
    executed in the English language. To the extent any translation is provided to you, it is provided for
    convenience purposes only, and in the event of any conflict between the English and translated
    version, where permitted by law, the English version will control and prevail.</p>
<p>Strictly only where the translated version is required to be provided to you and is deemed binding by
    applicable law:
</p>
<ul>
    <li>both language versions shall have equal validity;</li>
    <li>each party acknowledges that it has reviewed both language versions and that they are
        substantially the same in all material respects; and</li>
    <li>in the event of any discrepancy between these two versions, the translated version may prevail,
        provided that the intent of the Parties has been fully taken into consideration.</li>
</ul>
<h4>17. CONTACT INFORMATION </h4>
<p>If you have any questions about these Terms, please contact us by email at the following e-mail
    address: <a href="mailto:info@3rtsmartgold.com">info@3rtsmartgold.com </a> </p>',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]

        ];

        TermsAndCondition::insert($data);
    }
}
