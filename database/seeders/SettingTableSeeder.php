<?php

namespace Database\Seeders;

use App\Models\Setting\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'name' => "Nepalese Association of <br> Optometrists (NAO)",
            'email' => 'info@optometrynepal.org, naonepal@yahoo.com',
            'address' => 'BP Koirala Lions Center for Ophthalmic Studies, Maharajgunj, Kathmandu, Nepal',
            'phone' => '+9779841406785 / +9779841754931',
            'mobile' => '+977-2345654',
            'icons' => 'uploads/logo/logo.png',
            'image' => 'uploads/logo/logo.png',
            'fax' => '',
            'post_box' => '',
            'website' => '',
            'meta_keywords' => '',
            'meta_title' => '',
            'meta_description' => '',
            'description' => "The education of optometry started in 1998 to meet the shortage of
             eye health professionals in Nepal. The course started with a three
             years program which was upgraded to four years in 2005.
              With increasing number of graduates in optometry in Nepal,
              the optometrists felt the need of an association to maintain
              solidarity among fellow professionals and fight for the right
               of its members"
        ]);
    }
}
