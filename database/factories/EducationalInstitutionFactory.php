<?php

namespace Database\Factories;

use App\Models\EducationalInstitution;
use App\Models\Profession;
use Illuminate\Database\Eloquent\Factories\Factory;

class EducationalInstitutionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EducationalInstitution::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $name =  array(
            'КУК',
            'КНУКиИ',
            'МАУП',
            'КНУБА',
            'ШАГ',
            'ХНМУ',
            'СНАУ',
            'ОГАУ',
            'ВФЕУ'
        );
        $name =  collect($name);

        return [
            'title' => $name->random(),
            'description' => 'text description',
        ];
    }
}
