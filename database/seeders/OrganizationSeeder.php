<?php

namespace Database\Seeders;

use App\Models\Organization;
use Illuminate\Database\Seeder;

class OrganizationSeeder extends Seeder
{
    public function run(): void
    {
        Organization::create([
            'role' => 'Relation Expansion',
            'organization_name' => 'Himpunan Mahasiswa Teknik Informatika (HIMTI)',
            'period' => 'Nov 2023 - Present',
            'description' => 'Expanded HIMTI\'s partnerships with external organizations, managed professional communications, and supported cross-campus collaboration events.',
            'image' => 'organizations/himti.png',
        ]);

        Organization::create([
            'role' => 'Mentor',
            'organization_name' => 'SESVENT HIMTI 2024',
            'period' => 'Sep 2024 - Oct 2024',
            'description' => 'Guided new activists in understanding organizational structure, event management basics, and leadership skills during HIMTI onboarding.',
            'image' => 'organizations/sesvent.png',
        ]);

        Organization::create([
            'role' => 'Event Division Staff',
            'organization_name' => 'TECHNO HIMTI 2024 - Transcend',
            'period' => 'Jun 2024 - Sep 2024',
            'description' => 'Coordinated event rundown, speaker communications, and stage operations for one of HIMTI\'s largest technology seminars.',
            'image' => 'organizations/techno.png',
        ]);
    }
}