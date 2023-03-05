<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MembershipType\MembershipType;

class MembershipTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $membershipData = [
            [
                'type' => 'yearly',
                'description' => '',
                'price' => 1000,
                'status' => '1',
            ],
            [
                'type' => 'Life time	',
                'description' => '',
                'price' => 10000,
                'status' => '1',
            ],
        ];

        foreach ($membershipData as $type) {
            MembershipType::create($type);
        }
    }
}
