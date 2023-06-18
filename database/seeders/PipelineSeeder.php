<?php

namespace Database\Seeders;

use App\Models\Pipeline;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PipelineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pipelines = [
            ['name' => 'Lead', 'type' => ""],
            ['name' => 'Opportunity', 'type' => ""],
            ['name' => 'Case', 'type' => ""],
        ];

        foreach ($pipelines as $key => $pipeline) {
            Pipeline::create($pipeline);
        }
    }
}
