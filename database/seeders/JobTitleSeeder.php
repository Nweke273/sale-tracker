<?php

namespace Database\Seeders;

use App\Models\JobTitle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles = [
            ['title' => 'Chief Executive Officer (CEO)', 'type' => 'Top Level'],
            ['title' => 'Chief Operating Officer (CEO)', 'type' => 'Top Level'],
            ['title' => 'Chief Technology Officer (CTO)', 'type' => 'Top Level'],
            ['title' => 'Chief Financial Officer (CFO)', 'type' => 'Top Level'],
            ['title' => 'President', 'type' => 'Top Level'],
            ['title' => 'Executive President', 'type' => 'Top Level'],
            ['title' => 'Senior Vice President', 'type' => 'Top Level'],
            ['title' => 'Vice President', 'type' => 'Top Level'],
            ['title' => 'Assistant Vice President', 'type' => 'Top Level'],
            ['title' => 'Associate Vice President', 'type' => 'Top Level'],
            ['title' => 'Senior Director', 'type' => 'Top Level'],
            ['title' => 'Assistant/Associate Director', 'type' => 'Top Level'],
            ['title' => 'Manager', 'type' => 'Top Level'],
            ['title' => 'Middle Manager', 'type' => 'Middle Level'],
            ['title' => 'Frontline employee', 'type' => 'First Line'],
        ];

        foreach ($titles as $key => $title) {
            JobTitle::create($title);
        }
    }
}
