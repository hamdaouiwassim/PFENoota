<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('Id');
            $table->integer('Iduser')->nullable();
            $table->string('Title')->nullable();
            $table->text('Content')->nullable();
            $table->string('Description')->nullable();
            $table->string('Keywords')->nullable();
            $table->string('Lang')->nullable();
            $table->string('State')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
