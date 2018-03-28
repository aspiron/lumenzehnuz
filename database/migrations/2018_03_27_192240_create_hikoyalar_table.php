<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHikoyalarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hikoyalar', function (Blueprint $table) {
            $table->increments('id')->autoIncrement();
            $table->integer('hsh_id');
            $table->string('title');
            $table->string('text');
            $table->string('author');
            $table->bigInteger('votes');
            $table->timestamps('date');
            $table->boolean('confirmed')->default($value);
        });
         Schema::create('sharti', function (Blueprint $table) {
            $table->increments('id')->autoIncrement();
            $table->string('title');
            $table->string('task');
            $table->string('status');
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
        // Schema::dropIfExists('hikoyalar');
         Schema::dropIfExists('sharti');
    }
}
