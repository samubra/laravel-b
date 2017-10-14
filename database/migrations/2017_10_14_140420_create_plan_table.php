<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('plan_title')->comment('培训计划标题');
            $table->integer('plan_type_id')->unsigned()->comment('培训计划类型：电工、焊工等');
            $table->integer('plan_is_review_id')->commit('培训计划是新训、复训或换证');
            $table->integer('plan_status_id')->unsigned()->comment('培训计划状态ID，对应category的ID');
            $table->boolean('plan_can_apply')->default(0)->comment('接受报名申请开关');
            $table->date('end_apply_date')->comment('报名受理截至日期');
            $table->date('start_date')->comment('培训开始日期');
            $table->date('end_date')->comment('培训结束日期');
            $table->date('exam_date')->nullable()->comment('培训预计考试日期');
            $table->string('contact_name')->nullable()->comment('联系人');
            $table->string('contact_phone')->nullable()->comment('联系电话');
            $table->smallInteger('payment')->default(0);
            $table->text('description')->nullable()->comment('培训计划具体描述');
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
        Schema::dropIfExists('plans');
    }
}
