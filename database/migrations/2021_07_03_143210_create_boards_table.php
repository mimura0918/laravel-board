<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('boards')) {
            Schema::create('boards', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->integer('model');
                $table->integer('purpose');
                $table->string('userid', 20);
                $table->integer('characters');
                $table->integer('rank');
                $table->integer('level');
                $table->integer('numberp');
                $table->text('message', 100)->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boards');
    }
}
