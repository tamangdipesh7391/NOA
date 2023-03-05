<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Address\Country;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $countries = [
            ['country_name' => 'Nepal', 'code' => 'NP'],
        ];
        foreach ($countries as $key => $value) {
            Country::create($value);
        }

    }
}
