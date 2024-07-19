<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\News;
class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 100; $i++) {
            $news = new News();
            $news ->title = $faker->unique()->sentence(5);
            $news ->content = $faker->realText(500);
            $news ->image_url = $faker->imageUrl(500,300,'news',true,'news: ');
            $news ->date = $faker->dateTimeThisMonth();
            $news ->save();
        }
    }
}
