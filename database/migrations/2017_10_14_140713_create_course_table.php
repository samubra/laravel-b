<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('course_title')->comment('课程标题');
            $table->integer('course_type_id')->comment('课程类型，理论或操作');
            $table->integer('default_teacher_id')->nullable()->unsigned()->comment('默认授课教师ID');
            $table->decimal('default_hours', 10, 1)->default(4.0)->comment('默认课时');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
