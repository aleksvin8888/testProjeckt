<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skills = [
            [
                'title' => 'Creativity',
                'slug' => 'creativity',
                'description' => 'Creativity is defined as the tendency to
                generate or recognize ideas, alternatives, or possibilities
                that may be useful in solving problems, communicating with others,
                 and entertaining ourselves and others.',
            ],
            [
                'title' => 'Dedication',
                'slug' => 'dedication',
                'description' => 'the quality of being dedicated or committed to a task or purpose.',
            ],
            [
                'title' => 'Coordinating ',
                'slug' => 'coordinating',
                'description' => ' the process of organizing people or groups so
                 that they work together properly and well',
            ],
            [
                'title' => 'Reporting ',
                'slug' => 'reporting ',
                'description' => 'Reporting analysts help drive critical business decisions
                 by analyzing metrics and designing reports. They communicate these results to managers and often',
            ],
            [
                'title' => 'Speaking',
                'slug' => 'speaking',
                'description' => 'the art of effective oral communication with an audience.
                 Synonyms Example Sentences Learn More About public speaking.',
            ],
            [
                'title' => 'Research ',
                'slug' => 'research ',
                'description' => 'Research is defined as the creation of new knowledge and/or
                 the use of existing knowledge in a new and creative way so as to generate new concepts,
                  methodologies and understandings. This could
                include synthesis and analysis of previous research to the extent that it leads
                 to new and creative outcomes',
            ],
            [
                'title' => 'Teamwork',
                'slug' => 'teamwork',
                'description' => 'Teamwork skills are the qualities and
                abilities that allow you to work well with others during conversations,
                projects, meetings or other collaborations. Having teamwork skills is dependent
                 on your ability to communicate well,
                 actively listen and be responsible and honest',
            ],
            [
                'title' => 'Communication',
                'slug' => 'communication',
                'description' => 'Communication is simply the act of transferring information
                from one place, person or group to another. Every communication involves (at least)
                one sender, a message and a recipient. ... The transmission of
                the message from sender to recipient can be affected by a huge range of things',
            ],
            [
                'title' => 'Collaboration',
                'slug' => 'collaboration',
                'description' => 'Collaboration is a working practice whereby individuals
                work together for a common purpose to achieve business benefit.
                 Collaboration enables individuals
                 to work together to achieve a defined and common business purpose.',
            ],
            [
                'title' => 'Accounting',
                'slug' => 'accounting',
                'description' => 'Accounting is the process of recording financial transactions
                pertaining to a business. ... The financial statements used in accounting are a
                concise summary of financial transactions over an accounting period,
                 summarizing a companys operations, financial position and cash flows.',
            ],

        ];

        foreach($skills as $skill) {
            Skill::create($skill);
        }
    }
}
