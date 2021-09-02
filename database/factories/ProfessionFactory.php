<?php

namespace Database\Factories;

use App\Models\Profession;
use App\Models\Skill;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

class ProfessionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profession::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $professions =  array(
            'композитор',
            'аранжировщик',
            'инструменталист',
            'дирижер',
            'концертмейстер',
            'звукорежиссер',
            'звукооператор',
            'Астрофизик',
            'Кинолог'
        );
      $professions =  collect($professions);

        return [
            'title' => $professions->random(),
            'description' => 'text description',
        ];
    }
}
