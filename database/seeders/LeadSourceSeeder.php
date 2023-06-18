<?php

namespace Database\Seeders;

use App\Models\LeadSource;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LeadSourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sources = [
            ['title' => 'Advertisement', 'type' => 'Advertisement'],
            ['title' => 'Customer Event', 'type' => 'Customer Event'],
            ['title' => 'Employee Referral', 'type' => 'Employee Referral'],
            ['title' => 'External Referral', 'type' => 'External Referral'],
            ['title' => 'Google AdWords', 'type' => 'Google AdWords'],
            ['title' => 'Other', 'type' => 'Other'],
            ['title' => 'Partner', 'type' => 'Partner'],
            ['title' => 'Purchased List', 'type' => 'Purchased List'],
            ['title' => 'Trade Show', 'type' => 'Trade Show'],
            ['title' => 'Webinar', 'type' => 'Webinar'],
            ['title' => 'Website', 'type' => 'Website'],

        ];

        foreach ($sources as $key => $source) {
            LeadSource::create($source);
        }
    }
}
