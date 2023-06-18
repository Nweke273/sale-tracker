<?php

namespace Database\Seeders;

use App\Models\Industry;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class IndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $industries = [
            ['title' => 'Agriculture'],
            ['title' => 'Apparel'],
            ['title' => 'Banking'],
            ['title' => 'Biotechnology'],
            ['title' => 'Communications'],
            ['title' => 'Construction'],
            ['title' => 'Consulting'],
            ['title' => 'Education'],
            ['title' => 'Electronics'],
            ['title' => 'Energy'],
            ['title' => 'Engineering'],
            ['title' => 'Entertainment'],
            ['title' => 'Environmental'],
            ['title' => 'Finance'],
            ['title' => 'Food & Beverage'],
            ['title' => 'Government'],
            ['title' => 'Healthcare'],
            ['title' => 'Hospitality'],
            ['title' => 'Insurance'],
            ['title' => 'Machinery'],
            ['title' => 'Media'],
            ['title' => 'Not For Profit'],
            ['title' => 'Other'],
            ['title' => 'Retail'],
            ['title' => 'Shipping'],
            ['title' => 'Technology'],
            ['title' => 'Telecommunications'],
            ['title' => 'Transportation'],
            ['title' => 'Utilities'],
        ];
        foreach ($industries as $key => $industry) {
            Industry::create($industry);
        }
    }
}
