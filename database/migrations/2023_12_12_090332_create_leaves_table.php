<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaves', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('empid')->index()->nullable();
            $table->string('leave_type')->nullable();
            $table->dateTime('from_date')->nullable();
            $table->dateTime('to_date')->nullable();
            $table->float('num_days')->nullable();
            $table->string('desc')->nullable();
            $table->integer('admin_remark')->nullable();
            $table->dateTime('admin_remark_date')->nullable();
            $table->boolean('status')->nullable();
            $table->integer('type')->nullable();
            $table->boolean('admin_read')->nullable();
            $table->boolean('emp_read')->nullable();
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
        Schema::dropIfExists('leaves');
    }
}
