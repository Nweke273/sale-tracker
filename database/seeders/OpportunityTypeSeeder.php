<?php

namespace Database\Seeders;

use App\Models\OpportunityType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OpportunityTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $types = [
            ['title' => 'Existing Business'],
            ['title' => 'New Business']
        ];

        foreach ($types as $key => $type) {
            OpportunityType::create($type);
        }
    }
}
