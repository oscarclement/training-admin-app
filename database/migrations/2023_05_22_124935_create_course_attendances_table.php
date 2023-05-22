<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_attendances', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('course');
            $table->tinyInteger('student');
            $table->tinyInteger('attendace_status');
            $table->dateTime('clock_in');
            $table->dateTime('clock_out');
            $table->dateTime('created_at');
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
        Schema::dropIfExists('course_attendances');
    }
}
