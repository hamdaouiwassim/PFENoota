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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('Id');
            $table->string('Fullname');
            $table->string('Email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('Mobile');
            $table->string('Password');
            $table->string('State');
            $table->string('Roles');
            $table->rememberToken();
            $table->integer('Rank');

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
