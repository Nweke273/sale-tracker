<?php

namespace Database\Seeders;

use App\Models\LeadStages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LeadStagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stages = [
            ['title' => 'New'],
            ['title' => 'Contacted'],
            ['title' => 'Working'],
            ['title'=>'Unqualified'],
            ['title'=>'converted']
        ];

        foreach ($stages as $key => $stage) {
            LeadStages::create($stage);
        }
    }
}
