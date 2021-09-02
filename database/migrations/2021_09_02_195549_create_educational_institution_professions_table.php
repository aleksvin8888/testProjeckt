<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationalInstitutionProfessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educational_institution_professions', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('educational_institution_id');
            $table->unsignedBigInteger('profession_id');

            $table->timestamps();

            //            IDX
            $table->index('educational_institution_id', 'educational_institution_profession_educational_institution_idx');
            $table->index('profession_id', 'educational_institution_profession_profession_idx');

            //            FK
            $table->foreign('educational_institution_id', 'educational_institution_profession_educational_institution_fk')
                ->on('educational_institutions')
                ->references('id');

            $table->foreign('profession_id', 'educational_institution_profession_profession_fk')
                ->on('professions')
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
        Schema::dropIfExists('educational_institution_professions');
    }
}
