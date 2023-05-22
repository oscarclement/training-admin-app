<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_registrations', function (Blueprint $table) {
            $table->id();
            $table->integer('course');
            $table->string('first_name');
            $table->string('last_name');
            $table->tinyInteger('sex');
            $table->string('email');
            $table->string('phone');
            $table->string('position');
            $table->string('city');
            $table->integer('country');
            $table->string('organization');
            $table->text('comment')->nullable();
            $table->dateTime('created_at');
            $table->integer('created_by');
            $table->dateTime('updated_at')->nullable();
            $table->integer('updated_by')->nullable();
            $table->string('created_ip');
            $table->string('updated_ip')->nullable();
            $table->tinyInteger('approval_status')->nullable();
            $table->integer('approved_by')->nullable();
            $table->string('approved_ip')->nullable();
            $table->dateTime('approved_on')->nullable();
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
        Schema::dropIfExists('course_registrations');
    }
}
