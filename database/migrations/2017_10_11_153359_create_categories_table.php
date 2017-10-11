<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category_name')->comment('类别名称');
            $table->string('category_type')->comment('类别类型');
            $table->integer('parent_id')->nullable()->unsigned()->comment('父级类别ID');
            $table->integer('_lft')->nullable()->unsigned();
            $table->integer('_rgt')->nullable()->unsigned();
            $table->integer('depth')->nullable()->unsigned();
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
        Schema::dropIfExists('categories');
    }
}
