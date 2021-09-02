<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class ProfesionSkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $materials = [
            [
                'profession_id' => 1,
                'skill_id' => 1,
            ],
            [
                'profession_id' => 1,
                'skill_id' => 2,
            ],
            [
                'profession_id' => 1,
                'skill_id' => 3,
            ],
            [
                'profession_id' => 1,
                'skill_id' => 4,
            ],
            [
                'profession_id' => 1,
                'skill_id' => 1,
            ],
            [
                'profession_id' => 2,
                'skill_id' => 1,
            ],
            [
                'profession_id' => 2,
                'skill_id' => 2,
            ],
            [
                'profession_id' => 2,
                'skill_id' => 3,
            ],
            [
                'profession_id' => 2,
                'skill_id' => 4,
            ],
            [
                'profession_id' => 2,
                'skill_id' => 1,
            ],
            [
                'profession_id' => 3,
                'skill_id' => 1,
            ],
            [
                'profession_id' => 1,
                'skill_id' => 1,
            ],
            [
                'profession_id' => 3,
                'skill_id' => 5,
            ],
            [
                'profession_id' => 3,
                'skill_id' => 7,
            ],
            [
                'profession_id' => 4,
                'skill_id' => 5,
            ],
            [
                'profession_id' => 4,
                'skill_id' => 6,
            ],
            [
                'profession_id' => 4,
                'skill_id' => 1,
            ],
            [
                'profession_id' => 5,
                'skill_id' => 8,
            ],
            [
                'profession_id' => 5,
                'skill_id' => 9,
            ],
        ];

        foreach($materials as $material) {
            DB::table('profession_skills')
            ->insert($material);
        }

    }
}
