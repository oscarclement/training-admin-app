<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_assessments', function (Blueprint $table) {
            $table->id();
            $table->integer('course');
            $table->integer('student');
            $table->tinyInteger('likert_questions_1');
            $table->tinyInteger('likert_questions_2');
            $table->tinyInteger('likert_questions_3');
            $table->tinyInteger('likert_questions_4');
            $table->tinyInteger('likert_questions_5');
            $table->tinyInteger('likert_questions_6');
            $table->tinyInteger('likert_questions_7');
            $table->tinyInteger('likert_questions_8');
            $table->tinyInteger('questions_9');
            $table->text('questions_10');
            $table->text('questions_11_1');
            $table->text('questions_11_2');
            $table->text('questions_12');
            $table->dateTime('created_at');
            $table->integer('created_by');
            $table->string('created_ip');
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
        Schema::dropIfExists('course_assessments');
    }
}
