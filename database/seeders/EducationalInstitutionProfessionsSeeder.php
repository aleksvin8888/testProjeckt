<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class EducationalInstitutionProfessionsSeeder extends Seeder
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
                'educational_institution_id' => 1,
                'profession_id' => 1,
            ],
            [
                'educational_institution_id' => 1,
                'profession_id' => 2,
            ],
            [
                'educational_institution_id' => 1,
                'profession_id' => 3,
            ],
            [
                'educational_institution_id' => 2,
                'profession_id' => 3,
            ],
            [
                'educational_institution_id' => 2,
                'profession_id' => 4,
            ],
            [
                'educational_institution_id' => 2,
                'profession_id' => 5,
            ],
            [
                'educational_institution_id' => 3,
                'profession_id' => 1,
            ],
            [
                'educational_institution_id' => 3,
                'profession_id' => 5,
            ],
            [
                'educational_institution_id' => 4,
                'profession_id' => 1,
            ],
            [
                'educational_institution_id' => 4,
                'profession_id' => 5,
            ],
            [
                'educational_institution_id' => 5,
                'profession_id' => 6,
            ],
            [
                'educational_institution_id' => 5,
                'profession_id' => 7,
            ],
            [
                'educational_institution_id' => 6,
                'profession_id' => 8,
            ],
            [
                'educational_institution_id' => 6,
                'profession_id' => 9,
            ],
            [
                'educational_institution_id' => 6,
                'profession_id' => 6,
            ],
            [
                'educational_institution_id' => 7,
                'profession_id' => 8,
            ],
            [
                'educational_institution_id' => 7,
                'profession_id' => 9,
            ],
            [
                'educational_institution_id' => 7,
                'profession_id' => 1,
            ],
            [
                'educational_institution_id' => 8,
                'profession_id' => 1,
            ],
            [
                'educational_institution_id' => 8,
                'profession_id' => 5,
            ],
            [
                'educational_institution_id' => 9,
                'profession_id' => 1,
            ],
            [
                'educational_institution_id' => 9,
                'profession_id' => 9,
            ],

        ];

        foreach($materials as $material) {
            DB::table('educational_institution_professions')
                ->insert($material);
        }
    }
}
