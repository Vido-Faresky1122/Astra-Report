<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            ['code' => 'DPT-001', 'name' => 'Human Resources & General Affairs'],
            ['code' => 'DPT-002', 'name' => 'Finance & Accounting'],
            ['code' => 'DPT-003', 'name' => 'Information Technology'],
            ['code' => 'DPT-004', 'name' => 'Sales & Business Development'],
            ['code' => 'DPT-005', 'name' => 'Marketing & Communications'],
            ['code' => 'DPT-006', 'name' => 'Customer Service & Relations'],
            ['code' => 'DPT-007', 'name' => 'Supply Chain & Logistics'],
            ['code' => 'DPT-008', 'name' => 'Procurement & Purchasing'],
            ['code' => 'DPT-009', 'name' => 'Research & Development'],
            ['code' => 'DPT-010', 'name' => 'Quality Assurance & Quality Control'],
            ['code' => 'DPT-011', 'name' => 'Legal & Compliance'],
            ['code' => 'DPT-012', 'name' => 'Internal Audit'],
            ['code' => 'DPT-013', 'name' => 'Operations & Production'],
            ['code' => 'DPT-014', 'name' => 'Product Management'],
            ['code' => 'DPT-015', 'name' => 'Health, Safety & Environment'],
            ['code' => 'DPT-016', 'name' => 'Corporate Strategy & Planning'],
            ['code' => 'DPT-017', 'name' => 'Public Relations'],
            ['code' => 'DPT-018', 'name' => 'Project Management Office'],
            ['code' => 'DPT-019', 'name' => 'Creative & Digital Media'],
            ['code' => 'DPT-020', 'name' => 'Corporate Social Responsibility'],
            ['code' => 'DPT-021', 'name' => 'Maintenance & Engineering'],
            ['code' => 'DPT-022', 'name' => 'Inventory & Warehouse'],
            ['code' => 'DPT-023', 'name' => 'Business Intelligence & Data'],
            ['code' => 'DPT-024', 'name' => 'After Sales & Technical Support'],
            ['code' => 'DPT-025', 'name' => 'Risk Management'],
        ];

        Department::upsert($departments, ['code'], ['name']);
    }
}
