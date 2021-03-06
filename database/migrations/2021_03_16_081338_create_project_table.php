<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::dropIfExists('project');
        Schema::create('project', function (Blueprint $table) {
            $table->increments('pr_id');
            $table->string('pr_name');
            $table->integer('br_id');
            $table->integer('dvs_id');
            $table->string('pr_pm');
            $table->date('pr_date');
            $table->string('pr_status');
            $table->string('pr_quality');
            $table->string('pr_tool');
            $table->string('pr_documentation');
            $table->string('pr_description');
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
        Schema::dropIfExists('project');

    }
}
