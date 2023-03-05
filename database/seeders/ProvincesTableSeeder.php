<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Address\Provinces;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinceData = [
            [
                'province_name' => 'Province 1',
                'country_id' => 1,
            ],
            [
                'province_name' => 'Province 2',
                'country_id' => 1,
            ],
            [
                'province_name' => 'Province 3',
                'country_id' => 1,
            ],
            [
                'province_name' => 'Province 4',
                'country_id' => 1,
            ],
            [
                'province_name' => 'Province 5',
                'country_id' => 1,
            ],
            [
                'province_name' => 'Province 6',
                'country_id' => 1,
            ],
            [
                'province_name' => 'Province 7',
                'country_id' => 1,
            ],
        ];

        foreach ($provinceData as $province) {
            Provinces::create($province);
        }
    }
}
