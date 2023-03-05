<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\About\About;
use App\Models\Activities\Activities;
use App\Models\Awards\Awards;
use App\Models\Banner\Banner;
use App\Models\Conference\Conference;
use App\Models\Content\ContentType;
use App\Models\Events\Events;
use App\Models\FRAF\FRAF;
use App\Models\News\News;
use App\Models\Partners\Partners;
use App\Models\Project\Project;
use App\Models\Rewards\Rewards;
use App\Models\TravelGrant\TravelGrant;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Banner::factory()->count(20)->create();
        Events::factory()->count(20)->create();
        Project::factory()->count(20)->create();
        About::factory()->count(5)->create();
        Activities::factory()->count(20)->create();
        Awards::factory()->count(20)->create();
        Rewards::factory()->count(20)->create();
        News::factory()->count(20)->create();
        FRAF::factory()->count(20)->create();
        Conference::factory()->count(20)->create();
        TravelGrant::factory()->count(20)->create();
        Partners::factory()->count(20)->create();


        $this->call([
            AdminTableSeeder::class,
            MenuTableSeeder::class,
            CountryTableSeeder::class,
            ProvincesTableSeeder::class,
            DistrictTableSeeder::class,
            MunicipalitiesTableSeeder::class,
            MembershipTypeTableSeeder::class,
            SettingTableSeeder::class,
            ContentTypeTableSeeder::class,

        ]);
    }
}
