<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::dropIfExists('users');

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')   ;
            $table->string('password');
            $table->integer('dvs_code');
            $table->integer('pr_code');
            $table->string('phone');
            $table->string('address');
            $table->string('email_work');
            $table->date('birthday');
            $table->date('join_date');
            $table->string('passport');
            $table->date('date_passport');
            $table->string('experience');
            $table->string('contract');
            $table->string('image');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
