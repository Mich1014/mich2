<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mich extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create ('article', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('body');
        $table->timestanps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
