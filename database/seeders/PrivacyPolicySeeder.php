<?php

namespace Database\Seeders;

use App\Models\PrivacyPolicy;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrivacyPolicySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'description' => '<h4>Introduction</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis tibi ergo istud dabit praeter Pyrrhonem, Aristonem eorumve similes, quos tu non probas? Quicquid enim a sapientia proficiscitur, id continuo debet expletum esse omnibus suis partibus; Idque testamento cavebit is, qui nobis quasi oraculum ediderit nihil post mortem ad nos pertinere? Hoc est vim afferre, Torquate, sensibus, extorquere ex animis cognitiones verborum, quibus inbuti sumus. Poterat autem inpune; Duo Reges: constructio interrete. An est aliquid, quod te sua sponte delectet? Nec vero audiendus Hieronymus, cui summum bonum est idem, quod vos interdum vel potius nimium saepe dicitis, nihil dolere.</p>
                <p>Cum autem venissemus in Academiae non sine causa nobilitata spatia, solitudo erat ea, quam volueramus. Quod ea non occurrentia fingunt, vincunt Aristonem; Neque enim civitas in seditione beata esse potest nec in discordia dominorum domus; Nec vero alia sunt quaerenda contra Carneadeam illam sententiam. Princeps huius civitatis Phalereus Demetrius cum patria pulsus esset iniuria, ad Ptolomaeum se regem Alexandream contulit. Itaque in rebus minime obscuris non multus est apud eos disserendi labor. Hoc ille tuus non vult omnibusque ex rebus voluptatem quasi mercedem exigit. Atque haec contra Aristippum, qui eam voluptatem non modo summam, sed solam etiam ducit, quam omnes unam appellamus voluptatem. Omnium enim rerum principia parva sunt, sed suis progressionibus usa augentur nec sine causa; Fortitudinis quaedam praecepta sunt ac paene leges, quae effeminari virum vetant in dolore. At enim, qua in vita est aliquid mali, ea beata esse non potest. Video equidem, inquam, sed tamen iam infici debet iis artibus, quas si, dum est tener, conbiberit, ad maiora veniet paratior.</p>
                <h4>About Us</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis tibi ergo istud dabit praeter Pyrrhonem, Aristonem eorumve similes, quos tu non probas? Quicquid enim a sapientia proficiscitur, id continuo debet expletum esse omnibus suis partibus; Idque testamento cavebit is, qui nobis quasi oraculum ediderit nihil post mortem ad nos pertinere? Hoc est vim afferre, Torquate, sensibus, extorquere ex animis cognitiones verborum, quibus inbuti sumus. Poterat autem inpune; Duo Reges: constructio interrete. An est aliquid, quod te sua sponte delectet? Nec vero audiendus Hieronymus, cui summum bonum est idem, quod vos interdum vel potius nimium saepe dicitis, nihil dolere.</p>
                <h4>What types of personal data are protected?</h4>
                <h5>Personal data</h5>
                <p>This notice applies to your “personal data”. This is any information relating to you as an identified or identifiable person.</p>
                <p>‘Special categories of personal data’ (United Kingdom (UK) and European Economic Area (EEA) countries) or ‘sensitive personal data’ in other countries</p>
                <p>Within the broad range of information which can be personal data, information revealing the following characteristics are considered “special categories of personal data” in the UK and EEA and are therefore subject to a greater degree of protection:</p>
                <ul>
                    <li>physical or mental health;</li>
                    <li>racial or ethnic origin;</li>
                    <li>political opinions;</li>
                    <li>trade union membership;</li>
                    <li>religious or philosophical beliefs;</li>
                    <li>sexuality or sexual life; and</li>
                    <li>genetic and biometric data.</li>
                </ul>
                <p>Outside of the UK and EEA, other types of sensitive personal data, in addition to the “special categories of data” mentioned above, may include:</p>
                <ul>
                    <li>social status;</li>
                    <li>criminal history;</li>
                    <li>membership of a professional or trade association;</li>
                    <li>social security numbers;</li>
                    <li>bank account information; and</li>
                    <li>financial data.</li>
                </ul>
                <h4>What personal data we collect </h4>
                <h5>Personal data you give us</h5>
                <p>You may give us personal data about you by filling in forms online, corresponding with us by phone, email, in person, or otherwise, or through a recruitment agency or other third party.</p>',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]

        ];

        PrivacyPolicy::insert($data);
    }
}
