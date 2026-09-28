<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::create([
            'title' => 'Noisecore - E-Commerce Front-End',
            'category' => 'Web Development',
            'description' => 'Front-end e-commerce web application focused on audio equipment featuring category filters, product showcases, and interactive hero navigation designed for HCI course.',
            'image' => 'projects/noisecore.png',
            'embed_url' => 'https://www.canva.com/design/DAGXxxxxxx/watch?embed', // Ganti dengan link embed Canva / Google Slides kamu jika ada
            'pdf_file' => null,
            'github_url' => 'https://github.com/yourusername/noisecore',
            'website_url' => null,
            'figma_url' => 'https://figma.com/@yourusername',
        ]);

        Project::create([
            'title' => 'Emma Travel - Full-Stack Tour Package Platform',
            'category' => 'Backend Development',
            'description' => 'Full-stack web application with a Laravel backend, featuring an administrative dashboard for travel package management and pre-filled WhatsApp client booking integration.',
            'image' => 'projects/emma-travel.png',
            'embed_url' => null,
            'pdf_file' => null,
            'github_url' => 'https://github.com/yourusername/emma-travel',
            'website_url' => 'https://emmatravel.example.com',
            'figma_url' => null,
        ]);

        Project::create([
            'title' => 'Daily Pizza Order Volume Forecasting',
            'category' => 'Machine Learning & Data',
            'description' => 'Predictive machine learning pipeline using Random Forest Regressor and Hyperparameter Tuning via GridSearchCV, deployed as an interactive Streamlit web analytics dashboard.',
            'image' => 'projects/pizza-forecasting.png',
            'embed_url' => null,
            'pdf_file' => null,
            'github_url' => 'https://github.com/yourusername/pizza-sales-forecasting',
            'website_url' => null,
            'figma_url' => null,
        ]);
    }
}