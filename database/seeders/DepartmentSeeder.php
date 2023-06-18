<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
            ['title' => 'Accounting'],
            ['title' => 'Finance'],
            ['title' => 'Sales'],
            ['title' => 'Research and development'],
            ['title' => 'IT'],
            ['title' => 'Management'],
            ['title' => 'Administration'],
            ['title' => 'Customer Service'],
            ['title' => 'Technical Support'],
            ['title' => 'Marketing'],
            ['title' => 'Logistics'],
            ['title' => 'Operations'],
            ['title' => 'Planning'],
            ['title' => 'Human resources'],
            ['title' => 'Purchasing'],
            ['title' => 'Quality Assurance'],
            ['title' => 'Engineering'],
            ['title' => 'Export'],
            ['title' => 'Shipping'],
            ['title' => 'Public Relations'],
            ['title' => 'Production'],
            ['title' => 'Supervision'],
            ['title' => 'Product quality'],
            ['title' => 'Inventory']
        ];

        foreach ($departments as $key => $department) {
            Department::create($department);
        }
    }
}
