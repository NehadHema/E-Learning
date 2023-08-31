<?php

namespace Database\Seeders;

use App\Models\SiteContent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SiteContent::create([
            "name" => "banner",
            "content" => json_encode([
              "title" => "EVERY Student YEARNS TO LEARN",
              "subtitle" => "Making Your World Better",
              "desc" => "Replenish seasons may male hath fruit beast were seas saw you arrie said man beast whales his void unto last session for bite. Set have great you'll male grass yielding yielding man"
            ]),
        ]);

        SiteContent::create([
            "name" => "awesome",
            "content" => json_encode([
              "subtitle" => "Awesome Feature",
              "desc" => "Set have great you male grass yielding an yielding first their you're have called the abundantly fruit were man"
            ])
        ]);

        SiteContent::create([
            "name" => "subtitle1",
            "content" => json_encode([
              "subtitle" => "Better Future",
              "desc" => "Set have great you male grasses yielding yielding first their to called deep abundantly Set have great you male"
            ])
        ]);

        SiteContent::create([
            "name" => "subtitle2",
            "content" => json_encode([
              "subtitle" => "Qualified Trainers",
              "desc" => "Set have great you male grasses yielding yielding first their to called deep abundantly Set have great you male"
            ])
        ]);
        SiteContent::create([
            "name" => "subtitle3",
            "content" => json_encode([
              "subtitle" => "Job Oppurtunity",
              "desc" => "Set have great you male grasses yielding yielding first their to called deep abundantly Set have great you male"
            ])
        ]);

        SiteContent::create([
                "name" => "about",
                "content" => json_encode([
                  "title" => "ABOUT US",
                  "subtitle" => "Learning with Love",
                  "desc" => "Fifth saying upon divide divide rule for deep their female all hath brind Days and beast greater grass signs abundantly have greater also days years under brought moveth.",
                ]),
            ]);

        SiteContent::create([
            "name" => "courses",
            "content" => json_encode([
              "subtitle" => "POPULAR COURSES",
              "desc" => "Courses"
            ])
        ]);

        SiteContent::create([
                "name" => "advance",
                "content" => json_encode([
                  "title"=>"ADVANCE FEATURE",
                  "subtitle" => "Our Advance Educator Learning System",
                  "desc" => "Fifth saying upon divide divide rule for deep their female all hath brind mid Days and beast greater grass signs abundantly have greater also use over face earth days years under brought moveth she star"
                ])
            ]);
    
            SiteContent::create([
                "name" => "advance1",
                "content" => json_encode([
                  "subtitle" => "Learn Anywhere",
                  "desc" => "There earth face earth behold she star so made void two given and also our"
                ])
            ]);
            SiteContent::create([
                "name" => "advance2",
                "content" => json_encode([
                  "subtitle" => "Expert Teacher",
                  "desc" => "There earth face earth behold she star so made void two given and also our"
                ])
            ]);

        SiteContent::create([
                "name" => "testominial",
                "content" => json_encode([
                  "title" => "TESIMONIALS",
                  "subtitle" => "Happy Students"
                ])
            ]);
    }
}
