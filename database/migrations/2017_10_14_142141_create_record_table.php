<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id')->nullable()->unsigned();
            $table->integer('record_type_id')->unsigned();
            $table->date('first_get_date')->nullable();
            $table->date('print_date')->nullable();
            $table->date('review_date')->nullable();
            $table->date('reprint_date')->nullable();
            $table->boolean('is_reviewed')->default(0);
            $table->boolean('is_valid')->default(0);
            $table->text('remark')->nullable()->default(null);
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
        Schema::dropIfExists('records');
    }
}
