<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Industry;
use App\Models\LeadSource;
use App\Models\LeadStages;
use App\Models\Rating;
use App\Models\Stage;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AccountTypeSeeder::class,
            DepartmentSeeder::class,
            IndustrySeeder::class,
            LeadSourceSeeder::class,
            OpportunityTypeSeeder::class,
            LossReasonSeeder::class,
            PipelineSeeder::class,
            RatingSeeder::class,
            CaseTypeSeeder::class,
            CaseOriginSeeder::class,
            CaseReasonSeeder::class,
            JobTitleSeeder::class,
            StageSeeder::class,
            LeadSeeder::class
        ]);
    }
}
