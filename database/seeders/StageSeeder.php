<?php

namespace Database\Seeders;

use App\Models\Stage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stages = [
            ['pipeline_id' => 1, 'name' => 'New', 'type' => 'Open'],
            ['pipeline_id' => 1, 'name' => 'Contacted', 'type' => 'Open'],
            ['pipeline_id' => 1, 'name' => 'Working', 'type' => 'Open'],
            ['pipeline_id' => 1, 'name' => 'Unqualified', 'type' => 'Closed'],
            ['pipeline_id' => 1, 'name' => 'Converted', 'type' => 'Converted'],
            ['pipeline_id' => 2, 'name' => 'Qualification', 'type' => 'Open', 'probability' => '10%'],
            ['pipeline_id' => 2, 'name' => 'Need Analysis', 'type' => 'Open', 'probability' => '35%'],
            ['pipeline_id' => 2, 'name' => 'Proposal', 'type' => 'Open', 'probability' => '75%'],
            ['pipeline_id' => 2, 'name' => 'Negotiation', 'type' => 'Open', 'probability' => '90%'],
            ['pipeline_id' => 2, 'name' => 'Closed Lost', 'type' => 'Lost', 'probability' => '0%'],
            ['pipeline_id' => 2, 'name' => 'Closed Won', 'type' => 'Won', 'probability' => '100%'],
            ['pipeline_id' => 3, 'name' => 'New', 'type' => 'Open'],
            ['pipeline_id' => 3, 'name' => 'Escalated', 'type' => 'Open'],
            ['pipeline_id' => 3, 'name' => 'Closed', 'type' => 'Closed'],

        ];

        foreach ($stages as $key => $stage) {
            Stage::create($stage);
        }
    }
}
