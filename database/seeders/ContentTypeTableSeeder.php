<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Content\ContentType;
use App\Models\Content\Content;

class ContentTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contentTypeData = [
            [
                'title' => 'welcome',
                'slug' => 'welcome',
                'description' => "The education of optometry started in 1998
                 to meet the shortage of eye health professionals in Nepal.
                 The course started with a three years program which was
                  upgraded to four years in 2005. With increasing number
                   of graduates in optometry in Nepal, the optometrists
                   felt the need of an association to maintain solidarity among
                fellow professionals and fight for the right of its members."
            ],
        ];

        foreach ($contentTypeData as $contentType) {
            ContentType::create($contentType);
        }

        $contentData = [
            [
                'title' => 'vision',
                'slug' => 'vision',
                'description' => "No Nepalese remains needlessly blind",
                'content_type_id' => 1,
            ],
            [
                'title' => 'mission',
                'slug' => 'mission',
                'description' => "To increase the access of quality eye health services to people
                 in need and increase eye health awareness among people",
                'content_type_id' => 1,
            ], [
                'title' => 'objectives',
                'slug' => 'objectives',
                'description' => "a. To strive to develop and extend high-level optometric care and make it accessible to the general population b. To increase the demand for eye care services among people by increasing eye health awareness c. To innovate and implement ideas for sustainable eye care in the country d. To strive to uplift the academic level and skills of eye care practitioners. e. To devote for
                the rights, welfare, security and protection of its members.",
                'content_type_id' => 1,
            ],
        ];

        foreach ($contentData as $content) {
            Content::create($content);
        }


    }
}
