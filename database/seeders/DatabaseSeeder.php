<?php

namespace Database\Seeders;

use App\Models\EducationalInstitution;
use App\Models\Profession;
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
            SkillSeeder::class,
            ProfesionSkillsSeeder::class,
            EducationalInstitutionProfessionsSeeder::class,
        ]);

        Profession::factory()
            ->count(10)
            ->create();

        EducationalInstitution::factory()
            ->count(10)
            ->create();


    }
}
