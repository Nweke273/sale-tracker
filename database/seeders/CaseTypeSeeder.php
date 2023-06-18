<?php

namespace Database\Seeders;

use App\Models\CaseType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CaseTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            ['title' => 'problem', 'type' => 'problem'],
            ['title' => 'Question', 'type' => 'Question'],
            ['title' => 'Request', 'type' => 'Request'],
        ];

        foreach ($types as $key => $type) {
            CaseType::create($type);
        }
    }
}
