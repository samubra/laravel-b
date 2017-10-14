<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanCourseRelationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_course_relation', function (Blueprint $table) {
            $table->integer('plan_id')->unsigned();
            $table->integer('course_id')->unsigned();
            $table->integer('teacher_id')->nullable()->unsigned();
            $table->decimal('hours', 10, 1)->default(4.0);
            $table->dateTime('start_time')->nullable();
            $table->dateTime('end_time')->nullable();
            $table->timestamp('created_at')->nullable()->nullable();
            $table->timestamp('updated_at')->nullable()->nullable();
            $table->primary(['plan_id','course_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plan_course_relation');
    }
}
