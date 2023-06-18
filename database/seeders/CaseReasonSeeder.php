<?php

namespace Database\Seeders;

use App\Models\CaseReason;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CaseReasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reasons = [
            ['title' => 'Existing Problem', 'type' => 'problem'],
            ['title' => 'Instructions not clear', 'type' => 'Lack of clarity'],
            ['title' => 'New Problem', 'type' => 'Problem'],
            ['title' => 'Complex Functionality', 'type' => 'Complexity'],
        ];

        foreach ($reasons as $key => $reason) {
            CaseReason::create($reason);
        }
    }
}
