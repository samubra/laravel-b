<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('plan_id')->unsigned()->nullable()->comment('培训计划ID');
            $table->integer('member_id')->unsigned()->comment('培训学员ID');
            $table->integer('record_id')->unsigned()->nullable()->comment('操作证ID');
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('apply_is_review_id')->nullable()->comment('申请记录种类');
            $table->integer('health_id')->unsigned()->nullable();
            $table->integer('apply_status_id')->unsigned()->comment('申请受理状态');
            $table->smallInteger('pay')->default(0);
            $table->smallInteger('theory_score')->default(0);
            $table->smallInteger('operate_score')->default(0);
            $table->text('remark')->nullable();
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
        Schema::dropIfExists('applies');
    }
}
