<?php

namespace Database\Seeders;

use App\Models\Rating;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ratings = [
            ['title' => 'Hot'],
            ['title' => 'Warm'],
            ['title' => 'Cold']
        ];

        foreach ($ratings as $key => $rating) {
            Rating::create($rating);
        }
    }
}
