<?php

namespace Database\Seeders;

use App\Models\District;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $districts = [
            '
            Bhojpur-भोजपुर
            ',
            '
            Mugu-मुगु
            ',
            '
            Dailekh-दैलेख
            ',
            '
            Khotang-खोटाङ
            ',
            '
            Kalikot-कालिकोट
            ',
            '
            Jajarkot-जाजरकोट
            ',
            '
            Panchthar-पाँचथर
            ',
            '
            Rolpa-रोल्पा
            ',
            '
            Ilam-इलाम
            ',
            '
            Dadeldhura-डडेल्धुरा
            ',
            '
            Solukhumbu-सोलुखुम्बु
            ',
            '
            Arghakhanchi-अर्घाखाँची
            ',
            '
            Dang-दाङ
            ',
            '
            Sankhuwasabha-संखुवासभा
            ',
            '
            Humla-हुम्ला
            ',
            '
            Gulmi-गुल्मी
            ',
            '
            Taplejung-ताप्लेजुङ्ग
            ',
            '
            Terhathum-तेह्रथुम
            ',
            '
            Dhankuta-धनकुटा
            ',
            '
            Okhaldhunga-ओखलढुङ्गा
            ',
            '
            Udayapur-उदयपुर
            ',
            '
            Jhapa-झापा
            ',
            '
            Morang-मोरङ
            ',
            '
            Sunsari-सुनसरी
            ',
            '
            Saptari-सप्तरी
            ',
            '
            Siraha-सिराहा
            ',
            '
            Dhanusha-धनुषा
            ',
            '
            Mahottari-महोत्तरी
            ',
            '
            Sarlahi-सर्लाही
            ',
            '
            Rautahat-रौतहट
            ',
            '
            Bara-बारा
            ',
            '
            Parsa-पर्सा
            ',
            '
            Dolakha-दोलखा
            ',
            '
            Ramechhap-रामेछाप
            ',
            '
            Sindhuli-सिन्धुली
            ',
            '
            Kavrepalanchok-काभ्रेपलाञ्चोक
            ',
            '
            Sindhupalchok-सिन्धुपाल्चोक
            ',
            '
            Rasuwa-रसुवा
            ',
            '
            Nuwakot-नुवाकोट
            ',
            '
            Dhading-धादिङ
            ',
            '
            Chitwan-चितवन
            ',
            '
            Makawanpur-मकवानपुर
            ',
            '
            Bhaktapur-भक्तपुर
            ',
            '
            Lalitpur-ललितपुर
            ',
            '
            Kathmandu-काठठमाडौं
            ',
            '
            Gorkha-गोरखा
            ',
            '
            Lamjung-लमजुङ
            ',
            '
            Tanahun-तनहुँ
            ',
            '
            Kaski-कास्की
            ',
            '
            Manang-मनाङ
            ',
            '
            Mustang-मुस्ताङ
            ',
            '
            Parbat-पर्वत
            ',
            '
            Syangja-स्याङजा
            ',
            '
            Myagdi-म्याग्दी
            ',
            '
            Baglung-बाग्लुङ
            ',
            '
            Nawalparasi (Western Part from Bardaghat Susta)-नवलपरासी (बर्दघाट सुस्ता पश्चिम)
            ',
            '
            Rupandehi-रूपन्देही
            ',
            '
            Kapilvastu-कपिलबस्तु
            ',
            '
            Palpa-पाल्पा
            ',
            '
            Banke-बाँके
            ',
            '
            Bardiya-बर्दिया
            ',
            '
            Rukum (Western Part)-रूकुम (पश्चिम भाग)
            ',
            '
            Salyan-सल्यान
            ',
            '
            Dolpa-डोल्पा
            ',
            '
            Jumla-जुम्ला
            ',
            '
            Surkhet-सुर्खेत
            ',
            '
            Bajura-बाजुरा
            ',
            '
            Bajhang-बझाङ
            ',
            '
            Doti-डोटी
            ',
            '
            Achham-अछाम
            ',
            '
            Darchula-दार्चुला
            ',
            '
            Baitadi-बैतडी
            ',
            '
            Kanchanpur-कञ्चनपुर
            ',
            '
            Kailali-कैलाली
            ',
            '
            Pyuthan-प्यूठान
            ',
            '
            Nawalparasi (Eastern Part from Bardaghat Susta)-नवलपरासी (बर्दघाट सुस्ता पूर्व)
            ',
            '
            Rukum (Eastern Part)-रूकुम (पूर्वी भाग)
            ',
        ];

        foreach ($districts as $district) {
            District::create(
                [
                    'district_name' => $district,
                ]
            );
        }
    }
}
