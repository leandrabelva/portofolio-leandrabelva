<?php

namespace Database\Seeders;

use App\Models\Certification;
use Illuminate\Database\Seeder;

class CertificationSeeder extends Seeder
{
    public function run(): void
    {
        Certification::create([
            'title' => 'Data Processing & Pipeline Engineering',
            'issuer' => 'BINUS Computer Club',
            'issue_date' => '2026-01-15',
            'image' => 'certifications/cert-data.png',
            'credential_url' => 'https://example.com/credentials/cert-1',
        ]);

        Certification::create([
            'title' => 'Laravel Backend Architecture & Security',
            'issuer' => 'BINUS University',
            'issue_date' => '2025-11-20',
            'image' => 'certifications/cert-laravel.png',
            'credential_url' => 'https://example.com/credentials/cert-2',
        ]);

        Certification::create([
            'title' => 'Power BI Data Modeling & Analytics',
            'issuer' => 'Microsoft Certified Partner',
            'issue_date' => '2025-08-10',
            'image' => 'certifications/cert-powerbi.png',
            'credential_url' => null,
        ]);
    }
}