<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        // Languages
        Skill::create(['name' => 'PHP', 'category' => 'Languages', 'icon' => 'skills/php.png']);
        Skill::create(['name' => 'Python', 'category' => 'Languages', 'icon' => 'skills/python.png']);
        Skill::create(['name' => 'SQL', 'category' => 'Languages', 'icon' => 'skills/sql.png']);
        Skill::create(['name' => 'C++', 'category' => 'Languages', 'icon' => 'skills/cpp.png']);

        // Data & Backend Engineering
        Skill::create(['name' => 'Laravel', 'category' => 'Backend & Data', 'icon' => 'skills/laravel.png']);
        Skill::create(['name' => 'PySpark', 'category' => 'Backend & Data', 'icon' => 'skills/pyspark.png']);
        Skill::create(['name' => 'Pentaho Spoon', 'category' => 'Backend & Data', 'icon' => 'skills/pentaho.png']);
        Skill::create(['name' => 'MySQL', 'category' => 'Backend & Data', 'icon' => 'skills/mysql.png']);

        // Analytics & Tools
        Skill::create(['name' => 'Power BI', 'category' => 'Analytics & Tools', 'icon' => 'skills/powerbi.png']);
        Skill::create(['name' => 'Docker', 'category' => 'Analytics & Tools', 'icon' => 'skills/docker.png']);
        Skill::create(['name' => 'Figma', 'category' => 'Analytics & Tools', 'icon' => 'skills/figma.png']);
        Skill::create(['name' => 'Git / GitHub', 'category' => 'Analytics & Tools', 'icon' => 'skills/github.png']);
    }
}