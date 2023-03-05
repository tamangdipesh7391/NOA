<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu\Menu;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menuData = [
            [
                'name' => 'home',
                'slug' => 'home',
                'url' => 'home',
                'icon' => '',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'about us',
                'slug' => 'about-us',
                'url' => 'about',
                'icon' => '',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'activities',
                'slug' => 'activities',
                'url' => 'activities',
                'icon' => '',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'publication',
                'slug' => 'publication',
                'url' => 'publication',
                'icon' => '',
                'order' => 4,
                'is_active' => true,
            ],
            [
                'name' => 'conference',
                'slug' => 'conference',
                'url' => 'conference',
                'icon' => '',
                'order' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'our projects',
                'slug' => 'our-projects',
                'url' => 'conference',
                'icon' => '',
                'order' => 6,
                'is_active' => true,
            ],
            [
                'name' => 'awards',
                'slug' => 'awards',
                'url' => 'conference',
                'icon' => '',
                'order' => 7,
            ],
            [
                'name' => 'financial reports & funding',
                'slug' => 'financial-reports-funding',
                'url' => 'financial-reports-funding',
                'icon' => '',
                'order' => 8,
                'is_active' => true,
            ],
            [
                'name' => 'gallery',
                'slug' => 'gallery',
                'url' => 'gallery',
                'icon' => '',
                'order' => 9,
                'is_active' => true,
            ],
            [
                'name' => 'video',
                'slug' => 'video',
                'url' => 'video',
                'icon' => '',
                'order' => 10,
                'is_active' => true,
            ],
            [
                'name' => 'rewards',
                'slug' => 'rewards',
                'url' => 'rewards',
                'icon' => '',
                'order' => 11,
                'is_active' => true,
            ],
            [
                'name' => 'Travel Grant ',
                'slug' => 'travel-Grant ',
                'url' => 'travel-grant ',
                'icon' => '',
                'order' => 12,
                'is_active' => true,
            ],

        ];


        foreach ($menuData as $menu) {
            Menu::create($menu);
        }
    }
}
