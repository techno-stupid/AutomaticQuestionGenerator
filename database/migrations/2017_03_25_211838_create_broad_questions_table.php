<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBroadQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('broad_questions', function (Blueprint $table) {
            $table->increments('id');
            $table->text('questionTitle');
            $table->integer('subjectId');
            $table->integer('questionDifficultyLevel');
            $table->integer('questionMarks');
            $table->integer('questionImportance');
            $table->tinyInteger('publicationStatus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('broad_questions');
    }
}
