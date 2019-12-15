<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesNotes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses_notes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('courses_id');
            $table->unsignedBigInteger('user_id');
            $table->text('course_note');
            $table->timestamps();
        });

        Schema::table('courses_notes', function (Blueprint $table) {
            $table->foreign('courses_id')->references('id')->on('courses');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses_notes');
    }
}
