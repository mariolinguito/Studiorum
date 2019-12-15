<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesQuestions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses_questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('courses_id');
            $table->unsignedBigInteger('user_id');
            $table->text('course_question');
            $table->timestamps();
        });

        Schema::table('courses_questions', function (Blueprint $table) {
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
        Schema::dropIfExists('courses_questions');
    }
}
