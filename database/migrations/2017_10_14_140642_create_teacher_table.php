<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('teacher_name', 50)->comment('教师姓名');
            $table->string('teacher_identity', 30)->comment('教师身份证号码');
            $table->string('certificate_no', 50)->comment('教师资格证书编号');
            $table->integer('teacher_type_id')->unsigned()->comment('教师任教类别');
            $table->string('job_title')->comment('职称');
            $table->string('teacher_phone')->comment('联系电话');
            $table->string('teacher_company')->comment('任职单位');
            $table->integer('teacher_edu_id')->unsigned()->comment('教师文化程度');
            $table->string('teacher_photo')->nullable()->comment('教师联系电话');
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
        Schema::dropIfExists('teachers');
    }
}
