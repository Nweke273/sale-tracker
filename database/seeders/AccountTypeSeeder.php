<?php

namespace Database\Seeders;

use App\Models\AccountTypes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            ['title' => 'Prospect', 'type' => 'Prospect'],
            ['title' => 'Customer', 'type' => 'Customer'],
            ['title' => 'Partner', 'type' => 'Partner'],
            ['title' => 'Competitor', 'type' => 'Competitor'],
            ['title' => 'Investor', 'type' => 'Investor'],
            ['title' => 'Distributor', 'type' => 'Distributor'],
            ['title' => 'Integrator', 'type' => 'Integrator'],
            ['title' => 'Press', 'type' => 'Press'],
            ['title' => 'Reseller', 'type' => 'Reseller'],
            ['title' => 'Supplier', 'type' => 'Supplier'],
            ['title' => 'Vendor', 'type' => 'Vendor'],
            ['title' => 'Analyst', 'type' => 'Analyst'],
            ['title' => 'Other', 'type' => 'Other'],
        ];

        foreach ($types as $key => $type) {
            AccountTypes::create($type);
        }
    }
}
