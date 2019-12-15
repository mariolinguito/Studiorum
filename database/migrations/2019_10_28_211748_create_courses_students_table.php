<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses_students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('students_id');
            $table->unsignedBigInteger('courses_id');
            $table->timestamps();
        });

        Schema::table('courses_students', function (Blueprint $table) {
            $table->foreign('students_id')->references('id')->on('users');
            $table->foreign('courses_id')->references('id')->on('courses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses_students');
    }
}
