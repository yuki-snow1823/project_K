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
        Schema::create('folders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('year');
            $table->integer('month');
            $table->integer('day');
            $table->integer('earnings');
            $table->integer('table');
            $table->integer('time');
            $table->integer('ng_table');
            $table->integer('total_people');
            $table->text('memo');
            $table->timestamps();

            // 外部キー
            $table->bigInteger('user_id')
                    ->unsigned();
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('folders');
    }
}
