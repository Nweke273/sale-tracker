<?php

namespace Database\Seeders;

use App\Models\Lead;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LeadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lead::create([
            'salutation' => 'Mr',
            'first_name' => 'Godswill',
            'last_name' => 'Chisom',
            'company' => 'Innoscripta',
            'industry_id' => 2,
            'job_title_id' => 1,
            'rating_id' => 1,
            'pipeline_id' => 1,
            'loss_reason_id' => 1,
            'user_id' => 1,
            'lead_source_id' => 1,
            'phone' => '09065851596',
            'alt_phone' => '09029261190',
            'email' => 'chisom5710@gmail.com',
            'street' => 'GRA',
            'city' => 'Nsukka',
            'state' => 'Enugu',
            'zip_code' => '4109040',
            'country' => 'Nigeria',
            'website' => 'www.innoscripta.com',
            'description' => 'No description'

        ]);
    }
}
