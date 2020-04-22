<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableActivity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Activity', function (Blueprint $table) {
            $table->id();
            $table->string('activity');
            $table->string('description');
            $table->string('number');
            $table->date('EventDate');
            $table->time('StartTime');
            $table->time('Endtime');
            $table->string('status');
            $table->integer('id_TopicType');
            $table->integer('id_Participants');
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
        Schema::dropIfExists('Activity');
    }
}
