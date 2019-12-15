<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesInformation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses_information', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('courses_id');
            $table->unsignedInteger('course_time');
            $table->unsignedInteger('average_vote');
            $table->timestamps();
        });

        Schema::table('courses_information', function (Blueprint $table) {
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
        Schema::dropIfExists('courses_information');
    }
}
