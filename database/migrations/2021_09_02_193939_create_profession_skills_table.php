<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessionSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profession_skills', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('profession_id');
            $table->unsignedBigInteger('skill_id');

            $table->timestamps();

            //            IDX
            $table->index('profession_id', 'profession_skill_profession_idx');
            $table->index('skill_id', 'profession_skill_skill_idx');

            //            FK
            $table->foreign('profession_id', 'profession_skill_profession_fk')
                ->on('professions')
                ->references('id');

            $table->foreign('skill_id', 'profession_skill_skill_fk')
                ->on('skills')
                ->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profession_skills');

    }
}
