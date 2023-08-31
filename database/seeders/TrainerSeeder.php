<?php

namespace Database\Seeders;

use App\Models\Trainer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Trainer::create([
            "name"=>"Ahmed",
            "specialty"=>"programming",
            "image"=>"1.jpg",
        ]);
        Trainer::create([
            "name"=>"Mahmoud",
            "specialty"=>"programming",
            "image"=>"2.jpg",
        ]);
        Trainer::create([
            "name"=>"Taha",
            "specialty"=>"programming",
            "image"=>"3.jpg",
        ]);
        Trainer::create([
            "name"=>"Fatma",
            "specialty"=>"French",
            "image"=>"4.jpg",
        ]);
        Trainer::create([
            "name"=>"Mohamed",
            "specialty"=>"English",
            "image"=>"5.jpg",
        ]);
    }
}
