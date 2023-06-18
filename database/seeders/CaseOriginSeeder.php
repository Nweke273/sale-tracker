<?php

namespace Database\Seeders;

use App\Models\CaseOrigin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CaseOriginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $origins = [
            ['title' => 'Email', 'type' => 'Writing'],
            ['title' => 'Phone', 'type' => 'Call'],
            ['title' => 'Web', 'type' => 'Writing'],
        ];

        foreach ($origins as $key => $origin) {
            CaseOrigin::create($origin);
        }
    }
}
