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
                'educational_institution_id' => 1,
                'profession_id' => 4,
            ],
            [
                'educational_institution_id' => 3,
                'profession_id' => 5,
            ],
            [
                'educational_institution_id' => 3,
                'profession_id' => 1,
            ],
            [
                'educational_institution_id' => 4,
                'profession_id' => 2,
            ],
            [
                'educational_institution_id' => 4,
                'profession_id' => 3,
            ],
            [
                'educational_institution_id' => 5,
                'profession_id' => 4,
            ],
            [
                'educational_institution_id' => 5,
                'profession_id' => 5,
            ],


        ];

        foreach($materials as $material) {
            DB::table('educational_institution_professions')
                ->insert($material);
        }
    }
}
