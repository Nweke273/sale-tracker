<?php

namespace Database\Seeders;

use App\Models\LossReason;
use App\Models\Pipeline;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LossReasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reasons = [
            ['title' => 'Lost to competitor', 'type' => 'Lost to competitor'],
            ['title' => 'No Budget/Lost funding', 'type' => 'Internal reason'],
            ['title' => 'No decision /Non-responsive', 'type' => 'Internal reason'],
            ['title' => 'Price', 'type' => 'Price'],
            ['title' => 'other', 'type' => 'other'],
        ];

        foreach ($reasons as $key => $reason) {
            LossReason::create($reason);
        }
    }
}
